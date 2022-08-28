<?php

namespace Tests\Unit\CarDelivery;

use App\Models\Car;
use App\Models\User;
use App\Models\State;
use App\Models\CarModel;
use App\Models\CarDelivery;
use App\Actions\CarDelivery\AllCarDeliveryAction;
use App\Actions\CarDelivery\FindCarDeliveryAction;
use App\Actions\CarDelivery\CreateCarDeliveryAction;
use App\Actions\CarDelivery\DeleteCarDeliveryAction;
use App\Actions\CarDelivery\UpdateCarDeliveryAction;

class CarDeliveryActionsTest extends AbstractCarDeliveryTestCase
{
    // User can receive delivery
    public function test_create_car_delivery()
    {
        $car = Car::factory()->create();

        $deliveryData = [
            'user_id' => User::factory()->create()->id,
            'car_id' => $car->id,
            'car_model_id' => CarModel::factory()->for($car)->create()->id,
            'state_id' => State::factory()->create()->id,
        ];

        $carDelivery = app(CreateCarDeliveryAction::class)->execute($deliveryData);

        $this->assertEquals(
            $deliveryData,
            $carDelivery->only('user_id', 'car_id', 'car_model_id', 'state_id')
        );

        $this->assertDatabaseHas(
            $this->databaseTable,
            $deliveryData
        );
    }

    public function test_find_car_delivery()
    {
        $carDelivery = CarDelivery::factory()->create();

        $findDelivery = app(FindCarDeliveryAction::class)->execute($carDelivery->id);

        $this->assertEquals(
            [
                'id' => $carDelivery->id,
            ],
            [
                'id' => $findDelivery->id,
            ]
        );
    }

    public function test_get_all_car_deliveries()
    {
        $carDeliveries = CarDelivery::factory()->count(10)->create();

        $allCarDeliveries = app(AllCarDeliveryAction::class)->execute(all: true);

        $this->assertCount(
            $carDeliveries->count(),
            $allCarDeliveries
        );

        $this->assertDatabaseCount(
            $this->databaseTable,
            $carDeliveries->count()
        );
    }

    public function test_update_car_delivery()
    {
        $carDelivery = CarDelivery::factory()->create();

        app(UpdateCarDeliveryAction::class)->execute(
            $carDelivery->id,
            [
                'user_id' => User::factory()->create()->id,
            ]
        );

        $findCarDelivery = app(FindCarDeliveryAction::class)->execute($carDelivery->id);

        $this->assertNotEquals(
            [
                'user_id' => $carDelivery->user_id,
            ],
            [
                'user_id' => $findCarDelivery->user_id,
            ]
        );

        $this->assertDatabaseHas(
            $this->databaseTable,
            $carDelivery->only('id')
        );
    }

    public function test_delete_car_delivery()
    {
        $carDelivery = CarDelivery::factory()->create();

        app(DeleteCarDeliveryAction::class)->execute($carDelivery->id);

        $this->assertDatabaseCount(
            $this->databaseTable,
            0
        );
    }
}
