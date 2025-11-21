<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\students;
use Database\Factories\StudentFactory;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        students::create([
            'nombre_apellido' => 'Carlitos',
            'edad'            => 15,
            'telefono'        => 987654321,
            'direccion'       => 'Calle avenida siempre viva',
            'foto'            => 'Carlitos',
        ]);

    }
}
