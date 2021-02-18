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
Route::get('/home/create', [HomeController::class,'create'])->middleware('user');
Route::post('/home/create', [HomeController::class,'store'])->middleware('user');
Route::get('/home/userlist', [HomeController::class,'userlist'])->middleware('user');
Route::get('/home/edit/{id}', [HomeController::class,'edit'])->middleware('user');
Route::post('/home/edit/{id}', [HomeController::class,'update'])->middleware('user');
Route::get('/home/delete/{id}', [HomeController::class,'delete'])->middleware('user');
Route::post('/home/delete/{id}', [HomeController::class,'confirmDelete'])->middleware('user');
Route::get('/home/details/{id}', [HomeController::class,'details'])->middleware('user');
