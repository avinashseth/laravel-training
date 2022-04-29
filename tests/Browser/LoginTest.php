<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->screenshot('login-page')
                ->type('email', 'avinash@google.com')
                ->type('password', 'Avinash@123')
                ->press('Login')
                ->screenshot('home-page')
                ->assertPathIs('/home');
            // $browser->visit('/login')
            //     ->type('email', 'avinash@google.com')
            //     ->type('password', 'Avinash@123')
            //     ->press('Login')
            //     ->back()
            //     ->assertPathIs('/login');
        });
    }
}
