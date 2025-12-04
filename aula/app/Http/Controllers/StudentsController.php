<?php

namespace App\Http\Controllers;

use App\Models\courses;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\students as ModelsStudents;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paginationCount = env('PAGINATION_COUNT', 10);
        $students = Students::paginate($paginationCount);
        return view('student', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Students $students)
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Students();
        $student->nombre_Apellido = $request->nombre;
        $student->edad = $request->edad;
        $student->telefono = $request->telefono;
        $student->direccion = $request->direccion;
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('fotos', 'public');
            $student->foto = 'storage/' . $path;
        }
        $student->save();
        return redirect()->route('students.index')->with('success', 'Estudiante creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Students::findOrFail($id);

        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Students::findOrFail($id);
        $courses = Courses::all();
        $coursesM = $student->courses;
        return view('students.edit', compact('student', 'coursesM', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Students::findOrFail($id);
        $student->update([
            'nombre_apellido' => $request->nombre,
            'edad' => $request->edad,
            'telefono' => $request->telefono,
            'direccion' => $request->direccion,
            'foto' => $request->foto,
        ]);

        if ($request->has('courses')) {
            $student->courses()->sync($request->courses);
        } else {
            $student->courses()->detach();
        }

        return redirect()->route('students.index')->with('success', 'Estudiante actualizado correctamente');
    }
    public function search(Request $request)
    {
        $query = $request->get('search');

        $students = Students::where('nombre_apellido', 'LIKE', "%{$query}%")
            ->get();
        return view('student', compact('students'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Students::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Studiante eliminado correctamente');
    }
}
