<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view("/contact", 'contact');
Route::resource('jobs', JobController::class);