<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

use App\Models\ActividadesSocios;
use App\Models\Socios;



class Actividades extends Model
{
    use HasFactory;
    protected $table = 'actividades';

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_hora',
        'lugar',
        'cupo_maximo',
        'duracion_minutos',
        'costo',
        'usuario',
        'activo',
        
    ];

    // Casts para convertir automáticamente tipos de datos
    protected $casts = [
        'fecha_hora' => 'datetime',
        'activo' => 'boolean',
        'costo' => 'decimal:2',
    ];
}
