<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
