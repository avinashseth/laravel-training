<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LanguageSwitchController extends Controller
{
    function changeLanguage(Request $request, $language) {
        // $_SESSION['app-language'] = $language
        // $request->session()->put('app-language', $language);
        User::where('id', 1)
            ->update(['language' => $language]);
        return redirect('/');

    }
}
