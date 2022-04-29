<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/login', function() {
    echo 'Login to continue';
});

Route::get('/', function() {
    return view('working_with');
});

Route::get('/check-vote/{age}', function($age) {
    return view('check-age', ['age'=>$age]);
});