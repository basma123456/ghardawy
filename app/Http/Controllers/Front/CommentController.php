<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($place_id)
    {
        $comments = Comment::with('user')->where('place_id' , $place_id)->latest()->paginate(5);
        return view('front.comments' , compact('comments'));
    }
}
