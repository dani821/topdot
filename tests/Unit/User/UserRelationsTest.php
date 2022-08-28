<?php

namespace Tests\Unit\User;

use Tests\TestCase;
use App\Models\User;
use App\Models\State;
use App\Models\CarDelivery;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserRelationsTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_has_state()
    {
        $user = User::factory()->create();

        $this->assertInstanceOf(State::class, $user->state);
    }

    public function test_user_has_car_deliveries()
    {
        $user = User::factory()->create();

        CarDelivery::factory()
            ->for($user)
            ->count(2)
            ->create();

        $this->assertEquals(2, $user->carDeliveries->count());
    }
}
