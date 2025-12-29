<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;

Route::view('/', 'welcome');
Route::view("/contact", 'contact');
Route::resource('jobs', JobController::class);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class,'store']);

Route::get("/login", [SessionController::class,"create"]);
Route::post("/login", [SessionController::class,"store"]);
Route::post("/logout", [SessionController::class, "destroy"]);