<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index']);

Route::post('/tweet', [TweetController::class, 'store'])->name('tweet.create');

Route::get('/tweet/{id}', [TweetController::class, 'show'])->name('tweet.show');
// delete tweet
Route::delete('/tweet/{id}', [TweetController::class, 'destroy'])->name('tweet.destroy');


Route::get('/profile', [DashboardController::class, 'profile']);
Route::get('/bookmarks', [DashboardController::class, 'bookmarks']);


// Auth routes
Route::get('/sign-up', [AuthController::class, 'signUp']);
Route::post('/sign-up', [AuthController::class, 'store'])->name('auth.sign-up');