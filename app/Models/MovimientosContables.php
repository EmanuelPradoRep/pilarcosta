<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class MovimientosContables extends Model
{
      use HasFactory;
      protected $table = 'ingresos';

      protected $fillable = [
        'actividad_id',
        'tipo',
        'concepto',
        'monto',
        'fecha',
        'observaciones',
        'usuario',
    ];
        
}
