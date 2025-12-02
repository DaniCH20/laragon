<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;
use App\Models\Courses;
use App\Models\Students;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = teachers::all();

        return view('teacher', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(teachers $teachers)
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teacher = new teachers();
        $teacher->nombreApellido = $request->nombre;
        $teacher->profesion = $request->profesion;
        $teacher->gradoAcademico = $request->grado;
        $teacher->telefono = $request->telefono;
        $teacher->save();
        return redirect()->route('teachers.index')->with('success', 'Profesor creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teachers::with(['courses.students'])->findOrFail($id);

        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = teachers::findOrFail($id);

        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = teachers::findOrFail($id);

        $teacher->update($request->all());

        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher = teachers::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.index');
    }
}
