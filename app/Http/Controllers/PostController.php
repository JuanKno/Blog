<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function index()
    {
        return Post::orderBy('id','DESC')->paginate();
    }


    public function featured()
    {
    
        return Post::orderBy('id','DESC')->limit(4)->with('user')->get();
    }

  
}
