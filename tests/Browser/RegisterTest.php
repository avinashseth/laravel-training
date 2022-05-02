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
        $newEmail = 'avinash' . rand(100,999) . '@yahoo.com';
        $this->browse(function (Browser $browser) use ($newEmail) {
            $browser->visit('/register')
                ->value('#name', 'Avinash Seth')
                ->value('#email', $newEmail)
                ->value('#password', '12345678')
                ->value('#password-confirm', '12345678')
                ->value('#language_pref', 'EN')
                ->click('button[type="submit"]')
                ->assertPathIs('/home')
                ->assertSee("You are logged in!"); 
        });
        $this->assertDatabaseHas('users', [
            'email' => $newEmail,
        ]);
        $this->assertDatabaseHas('students', [
            'username' => 'bybgBqlNEt'
        ]);
    }
}
