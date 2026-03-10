<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

use App\Models\Actividades;
use App\Models\Socios;



class ActividadesSocios extends Model
{
   

    protected $table = 'actividad_socios';

 
    protected $fillable = [
        'actividad_id',
        'persona_id',
    ];

    // Relaciones
    public function actividad()
    {
        return $this->belongsTo(Actividades::class, 'actividad_id');
    }

     public function persona()
    {
        return $this->belongsTo(Alumnos::class, 'persona_id');
    }



}
