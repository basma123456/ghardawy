<?php

namespace App\Http\Controllers\Admin;

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
    public function index()
    {
        $comments = Comment::with('place')->with('user')->latest()->paginate(5);
        return view('admin.pages.comments.index' , compact('comments'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        try{
            $comment->delete();
            toastError('message have been deleted');
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()] );
        }
    }
}
