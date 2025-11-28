@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Lista de Cursos</h1>

        @if ($courses->isEmpty())
            <p>No hay Cursos registrados en el centro.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <a href="{{ route('courses.create') }}" role="button"><button type="button" class="crear"
                                data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-plus-lg">+</i></button></a>
                    </tr>
                    <tr>
                        <th>Ver</th>
                        <th>Nombre del Curso</th>
                        <th>Nivel</th>
                        <th>Horas Academicas</th>
                        <th>Profesor</th>
                        <th colspan="2">Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>
                                <a class="btn btn-primary" href="{{ route('courses.show', $course->id) }}">
                                    👁️
                                </a>
                            </td>
                            <td>{{ $course->nombre }}</td>
                            <td>{{ $course->nivel }}</td>
                            <td>{{ $course->horasAcademicas }}</td>

                            <td>{{ $course->teacher->nombreApellido ?? 'Sin profesor' }}</td>

                            <td>
                                <a class="btn btn-primary" href="{{ route('courses.edit', $course->id) }}">

                                    <button class="btn" type="submit">Modificar</button>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('courses.matricula', $course->id) }}">

                                    <button class="btn" type="submit">Matriculas</button>
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
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
