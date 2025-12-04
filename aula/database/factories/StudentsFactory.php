<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Students;

class StudentsFactory extends Factory
{
    // Relacionar Factory con el modelo
    protected $model = Students::class;

    public function definition(): array
    {
        $imagePath = $this->faker->image(
            storage_path('app/public/fotos'), // ✔ ruta correcta
            300,
            300,
            'people',
            false
        );

        return [
            'nombre_apellido' => $this->faker->name(),
            'edad'            => $this->faker->numberBetween(10, 25),
            'telefono'        => $this->faker->numerify('#########'),
            'direccion'       => $this->faker->address(),
            'foto'            => 'storage/fotos/' . $imagePath,
        ];
    }
}
