@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Crear Profesores</h1>
    <form class="mt-2" name="create_platform" action="{{ route('teachers.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="dni" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" required />
        </div>
        <div class="form-group mb-3">
            <label for="profesion" class="form-label">Profesion:</label>
            <input type="text" class="form-control" id="profesion" name="profesion" required />
        </div>
        <div class="form-group mb-3">
            <label for="telefono" class="form-label">Telefono:</label>
            <input type="number" class="form-control" id="telefono" name="telefono" required />
        </div>
        <div class="form-group mb-3">
            <label for="grado">Grado Academico:</label>
            <select name="grado" id="grado" class="form-control">
                <option value="Técnico">Técnico</option>
                <option value="Licenciatura">Licenciatura</option>
                <option value="Ingeniería">Ingeniería</option>
                <option value="Maestría">Maestría</option>
                <option value="Doctorado">Doctorado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="">Crear</button>
    </form>
</div>
@endsection
