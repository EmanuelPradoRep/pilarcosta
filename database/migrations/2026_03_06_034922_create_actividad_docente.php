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
    {
        Schema::create('actividad_docente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actividad_id');
            $table->unsignedBigInteger('docente_id');
            $table->string('rol')->nullable();
            $table->string('usuario');
            $table->timestamps();

            $table->foreign('actividad_id')
            ->references('id')
            ->on('actividades')
            ->onDelete('cascade');

            $table->foreign('docente_id')
            ->references('id')
            ->on('docentes')
            ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividad_docente');
    }
};
