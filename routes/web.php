<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function() {

    $message = '<p class="red">Account not found</p>';

    return view('working_with', compact('message'));

});