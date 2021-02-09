<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'verify']);
Route::get('/logout', [LogoutController::class,'index']);

Route::get('/home', [HomeController::class,'index']);
Route::get('/home/create', [HomeController::class,'create']);
Route::post('/home/create', [HomeController::class,'store']);
Route::get('/home/userlist', [HomeController::class,'userlist']);
Route::get('/home/edit/{id}', [HomeController::class,'edit']);
Route::post('/home/edit/{id}', [HomeController::class,'update']);
Route::get('/home/delete/{id}', [HomeController::class,'delete']);
Route::post('/home/delete/{id}', [HomeController::class,'confirmDelete']);
