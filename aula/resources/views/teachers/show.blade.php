@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Profesor {{ $teacher->nombreApellido }}</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th colspan="2">Datos Personales</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nombre del Profesor:</td>
                    <td>{{ $teacher->nombreApellido }}</td>
                </tr>
                <tr>
                    <td>Profesion: </td>
                    <td>{{ $teacher->profesion }}</td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td>{{ $teacher->telefono }}</td>
                </tr>
                <tr>
                    <td>Grado Academico:</td>
                    <td> {{ $teacher->gradoAcademico }}</td>
                </tr>

                <tr>
                    <td>
                        <a class="btn btn-primary" href="{{ route('students.edit', $teacher->id) }}">
                            <button class="btn" type="submit">Modificar</button>
                        </a>
                    </td>

                    <td>
                        <form action="{{ route('students.destroy', $teacher->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        @foreach ($courses as $course)

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th colspan="2">Curso {{ $course->nombre }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>Nombre del Estudiante:</td>
                        <td>{{ $student->nombre_apellido }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
    </div>
@endsection
