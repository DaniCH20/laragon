@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Alumno {{ $student->nombre_apellido }}</h1>

        <table class="table table-striped">
            <thead>

                <tr>
                    <th colspan="2">Datos Personales</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Nombre del Estudiante:</td>
                    <td>{{ $student->nombre_apellido }}</td>
                </tr>
                <tr>
                    <td>Edad: </td>
                    <td>{{ $student->edad }}</td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td>{{ $student->telefono }}</td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td> {{ $student->direccion }}</td>
                </tr>
                <tr>
                    <td>Foto:</td>
                    <td> <img onerror="this.onerror=null;this.src=`https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png?20200919003010`" src="{{ asset($student->foto) }}" width="80" height="80" class="rounded-circle"></td>
                </tr>
                <tr>
                    <td>
                        <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">
                            <button class="btn" type="submit">Modificar</button>
                        </a>
                    </td>

                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
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
