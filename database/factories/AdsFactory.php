<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ads;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ads>
 */
class AdsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->paragraph(3),
            'amount' => $this->faker->randomFloat(2, 10, 1000000),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
