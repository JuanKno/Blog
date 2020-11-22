<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
*/

Route::get('posts', 'PostController@index');
Route::get('post/{post:slug}', 'PostController@show');
Route::get('author/{author}', 'PostController@author');
Route::get('featured', 'PostController@featured');
Route::get('stories', 'PostController@stories');
