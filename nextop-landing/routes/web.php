<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupportPageController;

Route::get('/home', [HomePageController::class, 'homePage']);
Route::get('/login', [LoginController::class, 'loginPage']);
Route::get('/support', [SupportPageController::class, 'supportPage']);
