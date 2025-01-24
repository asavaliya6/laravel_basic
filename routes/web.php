<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/', 'home')->name('home');

// Route::get('/second', function () { 
//     return view('second');
// });

// Route::view('/second', 'second'); 

// Route::get('/', function () {
//     return view('home'); 
// });

// Route::view('/', 'home'); 
// Route::view('contact', 'contact');
// Route::view('about', 'about');

// Route::view('/', 'home')->name('home');
// Route::view('contact', 'contact')->name('contact');
// Route::view('about', 'about')->name('about');

// Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
// Route::view('contact', 'contact')->name('contact');
// Route::view('about', 'about')->name('about');
 
// Route::get('posts/{postId}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show'); 
// Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show'); 

// Route::view('user-form','user-form');
// Route::post('adduser',[UserController::class,'addUser']);

// Route::get('/', function () {
//     return view('come');
// });

// Route::view('home2','home2')->middleware('check1');
// Route::view('/user','home2');
// Route::view('about2/{name}','about2');

Route::middleware('check1')->group(function(){
    Route::view('about2','about2');
    Route::view('contact','about2');
    Route::view('list','about2');
    Route::view('home2','home2');
});
