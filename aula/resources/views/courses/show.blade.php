@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Curso {{ $course->nombre }}</h1>

        <table class="table table-striped">
            <thead>

                <tr>
                    <th colspan="2">Datos Del curso</th>
                </tr>
            </thead>

            <tbody>


                <tr>
                    <td>Nombre del Curso:</td>
                    <td>{{ $course->nombre }}</td>
                </tr>
                <tr>
                    <td>Nivel: </td>
                    <td>{{ $course->nivel }}</td>
                </tr>
                <tr>
                    <td>Horas Academicas: </td>
                    <td>{{ $course->horasAcademicas }}</td>
                </tr>
                <tr>
                    <td>Profesor que lo imparte:</td>
                    <td>{{ $course->teacher->nombreApellido ?? 'Sin profesor' }}</td>
                </tr>

                <tr>
                    <td>
                        <a class="btn btn-primary" href="{{ route('courses.edit', $course->id) }}">
                            <button class="btn" type="submit">Modificar</button>
                        </a>
                    </td>

                    <td>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>




            </tbody>
        </table>
    </div>
@endsection
