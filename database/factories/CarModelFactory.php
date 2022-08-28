<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarModelFactory extends Factory
{
    public function definition(): array
    {
        return [
            'car_id' => Car::factory(),
            'title' => $this->faker->name,
            'value' => strtoupper($this->faker->userName()),
        ];
    }
}
