<?php

namespace Tests\Unit\CarDelivery;

use App\Models\Car;
use App\Models\User;
use App\Models\State;
use App\Models\CarDelivery;

class CarDeliveryRelationsTest extends AbstractCarDeliveryTestCase
{
    public function test_car_delivery_has_user()
    {
        $createCarDelivery = CarDelivery::factory()->create();

        $this->assertInstanceOf(User::class, $createCarDelivery->user);
    }

    public function test_car_delivery_has_car()
    {
        $createCarDelivery = CarDelivery::factory()->create();

        $this->assertInstanceOf(Car::class, $createCarDelivery->car);
    }

    public function test_car_delivery_has_state()
    {
        $createCarDelivery = CarDelivery::factory()->create();

        $this->assertInstanceOf(State::class, $createCarDelivery->state);
    }
}
