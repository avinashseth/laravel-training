<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\PaymentReminderController;
use App\Http\Controllers\PhotoController;

use App\Models\User;

Route::get('photo/{username}/comment', [PhotoController::class, 'getNotifyUserForNewComment'])->name('get-notify-user-for-comment');