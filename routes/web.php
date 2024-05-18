<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/',function(){
    return view('login');
});
Route::post('/validate',[UserController::class,'validateUser']);

Route::get('/manage',[UserController::class,'getUsers']);

Route::get('adduser',function(){
    return view('add');
});
Route::post('/saveuser',[UserController::class,'saveUserData']);

Route::post('/uploadimage',[UserController::class,'uploadImage']);

Route::get('/edit/{id}',[UserController::class,'edit']);
Route::post('/update/{id}',[UserController::class,'updateUser']);
Route::get("/delete/{id}",[UserController::class,'delete']);
