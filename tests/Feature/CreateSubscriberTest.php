<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use JsonException;
use Tests\TestCase;

class CreateSubscriberTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     * @throws JsonException
     */
    public function test_that_new_row_is_created(): void
    {
        $route = route('subscribers.store');
        $body = [
            'name' => 'John',
            'surname' => 'Snow',
            'moneySpent' => 20
        ];

        $user = User::factory()->create();
        $response = $this->actingAs($user);
        $response = $this->post($route, $body);

        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();

        $this->assertDatabaseCount('subscribers', 1);
        $this->assertDatabaseHas('subscribers', [
            'name' => 'John'
        ]);
    }

    public function test_that_error_is_shown_when_required_is_not_filled_in()
    {
        $route = route('subscribers.store');
        $body = [
            'name' => 'John',
            'surname' => 'Snow',
        ];

        $user = User::factory()->create();
        $response = $this->actingAs($user);
        $response = $this->post($route, $body);

        $response->assertSessionHasErrors(['moneySpent']);
        $this->assertDatabaseCount('subscribers', 0);
    }
}
