<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Student;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('update-this-student/{student}', function(Request $request) {

    // $student = Student::where('id', $request->student)
    //     ->first();

    // dd(Auth::user());

    if (! Gate::allows('update-student')) {
        abort(403);
    }

    echo 'You can now update this student';

});