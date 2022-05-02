<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth\RegisterController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/google', [RegisterController::class, 'redirectToProvider'])->name('get-login-with-google');
Route::get('login/google/callback', [RegisterController::class, 'handleProviderCallback']);