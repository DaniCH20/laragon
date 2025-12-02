@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Editar Cursos</h1>
    <form class="mt-2" name="create_platform" action="{{ route('courses.update',$course )}}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name" class="form-label">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$course->nombre}}" required />
        </div>
        <div class="form-group mb-3">
            <label for="nivel" class="form-label">Nivel:</label>
            <input type="number" class="form-control" id="nivel" name="nivel"  value="{{$course->nivel}}" required  />
        </div>
        <div class="form-group mb-3">
            <label for="horas" class="form-label">Horas Academicass:</label>
            <input type="number" class="form-control" id="horasAcademicas" name="horasAcademicas"  value="{{$course->horasAcademicas}}" required />
        </div>
        <div class="form-group mb-3">
            <label for="profesor">Profesor:</label>
            <select name="profesor_id" id="profesor_id" class="form-control" >
                @foreach($teachers as $profesor)
                    <option value='{{$profesor->id}}'> {{$profesor->nombreApellido}} </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="">Crear</button>
    </form>
</div>
@endsection
