<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Students::all();

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
        $student=New Students();
        $student->nombre_Apellido=$request->nombre;
        $student->edad=$request->edad;
        $student->telefono=$request->telefono;
        $student->direccion=$request->direccion;
        $student->foto=$request->foto;
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

        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Students::findOrFail($id);

        $student->update($request->all());

        return redirect()->route('students.index');
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
