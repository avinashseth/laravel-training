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
    Route::post('upload-to-s3', [FileController::class, 'postUploadToAws'])->name('post-upload-s3');
});

Route::get('check', function() {
    echo Storage::disk('s3')->exists('files/1651582949.jpg') ? 'Yes' : 'No';
});

Route::get('download', function() {
    return Storage::disk('s3')->download('files/1651582949.jpg');
});

Route::get('file-url', function() {
    echo Storage::disk('s3')->url('files/1651582949.jpg');
});

Route::get('temp-access', function() {

    $url = Storage::disk('s3')->temporaryUrl(
        'files/1651582949.jpg', now()->addSeconds(20)
    );

    echo $url;

});

Route::get('pre', function() {
    Storage::prepend('file.log', 'Prepended Text');
    Storage::append('file.log', 'Appended Text');
});