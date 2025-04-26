<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts',[PostController::class,'index'])->name('posts.index');

Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');   //add post form

Route::get('/posts/show/{id}',[PostController::class,'show'])->name('posts.show');

Route::get('/posts/edit/{id}',[PostController::class,'edit'])->name('posts.edit');      //edit post form



Route::post('/posts/store',[PostController::class,'store'])->name('posts.store');     //actually store the form data into a new post


Route::get('/posts/update/{id}',[PostController::class,'update'])->name('posts.update');     //actually edit the form data of an existing post

Route::get('/posts/delete/{id}',[PostController::class,'destroy'])->name('posts.delete');     //actually store the form data into a new post


Route::fallback(function(){
    return "<h2>error</h2><hr><h3>This is a fallback route</h3>";
});
