<?php

namespace Database\Factories;

use App\Models\Teachers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teachers>
 */
class TeachersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'niy' => fake()->unique()->numberBetween(1000000000, 9999999999),
            'subject' => fake()->randomElement(['Mobile Development', 'Web Development', 'Game Development', 'IOT', 'KIK', 'Matematika', 'B Inggris']),
            'start_date' => fake()->date(),
        ];
    }
}
