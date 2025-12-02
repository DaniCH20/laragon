<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courses;
use App\Models\Teachers;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Courses::class;
    public function definition(): array
    {
        $teacher = Teachers::All();
        return [
            'nombre' => fake()->course(),
            'nivel' => fake()->numberBetween(1, 10),
            'horasAcademicas' => fake()->randomElement([10, 40, 80]),
            'profesor_id' => Teachers::inRandomOrder()->first()->id
                ?? Teachers::factory()->create()->id,
        ];
    }
}
