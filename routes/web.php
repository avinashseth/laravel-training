<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function() {

    $users = \App\Models\User::select('name', 'email', 'email_verified_at')
        ->orderBy('id', 'desc')
        ->limit(10)
        ->get();

    return view('working_with', compact('users'));

});