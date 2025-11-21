@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Lista de Profesores</h1>

    @if ($teachers->isEmpty())
        <p>No hay Profesores registrados en el centro.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <a href="{{ route('teachers.create') }}" role="button"><button type="button" class="crear"
                            data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-plus-lg">+</i></button></a>
                </tr>
                <tr>
                    <th>Ver</th>
                    <th>Nombre</th>
                    <th>Profesion</th>
                    <th>Grado Academico</th>
                    <th>Telefono</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>
                            <a class="btn btn-show" href="{{ route('teachers.show', $teacher->id) }}">
                                👁️
                            </a>
                        </td>
                        <td>{{ $teacher->nombreApellido }}</td>
                        <td>{{ $teacher->profesion }}</td>
                        <td>{{ $teacher->gradoAcademico }}</td>
                        <td>{{ $teacher->telefono }}</td>

                        <td>
                            <a class="btn btn-primary" href="{{ route('teachers.edit', $teacher->id) }}">

                                <button class="btn" type="submit">Modificar</button>
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST">
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
