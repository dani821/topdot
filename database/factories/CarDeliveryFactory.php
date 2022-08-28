<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use App\Models\State;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarDeliveryFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'car_id' => Car::factory(),
            'car_model_id' => CarModel::factory(),
            'state_id' => State::factory(),
        ];
    }
}
