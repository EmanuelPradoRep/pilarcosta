<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CobroSocios extends Model
{
    protected $table = 'cobros'; // nombre de la tabla
    protected $fillable = [
        'socio_id',
        'actividad_id',
        'tipo_cobro_id',
        'monto',
        'fecha',
        'observaciones',
        'usuario',
    ];

    // Relación con Socio
    public function socio()
    {
        return $this->belongsTo(Socio::class, 'socio_id');
    }

    // Relación con Actividad
    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'actividad_id');
    }

    // Relación con TipoCobro
    public function tipoCobro()
    {
        return $this->belongsTo(TipoCobro::class, 'tipo_cobro_id');
    }
}

