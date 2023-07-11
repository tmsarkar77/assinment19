<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function commentpage(Request $request){
        return view('components.comment');
    }

    public function comment(Request $request){       
        $comment = new Comment;
        $comment->name = $request->name;
        $comment->des = $request->message;
        $comment->save();
        return redirect()->route('singlepost');
    }
}
