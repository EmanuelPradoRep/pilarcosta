<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCobro extends Model
{
    use HasFactory;
    protected $table = 'tipo_cobro';

    protected $fillable = [
        'nombre',
        'descripcion',
    ];
}
