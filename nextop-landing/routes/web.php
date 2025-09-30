<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupportPageController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\RecruitersController;

Route::get('/', function () {
    return redirect('/home');
})->name('/');

Route::get('/home', [HomePageController::class, 'homePage']);
Route::get('/login', [LoginController::class, 'loginPage']);
Route::get('/support', [SupportPageController::class, 'supportPage']);
Route::get('/community', [CommunityController::class, 'communityPage']);
Route::get('/recruiters', [RecruitersController::class, 'recruitersPage']);

Route::fallback(function () {
    return redirect('/home');
});