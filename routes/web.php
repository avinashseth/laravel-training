<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function() {

    $users = ['Avinash'];

    return view('working_with', compact('users'));

});