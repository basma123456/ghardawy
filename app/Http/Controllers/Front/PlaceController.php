<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Additional;
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
                $query->where('status' , $one);
            }
        ])->where('status' , 1)->find($id);
         $place != null ? $photos = $place->photos() :$photos = null;
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
    public function makeComment(Request $request , $id)
    {

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
        if($likedStatus == (int)1 && $place->users_liked_places->contains(auth()->id())){
            $place->category->likes =  $place->category->getOriginal('likes') + 1;

        }elseif($unlikedStatus == (int)1){
            $place->category->likes =  $place->category->getOriginal('likes') - 1;
        }
        $place->push();

        return redirect()->back();
//    dd($r->pivot->liked_status);
//            $comment->place->likes = $comment->place->likes + $comment->likes;
//            $comment->place->unlikes = $comment->place->unlikes + $comment->unlikes;

//        $comment->place->save();

//        $comment->comments()->attach( $product->id , ['qty' => $request->total_qty , 'sale_unit_id' => $product->sale_unit_id ] );
//        $sale->products()->attach( $product->id , ['qty' => $request->total_qty , 'sale_unit_id' => $product->sale_unit_id ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
