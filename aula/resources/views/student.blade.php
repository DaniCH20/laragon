@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Lista de Alumnos</h1>

    @if ($students->isEmpty())
        <p>No hay alumnos registrados en el centro.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <a href="{{ route('students.create') }}" role="button"><button type="button" class="crear"
                            data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-plus-lg">Insertar Nuevo Alumno</i></button></a>
                </tr>
                <tr>
                    <th>Ver</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>
                            <a class="btn " href="{{ route('students.show', $student->id) }}">
                                👁️
                            </a>
                        </td>
                        <td>{{ $student->nombre_apellido }}</td>
                        <td>{{ $student->edad }}</td>
                        <td>{{ $student->telefono }}</td>
                        <td>{{ $student->direccion }}</td>

                        <td>
                            <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">
                                <button class="btn" type="submit">Modificar</button>
                            </a>
                        </td>

                        <td>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit"  onclick="return confirm('¿Estás seguro de que quieres eliminar a {{$student->nombre_apellido}}?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif
</div>
@endsection
