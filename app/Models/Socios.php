<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 
use App\Models\User;

use App\Models\Actividades;
use App\Models\ActividadesSocios;


class Socios extends Model
{
   

    use HasFactory;
    protected $table = 'socios';

    protected $fillable = [

        'usuario_id',
        'numero_socio',
        'documento',
        'sexo',
        'nombre',
        'apellido',
        'telefono',
        'email',
        'direccion',
        'fecha_ingreso',
        'fecha_nacimiento',
        'activo',
        'observaciones',
        'usuario',
    ];

   
    protected $casts = [
        'activo' => 'boolean',
        'fecha_ingreso' => 'date',
        'fecha_nacimiento' => 'datetime',
    ];

     public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id'); // Eloquent ya sabe que usuario_id apunta al campo id de la tabla users.

    }





}
