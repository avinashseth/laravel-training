<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\LanguageSwitchController;


Route::get('/', function() {
    return view('welcome');
});

Route::get('set-language/{language}', [LanguageSwitchController::class, 'changeLanguage'])->name('language-switch');