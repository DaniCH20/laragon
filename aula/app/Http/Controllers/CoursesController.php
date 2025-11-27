<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Teachers;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::with('teacher')->get();
        return view('course', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teachers::all();
        return view('courses.create', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Courses();
        $course->nombre_Apellido = $request->nombre;
        $course->nivel = $request->nivel;
        $course->horasAcademicas = $request->horasAcademicas;
        $course->profesor_id = $request->profesor_id;
        $course->save();
        return redirect()->route('courses.index')->with('success', 'Courses creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Courses::findOrFail($id);

        return view('courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Courses::findOrFail($id);
        $teachers = Teachers::all();
        return view('courses.edit', compact('course'), compact('teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Courses::findOrFail($id);

        $course->update($request->all());

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Courses::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index');
    }
}
