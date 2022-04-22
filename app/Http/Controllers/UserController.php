<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Rules\ValidAge;

class UserController extends Controller
{
    function getAddNewUser() {

        return view('add-user');

    }

    function postAddNewUser(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|min:3|max:15',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'conf_password' => 'required',
            'age'   =>  ['required', new ValidAge]
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

    }
}
