@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Crear Cursos</h1>
    <form class="mt-2" name="create_platform" action="{{ route('courses.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="name" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" required />
        </div>
        <div class="form-group mb-3">
            <label for="nivel" class="form-label">Nivel:</label>
            <input type="number" class="form-control" id="nivel" name="nivel" required />
        </div>
        <div class="form-group mb-3">
            <label for="horas" class="form-label">Horas Academicass:</label>
            <input type="number" class="form-control" id="horas" name="horas" required />
        </div>
        <div class="form-group mb-3">
            <label for="grado">Profesor:</label>
            <select name="grado" id="grado" class="form-control">
                @foreach($teachers as $profesor)
                    <option value='{{$profesor->id}}'> {{$profesor->nombreApellido}} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="">Crear</button>
    </form>
</div>
@endsection
