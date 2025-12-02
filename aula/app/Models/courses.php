<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\CourseFactory;

class courses extends Model
{
    use HasFactory;
    protected $table = "courses";
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'nivel', 'horasAcademicas', 'profesor_id'];
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function students()
    {
        return $this->belongsToMany(Students::class, 'course_student', 'course_id', 'student_id');
    }
    public function teacher()
    {
        return $this->belongsTo(Teachers::class, 'profesor_id');
    }
}
