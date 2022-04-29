<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontCommentRequest;
use App\Models\Additional;
use App\Models\Category;
use App\Models\Comment;
use App\Models\LikesUnlikesPlaces;
use App\Models\Place;
use App\Traits\GuardTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;


class PlaceController extends Controller
{
    use GuardTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $one = 1;
        $place = Place::with('users_liked_places')->with(['comments' =>
            function($query) use ($one){
                $query->where('status' , $one)->latest()->limit(2);
            }
        ])->where('status' , 1)->find($id);
        $place != null ? $photos = $place->photos() :$photos = null;
        if(isset( $place->comments)) {
            $place->comments->load('user');
        }
        $additions = Additional::with('place')->where('status' , 1)->latest()->get();

        if($place != null && $photos != null) {
            return view('front.place', ['place' => $place, 'photos' => $photos , 'additions' => $additions , 'id'=>$id ]);
        }else{
            return redirect('main');
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */





    public function makeComment(FrontCommentRequest $request , $id)

    {


        $me = auth()->id();


//        DB::beginTransaction();
        try {
            $user_id = Auth::id();


            $place = Place::with('comments')-> with(['users_liked_places' =>
                function($query) use ($id , $user_id ){
                    $query->where('place_id' , $id) -> where('user_id' , $user_id);
                }

            ])->find($id);

            $comment = new Comment();
            $comment->desc = $request->comment;
            $comment->user_id  = $this->getGuard() === 'web' || $this->getGuard() === 'seller' ? $this->getGuardId() : null;
            $comment->place_id = $id;
            $comment->admin_id  = $this->getGuard() === 'admin' ? $this->getGuardId() : null;
            $comment->super_admin_id  = $this->getGuard() === 'super-admin' ? $this->getGuardId() : null;
            $comment->status = 1;
            $comment->likes = $request->likes == (int)1 ? (int)1 : (int)0;
            $comment->unlikes = $request->likes == (int)0 ? (int)1 : (int)0;
            $comment->seen = 0;
            $comment->save();

            $comment->place()->associate($place);

            /*****************************likes part********************************/
            //it is acheckpoint input so i use the same name --likes-- for both inputs -likes input- and -unlikes input-
            $likedStatus = $request->likes == (int)1 ? (int)1 : (int)0;
            $unlikedStatus = $request->likes == (int)0 ? (int)1 : (int)0;



            if(isset($place->users_liked_places[0]->pivot->liked_status)) {
                $detaching = $place->users_liked_places()->detach(auth()->id(), ['user_id' => auth()->id(), 'place_id' => $id]);
                $attaching = $place->users_liked_places()->attach(auth()->id(), ['user_id' => auth()->id(), 'place_id' => $id, 'liked_status' => $likedStatus, 'unliked_status' => $unlikedStatus]);

//
                $place->push();
                if ($request->likes == (int)1 && $place->users_liked_places[0]->pivot->getOriginal('liked_status') == (int)0) {
                    $myCat = Category::where('id', $place->category->id)->update(['likes' => $place->category->getOriginal('likes') + 1]);

                } elseif ($request->likes == (int)0 && $place->users_liked_places[0]->pivot->getOriginal('liked_status') == (int)1) {
                    $myCat = Category::where('id', $place->category->id)->update(['likes' => $place->category->getOriginal('likes') - 1]

                    );

                }

            } else{
                $attaching = $place->users_liked_places()->attach(auth()->id(), ['user_id' => auth()->id(), 'place_id' => $id ,'liked_status' => $likedStatus , 'unliked_status' => $unlikedStatus]);

                $num = $request->likes == 0 ? -1 : 1;
                 $myCat = Category::where('id', $place->category->id)->update(['likes' => $place->category->getOriginal('likes') + $num]
                );


            }

//            DB::commit();

            return redirect()->back();
        }

        catch (\Exception $e) {
//            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );

        }


    }

}
