<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\Auth;
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/settings.php';
Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
Route::resources([
        'students' => StudentsController::class,
        'courses' => CoursesController::class,
        'teachers' => TeachersController::class,
    ]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/courses/matricula/{id}', [CoursesController::class, 'matricula'])
    ->name('courses.matricula');
Route::get('search', [StudentsController::class, 'search'])->name('students.search');
