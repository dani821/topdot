<?php

namespace Tests\Unit\State;

use Tests\TestCase;
use App\Models\Car;
use App\Models\User;
use App\Models\State;
use App\Models\CarDelivery;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StateRelationsTest extends TestCase
{
    use RefreshDatabase;

    public function test_state_has_users()
    {
        $state = State::factory()->create();

        User::factory()
            ->count(2)
            ->create([
                'state_id' => $state->id,
            ]);

        $this->assertEquals(2, $state->users->count());
    }

    public function test_state_has_deliveries()
    {
        $state = State::factory()->create();

        CarDelivery::factory()
            ->count(2)
            ->create([
                'state_id' => $state->id,
            ]);

        $this->assertEquals(2, $state->carDeliveries->count());
    }
}
