<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\students;
use App\Models\teachers;
use App\Models\courses;
use Database\Factories\CourseStudentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
     public function run(): void
    {

        $teachers = Teachers::factory(5)->create();

         $students = students::factory(25)->create();

         $courses = Courses::factory(5)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => fake()->unique()->safeEmail(),
        ]);
        foreach ($students as $student) {
            $randomCourses = $courses->random(rand(1, 3));
            $student->courses()->attach($randomCourses);
        }
    }
}
