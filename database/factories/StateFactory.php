<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StateFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->city(),
            'code' => $this->faker->countryCode(),
            'capital' => $this->faker->city(),
            'year' => $this->faker->year(),
        ];
    }
}
