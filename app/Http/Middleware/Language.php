<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
use App;
use App\Models\User;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
            $language = User::select('language')
                ->where('id', 1) // ideally Auth::user()->id
                ->first();

            if($language) {
                App::setLocale($language->language);
            } else {
                App::setLocale('en');
            }

        return $next($request);
    }

}
