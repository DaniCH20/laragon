<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Teachers;

class TeacherFactory extends Factory
{
    protected $model = Teachers::class;

    public function definition(): array
    {
        return [
            'nombreApellido' => $this->faker->name(),
            'profesion'      => $this->faker->jobTitle(),
            'gradoAcademico' => $this->faker->randomElement([
                'Técnico',
                'Licenciatura',
                'Ingeniería',
                'Maestría',
                'Doctorado'
            ]),
            'telefono'       => $this->faker->phoneNumber(),
        ];
    }
}
