<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('user/{name}', function(Request $request) {

    return response()->json(
        [
            "greetings"=>"Hey {$request->name}, how are you doing today?"
        ]
    );

});

Route::post('person', function(Request $request) {

    return response()->json(
        [
            "greetings"=>"Hey {$request->name}, how are you doing today?"
        ]
    );

});

Route::prefix('user')->group(function() {
    Route::post('verify-user', function(Request $request) {
        return response()->json(['status'=>true,'message'=>'Your email ' . $request->email . ' is Unique Email']);
    });
});

Route::get('users', function(Request $request) {
    $user = User::limit($request->limit)->get()->toJson();
    return $user;
});