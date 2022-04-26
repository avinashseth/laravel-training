<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\MySessionController;

Route::get('/', [MySessionController::class, 'setSessionValue']);

Route::get('/get-session', [MySessionController::class, 'getSessionValue']);
Route::get('/delete', [MySessionController::class, 'getDeleteSession']);
Route::get('/all', [MySessionController::class, 'getAll']);
Route::get('/cfn', [MySessionController::class, 'checkForName']);
Route::get('/cfmd', [MySessionController::class, 'checkForMissingDiscountCode']);

Route::get('/inc', function(Request $request) {
    echo $request->session()->increment('count', rand(1,9));
});