@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Crear Estudiante</h1>
    <form class="mt-2" name="create_platform" action="{{ route('students.store') }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="dni" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required />
        </div>
        <div class="form-group mb-3">
            <label for="number" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" required />
        </div>
        <div class="form-group mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" required />
        </div>
        <div class="form-group mb-3">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required />
        </div>
        <div class="form-group mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" required />
        </div>
        <button type="submit" class="btn btn-primary" name="">Crear</button>
    </form>
</div>
@endsection
