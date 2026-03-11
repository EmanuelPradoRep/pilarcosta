<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;

    protected $table = 'personas';

    protected $fillable = [
        'usuario_id',
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
        'usuario',
    ];

   
    protected $casts = [
        'activo' => 'boolean',
        'fecha_nacimiento' => 'date',
        'fecha_ingreso' => 'date',
    ];
}
