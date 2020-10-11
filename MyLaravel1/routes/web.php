<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index') -> name('post.index');

Route::get('/post/create', 'PostController@create') -> name('post.create');
Route::post('/post/store', 'PostController@store') -> name('post.store');


Route::get('/api/post/all', 'PostApiController@getAllPost') -> name('post.api.all');
Route::get('/api/post/best-of', 'PostApiController@getBestPost') -> name('post.api.best');
