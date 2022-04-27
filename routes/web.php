<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function() {

    $age = 17;

    return view('working_with', compact('age'));

});