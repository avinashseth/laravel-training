<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Cache;

Route::get('put-data-in-cache', function() {
    Cache::put('name', 'Avinash Seth');
    Cache::put('age', 18);
    Cache::put('height', 5.99);
    if(!Cache::has('height'))
    {
        Cache::put('height', 18.99);
    }
});

Route::get('get-data-in-cache', function() {
    echo Cache::get('name');
});

Route::get('check-data-in-cache', function() {
    echo Cache::has('name') ? 'Yes' : 'No';
});

Route::get('total-view/{count}', function($count) {
    if(!Cache::has('views')) {
        Cache::put('views',0);
    }
    Cache::increment('views', $count);
    echo Cache::get('views');
});

Route::get('delete-data-in-cache', function() {

    echo '<p>Checking if Data Exists in Cache? ';
    echo Cache::has('name') ? 'Yes' : 'No';
    echo '</p>';

    echo '<p>Deleting data from cache</p>';
    Cache::pull('name');
    
    echo '<p>Checking if Data Exists in Cache? ';
    echo Cache::has('name') ? 'Yes' : 'No';
    echo '</p>';
});

Route::get('put-data-in-cache-for-duration', function() {
    Cache::put('my-name', 'Avinash Seth', 3); // 3 = seconds
});

Route::get('cache-with-tag', function() {
    Cache::tags(['employee', 'developer'])->put('name', 'Avinash');
});
