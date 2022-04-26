<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

session_start();

class MySessionController extends Controller
{
    function setSessionValue(Request $request) {
        
        $request->session()->put('my_session_key', uniqid());
        $request->session()->put('my_name', 'Avinash Seth');

        $request->session()->flash('welcome_message', 'Session value set successfully');

        return redirect('/all');

    }

    function getSessionValue(Request $request) {

        echo $request->session()->get('my_session_key');

    }
    function getDeleteSession(Request $request) {
        $request->session()->forget('my_session_key');
    }

    function getAll(Request $request) {

        echo '<pre>' , print_r($request->session()->all()) , '</pre>';

        $request->session()->regenerate();

        echo '<pre>' , print_r($request->session()->all()) , '</pre>';

    }

    function checkForName(Request $request) {

        print_r($request->session()->has('my_name'));
        print_r($request->session()->exists('my_name'));

        dd($request->session()->has('nodejs'));
        dd($request->session()->exists('nodejs'));

        $request->session()->missing('name');

    }

    function checkForMissingDiscountCode(Request $request) {
        echo $request->session()->missing('discount_code') ? 'Yes' : 'No';
    }
}
