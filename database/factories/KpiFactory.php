<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kpi>
 */
class KpiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'product' =>fake()->name(),
            'theme' =>fake()->name(),
            'w1' => rand(1000,9999),
            'w2' => rand(1000,9999),
            'w3' => rand(1000,9999),
            'w4' => rand(1000,9999),
            'empcode' => rand(10000, 99999)
        ];
    }
}
