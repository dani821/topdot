<?php

namespace Tests\Unit\CarModel;

use Tests\TestCase;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarDelivery;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarModelRelationsTest extends TestCase
{
    use RefreshDatabase;

    public function test_car_model_has_car()
    {
        $carModel = CarModel::factory()->create();

        $this->assertInstanceOf(Car::class, $carModel->car);
    }

    public function test_car_model_has_deliveries()
    {
        $carModel = CarModel::factory()->create();

        CarDelivery::factory()
            ->count(2)
            ->create([
                'car_model_id' => $carModel->id,
            ]);

        $this->assertEquals(2, $carModel->deliveries->count());
    }
}
