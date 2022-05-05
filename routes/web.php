<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\CallBackController;

Route::get('request-callback', [CallBackController::class, 'requestCallBack']);

Route::get('notifications', [CallBackController::class, 'getNotifications']);