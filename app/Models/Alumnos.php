<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{

      protected $table = 'alumnos';


       protected $fillable = [
        'nombre',
        'apellido',
        'documento',
        'fecha_nacimiento',
        'telefono',
        'email',
        'direccion',
        'activo',
        'fecha_ingreso',
        'observaciones',
    ];

}
