<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\User;

Route::prefix('user')->group(function() {
    Route::view('/', 'user.hi');
});

Route::get('users/{limit}', function(Request $request, $limit) {
    $user = User::limit($request->limit)->get()->toJson();
    return view('myusers', compact('user'));
});