<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SegaFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'price' => 1,
        ];
    }
}
