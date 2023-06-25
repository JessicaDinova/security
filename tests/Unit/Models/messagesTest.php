<?php

namespace Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class messagesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_user_is_not_signed_in_he_sees_a_pleaseLogIn_message(): void
    {
       $response = $this->get('/');

       $response->assertStatus(200);
       $response->assertSee(__('To see our wonderful pictures please log in or register'));
       $response->assertDontSee(__('To see our pictures click on sweet pics button in navigation'));
    }

    public function test_user_is_logged_in_he_sees_a_visit_pics_message(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user);
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee(__('To see our pictures click on sweet pics button in navigation'));
        $response->assertDontSee(__('To see our wonderful pictures please log in or register'));
    }
}
