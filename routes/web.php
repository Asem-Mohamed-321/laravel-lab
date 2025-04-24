<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts',[PostController::class,'index']);

Route::get('/posts/create',[PostController::class,'create']);   //add post form

Route::get('/posts/show/{id}',[PostController::class,'show']);

Route::get('/posts/edit/{id}',[PostController::class,'edit']);      //edit post form



Route::get('/posts/store',[PostController::class,'store']);     //actually store the form data into a new post

Route::get('/posts/update/{id}',[PostController::class,'update']);     //actually edit the form data of an existing post

Route::get('/posts/delete/{id}',[PostController::class,'destroy']);     //actually store the form data into a new post


Route::fallback(function(){
    return "<h2>error</h2><hr><h3>This is a fallback route</h3>";
});
