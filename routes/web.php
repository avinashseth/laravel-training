<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\LanguageSwitchController;
use App\Mail\NewUserMail;
use App\Mail\NewOrderMail;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;


Route::get('/', function() {
    return view('welcome');
});

Route::get('/send', function() {
    $newUserEmail = 'avinash.seth@outlook.com';
    Mail::to($newUserEmail)->send(new NewUserMail());
});

Route::get('/order', function() {
    $orderDetails = ['order_number' => rand(10000,99999)];
    $userEmail = 'avinash.seth@outlook.com';
    Mail::to($userEmail)->send(new NewOrderMail($orderDetails));
});

Route::get('/shipped', function() {
    Mail::to('avinash.seth@outlook.com')->send(new OrderShipped());
});

Route::get('set-language/{language}', [LanguageSwitchController::class, 'changeLanguage'])->name('language-switch');