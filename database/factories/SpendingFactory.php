<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Outcome>
 */
class SpendingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'amount' => fake()->randomFloat(2, -10000, -1),
            'category' => fake()->randomElement(['Purchase', 'Taxes', 'Transference', 'Straction'])
        ];
    }
}
