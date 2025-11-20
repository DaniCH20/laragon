<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courses;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Courses::class;
    public function definition(): array
    {
        static $number = 1;
        return [
            'nombre' => fake()->name(),
            'nivel'=>fake()->randomDigit(),
            'horasAcademicas'=> fake()->randomNumber(),
            'profesor_id'=>$number++,
        ];
    }
}
