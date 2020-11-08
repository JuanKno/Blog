<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/', 'Blog\BlogController@index');
Route::get('/post', 'Blog\BlogController@post')->name('post');
Route::get('/author', 'Blog\BlogController@author')->name('author');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
