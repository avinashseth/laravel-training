<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('product', ProductController::class);

Route::get('add-user', [UserController::class, 'getAddNewUser'])->name('get-add-new-user');
Route::post('add-user', [UserController::class, 'postAddNewUser'])->name('post-add-new-user');
