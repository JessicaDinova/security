<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LogInTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_user_logs_in_with_right_credentials(): void
    {
        $route = route('authenticate');
        $user = User::factory()->create([
            'password' => ($password = 'myNameIsJohn'),
        ]);

        $body = [
            'email' => $user->email,
            'password' => $password,
        ];

        $response = $this->actingAs($user);
        $response = $this->post($route, $body);

        $response->assertRedirect('/onlyPaws');
    }

    public function test_user_cannot_log_in_with_wrong_credentials(): void
    {
        $route = route('authenticate');
        $user = User::factory()->create([
            'password' => 'myNameIsJohn',
        ]);

        $body = [
            'email' => $user->email,
            'password' => 'iAmNotJohn',
        ];

        $response = $this->post($route, $body);
        $response->assertSessionHasErrors();
    }
}
