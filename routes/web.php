<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
// use Response;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('update-student/{student}', function(Request $request) {

    $student = Student::where('id', $request->student)->first();

    $user = Auth::user();

    if($user->can('update', $student))
    {
        echo 'update';
    }
    else
    {
        echo 'cannot update';
    }
});

Route::get('delete', function() {

    $user = Auth::user();

    if($user->can('delete')) {
        echo 'you can delete';
    } else {
        echo 'you cannot delete';
    }

});