<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function() {

    $users = \App\Models\User::where('id', '>', 5000)->limit(10)->get();

    return view('working_with', compact('users'));

});