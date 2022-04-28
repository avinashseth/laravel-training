<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function() {

    $users = \App\Models\User::limit(10)->get();

    return view('working_with', compact('users'));

    // return view('working_with');

});