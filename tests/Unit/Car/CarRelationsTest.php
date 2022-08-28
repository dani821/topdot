<?php

namespace Tests\Unit\Car;

use Tests\TestCase;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarDelivery;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarRelationsTest extends TestCase
{
    use RefreshDatabase;

    public function test_car_has_models()
    {
        $car = Car::factory()->create();

        CarModel::factory()
            ->count(2)
            ->create([
                'car_id' => $car->id,
            ]);

        $this->assertEquals(2, $car->models->count());
    }

    public function test_car_has_deliveries()
    {
        $car = Car::factory()->create();

        CarDelivery::factory()
            ->count(2)
            ->create([
                'car_id' => $car->id,
            ]);

        $this->assertEquals(2, $car->deliveries->count());
    }
}
