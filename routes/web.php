<?php

// Route::get('/', function () { return view('welcome');});
Route::get('/','PostsController@index');   
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}','PostsController@show'); 
Route::post('/posts', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');