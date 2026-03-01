<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use App\Models\Actividades;


class IngresosActividades extends Model
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
    ];



       public function actividad()
    {
        return $this->belongsTo(Actividades::class, 'actividad_id');
    }



}
