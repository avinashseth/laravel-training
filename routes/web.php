<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\FileController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/google', [RegisterController::class, 'redirectToProvider'])->name('get-login-with-google');
Route::get('login/google/callback', [RegisterController::class, 'handleProviderCallback']);

Route::prefix('file')->group(function() {
    Route::view('upload', 'files.upload-file');
    Route::post('upload', [FileController::class, 'postUploadFile'])->name('post-upload-file');
});