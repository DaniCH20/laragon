<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class courses extends Model
{
    use HasFactory;
    protected $table="courses";
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','nivel',
    'horasAcademicas','profesor_id'];
    protected $guarded=['id','created_at','updated_at'];
}
