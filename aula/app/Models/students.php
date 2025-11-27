<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\StudentFactory;
class students extends Model
{
    use HasFactory;

    protected $table = "students";

    protected $primaryKey = 'id';
    protected $fillable = [
        'nombre_apellido',
        'edad',
        'telefono',
        'direccion',
        'foto'
    ];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'course_student', 'alumno_id', 'course_id');
    }
}
