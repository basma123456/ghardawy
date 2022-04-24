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
//        dd(auth()->user()->likedUnlikedPlaces->where('place_id' , 60)->get());
        $myPlace =  Place::with
        (['users_liked_places' =>
            function($query) use ($me){
                $query->where('user_id' , $me)->latest();
            }

        ])->latest()->first();



        DB::beginTransaction();
       try {

           $place = Place::with('comments')->with('users_liked_places')->find($id);

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

        $detaching = $place->users_liked_places()->detach(auth()->id(), ['user_id' => auth()->id(), 'place_id' => $id , 'liked_status' => $likedStatus , 'unliked_status' => $unlikedStatus]);
        $attaching = $place->users_liked_places()->attach(auth()->id(), ['user_id' => auth()->id(), 'place_id' => $id ,'liked_status' => $likedStatus , 'unliked_status' => $unlikedStatus]);
        /*****************************likes part********************************/
//        $seminar->students->contains($student);
           //note

           if($likedStatus == 1 && $place->users_liked_places->contains(auth()->id()) && $myPlace->users_liked_places[0]->pivot->liked_status == 0 ){
//            $place->category->likes =  $place->category->getOriginal('likes') + 1;
//            $place->category->save();

            $myCat = Category::where('id', $place->category->id)->update(['likes' => $place->category->getOriginal('likes') + $likedStatus],
                ['likes' => $place->category->getOriginal('likes') + $unlikedStatus]);



        }elseif($unlikedStatus == 1  && $place->users_liked_places->contains(auth()->id()) && $myPlace->users_liked_places[0]->pivot->liked_status ==1 ){
//            dd(auth()->user->pivot->liked_status);
//            $place->category->likes =  $place->category->getOriginal('likes') - 1;
//
//            $place->category->save();

            $myCat = Category::where('id', $place->category->id)->update(['likes' => $place->category->getOriginal('likes') - 1]
            );

        }elseif(!$place->users_liked_places->contains(auth()->id()) && $myPlace->users_liked_places->pivot->likes_status == 0){
            $myCat = Category::where('id', $place->category->id)->update(['likes' => $place->category->getOriginal('likes') - $unlikedStatus , 'likes' => $place->category->getOriginal('likes') + $likedStatus]
            );

        }
        $place->push();
           DB::commit();




           /****************/

           if($likedStatus == 1 && !$place->users_liked_places->contains(auth()->id())) {
           }elseif($unlikedStatus == 1 && $place->users_liked_places->contains(auth()->id()) && $place->users_liked_places->liked_status ==1 ){

           }elseif ($likedStatus == 1 && $place->users_liked_places->contains(auth()->id()) && $place->users_liked_places->liked_status ==0 ){
               $myCat = Category::where('id', $place->category->id)->update(['likes' => $place->category->getOriginal('likes') + 1]
               );

           }


           /**************/


        return redirect()->back();
//    dd($r->pivot->liked_status);
//            $comment->place->likes = $comment->place->likes + $comment->likes;
//            $comment->place->unlikes = $comment->place->unlikes + $comment->unlikes;

//        $comment->place->save();

//        $comment->comments()->attach( $product->id , ['qty' => $request->total_qty , 'sale_unit_id' => $product->sale_unit_id ] );
//        $sale->products()->attach( $product->id , ['qty' => $request->total_qty , 'sale_unit_id' => $product->sale_unit_id ] );
}

       catch (\Exception $e) {
           DB::rollBack();
           return redirect()->back()->withErrors(['error' => $e->getMessage()] );

       }


    }


}
