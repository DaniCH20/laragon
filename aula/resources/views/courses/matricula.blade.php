@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Lista de Estudiantes del curso</h1>



        @if ($students->isEmpty())
            <p>No hay Studiantes registrados en el centro.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->nombre_apellido }}</td>
                            <td>{{ $student->edad }}</td>
                            <td>{{ $student->telefono }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ($students->count() == 0)
                <p>No hay estudiantes matriculados en este curso.</p>
            @endif
        @endif

    </div>
@endsection
