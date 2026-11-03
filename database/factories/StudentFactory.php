<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => fake()->randomNumber(6, true),
            'name' => fake()->name(),
            'class' => fake()->randomElement(['11 PPLG 1', '11 PPLG 2', '11 PPLG 3', '11 ANIMASI 1', '11 ANIMASI 2', '11 DKV 1', '11 DKV 2']),
            'action' => fake()->boolean(),
        ];
    }
}
