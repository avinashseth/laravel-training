<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageSwitchController extends Controller
{
    function changeLanguage(Request $request, $language) {
        // $_SESSION['app-language'] = $language
        $request->session()->put('app-language', $language);
        return redirect('/');
    }
}
