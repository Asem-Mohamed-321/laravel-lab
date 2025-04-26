<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/posts',[PostController::class,'index'])->name('posts.index');

Route::get('/posts/create',[PostController::class,'create'])->name('posts.create')->middleware('auth');   //add post form

Route::get('/posts/show/{id}',[PostController::class,'show'])->name('posts.show');

Route::get('/posts/edit/{id}',[PostController::class,'edit'])->name('posts.edit')->middleware('auth');      //edit post form



Route::post('/posts/store',[PostController::class,'store'])->name('posts.store')->middleware('auth');    //actually store the form data into a new post


Route::get('/posts/update/{id}',[PostController::class,'update'])->name('posts.update')->middleware('auth');      //actually edit the form data of an existing post

Route::get('/posts/delete/{id}',[PostController::class,'destroy'])->name('posts.delete');      //actually store the form data into a new post


Route::fallback(function(){
    return "<h2>error</h2><hr><h3>This is a fallback route</h3>";
});

require __DIR__.'/auth.php';
