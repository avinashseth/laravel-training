<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckAgeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIfCheckVotePageIs200()
    {
        $age = rand(17,18);
        $response = $this->get('/check-vote/' . $age);
        $response->assertStatus(200);
    }
    public function testCheckIfPersonCanVoteIfAgeIsMoreThan18()
    {
        $response = $this->get('/check-vote/19');
        $response->assertSeeText('You can vote');
    }
    public function test_check_if_person_below_18_can_see_you_cannot_vote()
    {
        $response = $this->get('/check-vote/17');
        $response->assertSeeText('You cannot vote');
    }
    // public function testCheckIfPersonCanVote()
    // {
    //     $age = rand(17,18);
    //     $response = $this->get('/check-vote/' . $age);
    //     $response->assertStatus(200);
    //     if($age >= 18)
    //     {
    //         $response->assertSeeText('You can vote!');
    //     }
    //     else
    //     {
    //         $response->assertSeeText('You cannot vote!');
    //     }
    // }
}
