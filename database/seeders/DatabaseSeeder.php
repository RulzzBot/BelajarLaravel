<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\User;
use App\Models\Student;
use App\Models\Teachers;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => bcrypt('password'),
            ]
        );

        Student::factory(10)->create();
        Classroom::factory(10)->create();
        Teachers::factory(10)->create();
        Subject::factory(10)->create();
    }
}
