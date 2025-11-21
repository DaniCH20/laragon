<div class="container">
    <h1>Lista de Alumnos</h1>

    @if ($students->isEmpty())
        <p>No hay alumnos registrados en el centro.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
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
                        <td>{{ $student->nombre_apellido }}</td>
                        <td>{{ $student->edad }}</td>
                        <td>{{ $student->telefono }}</td>
                        <td>{{ $student->direccion }}</td>

                        <td>
                            <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">
                                Modificar
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
                @endforeach
            </tbody>
        </table>

    @endif
</div>
