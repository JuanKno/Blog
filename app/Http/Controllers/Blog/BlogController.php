<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.welcome');
    }

    public function post()
    {
        return view('blog.post');
    }

    public function author()
    {
        return view('blog.author');
    }
}
