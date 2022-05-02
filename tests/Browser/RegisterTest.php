<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->value('#name', 'Avinash Seth')
                ->value('#email', 'avinash' . rand(100,999) . '@yahoo.co.in')
                ->value('#password', '12345678')
                ->value('#password-confirm', '12345678')
                ->value('#language_pref', 'EN')
                ->click('button[type="submit"]')
                ->assertPathIs('/home')
                ->assertSee("You are logged in!"); 
        });
    }
}
