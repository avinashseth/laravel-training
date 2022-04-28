<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UrlTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function test_check_if_login_page_is_200()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function test_check_if_gov_page_is_404()
    {
        $response = $this->get('/gov');
        $response->assertStatus(404);
    }
    function testHelloWorldTextInView() {
        $response = $this->get('/');
        $value = "Hello World!";
        $response->assertSeeText($value);
    }

}
