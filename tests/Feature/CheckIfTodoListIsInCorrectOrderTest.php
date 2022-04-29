<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class CheckIfTodoListIsInCorrectOrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_if_users_list_is_in_order()
    {
        $response = $this->get('/users');
        
        // $values = array(
        //     '1. Dr. Pearline Abernathy PhD',
        //     '2. Janick Daniel',
        // );
        
        $users = User::select('id', 'name')
            ->limit(2)
            ->get();

        $values = [];

        foreach($users as $user)
        {
            $values[] = $user->id . '. ' . $user->name;
        }

        $response->assertSeeTextInOrder($values, $escaped = true);

    }
}
