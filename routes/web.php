<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
// use Response;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('update-this-student/{student}', function(Request $request) {

    // $student = Student::where('id', $request->student)
    //     ->first();

    // dd(Auth::user());

    $user = User::find(5);

    if (! Gate::forUser($user)->allows('update-student')) {
        abort(403);
    }

    echo 'You can now update this student';

});

Route::get('delete-student', function() {

    $student = Student::find(2);

    // if (! Gate::allows('delete-student', $student)) {
    //     abort(403);
    // }

    // echo 'You have deleted the student';

    $response = Gate::inspect('delete-student', $student);
 
    if ($response->allowed()) {
        // The action is authorized...
    } else {
        echo $response->message();
    }


});