@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Modificar Estudiante</h1>
    <form class="mt-2" name="create_platform" action="{{route('students.update', $student)}}" method="POST"
        enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="dni" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$student->nombre_apellido}}" />
        </div>
        <div class="form-group mb-3">
            <label for="number" class="form-label">Edad</label>
            <input type="number" class="form-control" id="edad" name="edad" value="{{$student->edad}}" />
        </div>
        <div class="form-group mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" value="{{$student->telefono}}" />
        </div>
        <div class="form-group mb-3">
            <label for="direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" value="{{$student->direccion}}" />
        </div>
        <div class="form-group mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" value="{{$student->foto}}" />
        </div>
        <button type="submit" class="btn btn-primary" name="">Modificar</button>
    </form>
</div>
@endsection
