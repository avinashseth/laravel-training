<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Log::emergency("Emergency Log");
    Log::alert("Alert Log");
    Log::critical("Critical Log");
    Log::error("Error Log");
    Log::warning("Warning Log");
    Log::notice("Notice Log");
    Log::info("Info Log");
    Log::debug("Debug Log");
});

Route::get('/user', function () {
    Log::emergency("Emergency Log", ['user_id'=>rand(1000,9999)]);
});

Route::get('div', function() {
    $division = 5 / 0;
    echo $division;
});