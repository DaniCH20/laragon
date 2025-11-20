<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class teachers extends Model
{
    use HasFactory;
    protected $table="teachers";
    protected $primaryKey = 'id';
    protected $fillable = ['nombreApellido','profesion',
    'gradoAcademico','telefono'];
    protected $guarded=['id','created_at','updated_at'];
}
