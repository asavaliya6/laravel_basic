<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsController;
use App\Http\Controllers\UserloginController;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});


// ------Simple Rounting-------
// Route::get('/second', function () { 
//     return view('second');
// });

// Route::view('/second', 'second'); 

// Route::get('/', function () {
//     return view('home'); 
// });


// -----Static Page-------
// Route::view('/', 'home'); 
// Route::view('contact', 'contact');
// Route::view('about', 'about');


// ---------Menu Navigation On Page------------
// Route::view('/', 'home')->name('home');
// Route::view('contact', 'contact')->name('contact');
// Route::view('about', 'about')->name('about');


// -----------Route To Controller------
// Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
// Route::view('contact', 'contact')->name('contact');
// Route::view('about', 'about')->name('about');
 

// ----------Route Parameters and Route Model Binding-----------
// Route::get('posts/{postId}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show'); 
// Route::get('posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('post.show'); 


// --------user-form validation----------
// Route::view('user-form','user-form');
// Route::post('adduser',[UserController::class,'addUser']);

// Route::get('/', function () {
//     return view('come');
// });


// -----------middleware group-----------
// Route::view('home2','home2')->middleware('check1');
// Route::view('/user','home2');
// Route::view('about2/{name}','about2');

// Route::middleware('check1')->group(function(){
//     Route::view('about2','about2');
//     Route::view('contact','about2');
//     Route::view('list','about2');
//     Route::view('home2','home2');
// });


// -------------Database Query Builder---------------
// Route::get('users',[User2Controller::class,'users']);


// ------------------Eloquent Model Query Builder----------------------
// Route::get('/students',[StudentController::class,'getStudents']);


// -------------Using Model Database Query Builder---------------
// Route::get('/users',[User2Controller::class,'queries']);


// --------------Routing Method----------------
// Route::get('user',[User2Controller::class, 'get']);
// Route::post('user',[User2Controller::class, 'post']);
// Route::put('user',[User2Controller::class, 'put']);
// Route::delete('user',[User2Controller::class, 'delete']);

// Route::view('form','user');


//--------------Any & Match Router Function-------------
// Route::get('user',[User2Controller::class, 'any']);
// Route::post('user',[User2Controller::class, 'any']);
// Route::put('use r',[User2Controller::class, 'any']);
// Route::delete('user',[User2Controller::class, 'any']);

// Route::any('user',[User2Controller::class,'any']);

// Route::match(['post','get'],'/user',[User2Controller::class, 'group1']);
// Route::match(['put','delete'],'/user',[User2Controller::class, 'group2']);

// Route::view('form','user');


// -------------HTTP Request Class------------
// Route::post('us',[UsController::class,'login']);

// Route::view('form','us');


// -----------------------session---------------------
// Route::view('login','login');
// Route::view('profile','profile');

// Route::post('login',[UserloginController::class,'login']);
// Route::get('logout',[UserloginController::class,'logout']);


// ------------------Flash Session---------------
// Route::post('add',[UserloginController::class,'adduser']);
// Route::view('user','login');


// ------------------Upload and Display image---------------
Route::view('upload','upload');
Route::post('upload',[UploadController::class,'upload']);
