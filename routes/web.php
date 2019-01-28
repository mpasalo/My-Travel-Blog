<?php

Route::get('/welcome', function () {

	return view('welcome');

});



// // -----PostsController------ 
 Route::resource('posts', 'PostsController');


 Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');


Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

// // -----PostsController------ 


Auth::routes();



