<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // 9876543210
        // ********10
        Blade::directive('otpnumber', function($string) {
            return '********' . $string[10] . $string[11];
        });

        Blade::directive('useremail', function($string) {
            return '<a href="mailto:' . $string . '">Send Email to User</a>';
        });
    }
}
