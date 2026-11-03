<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Mobile Development',
                'Web Development',
                'Game Development',
                'IOT',
                'KIK',
                'Matematika',
                'B Inggris',
                'B Indonesia',
                'Pendidikan Agama',
                'Pendidikan Kewarganegaraan',
            ]),
        ];
    }
}
