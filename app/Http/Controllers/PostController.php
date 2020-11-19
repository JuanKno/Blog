<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return Post::orderBy('id', 'DESC')->paginate();
    }


    public function featured()
    {

        return Post::orderBy('id', 'DESC')->limit(4)->with('user')->get();
    }

    public function stories(Request $request)
    {
        $stories = Post::orderBy('id', 'DESC')->with('user')->paginate(6);

        return [
            'pagination' => [
                'total'        => $stories->total(),
                'current_page' => $stories->currentPage(),
                'per_page'     => $stories->perPage(),
                'last_page'    => $stories->lastPage(),
                'from'         => $stories->firstItem(),
                'to'           => $stories->lastItem(),
            ],
            'stories' => $stories
        ];
    }

    public function show($post)
    {
        return Post::where('slug',$post)->with('user')->first();
    }
}
