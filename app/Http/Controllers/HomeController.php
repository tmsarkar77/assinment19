<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function page(){
        return view('components.blog');
    }

    public function singlepost(){
        return view('components.singlepost');
    }

    public function postdata(){
       
        $data = Post::all();
        return response()->json($data);
        
    }

    public function commentdata(){
       
        $data = Comment::all();
        return response()->json($data);
        
    }


}
