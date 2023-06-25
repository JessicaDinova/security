<?php

namespace Models;

use App\Models\Subscriber;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class premiumSubscriberTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    public function test_if_subscriber_spends_more_then_fifty_he_is_premium(): void
    {
        $subscriberOne = Subscriber::factory()->create([
            'moneySpent' => 100
        ]);

        $this->assertTrue($subscriberOne->premiumSubscriber());

        $subscriberTwo = Subscriber::factory()->create([
            'moneySpent' => 51
        ]);

        $this->assertTrue($subscriberTwo->premiumSubscriber());
    }

    public function test_if_subscriber_spends_less_then_fifty_he_is_not_premium(): void
    {
        $subscriberOne = Subscriber::factory()->create([
            'moneySpent' => 1
        ]);

        $this->assertFalse($subscriberOne->premiumSubscriber());

        $subscriberTwo = Subscriber::factory()->create([
            'moneySpent' => 49
        ]);

        $this->assertFalse($subscriberTwo->premiumSubscriber());
    }
}
