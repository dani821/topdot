<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->name,
            'value' => strtoupper($this->faker->userName()),
        ];
    }
}
