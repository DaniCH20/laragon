<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\students;
use App\Models\teachers;
use App\Models\courses;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' =>  fake()->unique()->safeEmail(),
        ]);
        $this->call([
            StudentSeeder::class,
        ]);
        $this->call([
            TeacherSeeder::class,
        ]);
         $this->call([
            CourseSeeder::class,
        ]);

        teachers::factory(5)->create();
        courses::factory(5)->create();
        students::factory(20)->create();
    }
}
