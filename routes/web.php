<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Student;

use App\Http\Controllers\MySessionController;

Route::get('/my-home', function() {
    return view('myhome');
});

Route::get('profile', function() {
    if(Auth::check())
    {
        echo Auth::user()->active;
    }
    else
    {
        echo 'Not Logged In';
    }
});


Route::get('/user/{user_id}', function($user_id) {

    $user = User::find($user_id);
    Auth::login($user);

});

Route::get('/student/{student_id}', function($student_id) {

    $student = Student::find($student_id);
    Auth::login($student);

});

Route::get('/', [MySessionController::class, 'setSessionValue']);

Route::get('/get-session', [MySessionController::class, 'getSessionValue']);
Route::get('/delete', [MySessionController::class, 'getDeleteSession']);
Route::get('/all', [MySessionController::class, 'getAll']);
Route::get('/cfn', [MySessionController::class, 'checkForName']);
Route::get('/cfmd', [MySessionController::class, 'checkForMissingDiscountCode']);

Route::get('/inc', function(Request $request) {
    echo $request->session()->increment('count', rand(1,9));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
