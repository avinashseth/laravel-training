<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


Route::get('/', function() {

    $user = User::select('*')
        ->where('id', 2)
        ->first();

    echo $user->password; // password

    echo '<br />';

    $currentPassword = '123456';

    echo Hash::make($currentPassword);

    echo '<br />';

    echo strcmp($user->password, $currentPassword);

    echo '<br />';

    echo Hash::check($currentPassword, $user->password) ? 'Yes' : 'No';

});