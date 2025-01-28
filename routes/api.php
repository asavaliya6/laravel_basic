<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserAuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/test",function(){
    return ["name"=>"Aditi Savaliya",'channel'=>"Code Step By Step"];
});


Route::resource('member',MemberController::class);

Route::post('signup',[UserAuthController::class,'signup']);
Route::post('login',[UserAuthController::class,'login']);
Route::get("login",[UserAuthController::class,"login"])->name('login');

Route::group(['middleware'=>"auth:sanctum"],function(){
    Route::get('studs',[StudController::class,'list']);
    Route::post('add-stud',[StudController::class,'addStudent']);
    Route::put('update-stud',[StudController::class,'updateStudent']);
    Route::delete('delete-stud/{id}',[StudController::class,'deleteStudent']);
    Route::get('search-stud/{name}',[StudController::class,'searchStudent']);
});