<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    { Schema::create('alumnos', function (Blueprint $table) {
        
        $table->id();
        $table->string('nombre');
        $table->string('apellido');
        $table->string('documento')->unique(); // DNI, CI, etc.
        $table->date('fecha_nacimiento')->nullable();
        $table->string('telefono')->nullable();
        $table->string('email')->nullable();
        $table->string('direccion')->nullable();
        $table->boolean('activo')->default(true);
        $table->date('fecha_ingreso')->nullable();
        $table->text('observaciones')->nullable();

        $table->timestamps();
    });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
