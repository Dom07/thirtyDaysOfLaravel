<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;

Route::view('/', 'welcome');
Route::view("/contact", 'contact');

Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class,'store']); 

Route::get("/login", [SessionController::class,"create"])->name('login');
Route::post("/login", [SessionController::class,"store"]);
Route::post("/logout", [SessionController::class, "destroy"]);