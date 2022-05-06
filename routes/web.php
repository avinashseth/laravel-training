<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Crypt;

Route::get('encrypt-data/{data_string}', function(Request $request) {
    // for($i = 0; $i < 4; $i++) 
    // {
    //     $data = array(
    //         'date' => Carbon\Carbon::now(),
    //         'payload' => $request->data_string
    //     );
    //     // echo json_encode($data);
    //     $key = Crypt::encryptString(json_encode($data));
    //     echo '<a href="/d/' . $key . '">' . $key . '</a><br />';

    // }
    $user = \App\Models\User::where('id',1)
        ->first()
        ->toJson();
    // echo Crypt::encryptString($user);
    echo '<a href="/d/' . Crypt::encryptString($user) . '">Decrypt</a><br />';
    // echo '<a href="/d/' . Crypt::encryptString($request->data_string) . '">Decrypt</a><br />';
    // echo '<a href="/d/' . Crypt::encryptString($request->data_string) . '">Decrypt</a><br />';
    // echo '<a href="/d/' . Crypt::encryptString($request->data_string) . '">Decrypt</a><br />';
});

Route::get('/d/{token}', function(Request $request) {
    try {
        $decrypted = Crypt::decryptString($request->token);
        echo $decrypted;
    } catch (Expection $e) {
        echo "Something not right";
    }
});
