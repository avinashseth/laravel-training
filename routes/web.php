<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');