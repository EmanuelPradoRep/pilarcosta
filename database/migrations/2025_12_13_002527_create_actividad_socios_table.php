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
        Schema::create('actividad_socios', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('actividad_id');
            $table->unsignedBigInteger('persona_id');

            $table->timestamps();

     
            $table->foreign('actividad_id')
                ->references('id')
                ->on('actividades')
                ->onDelete('cascade')
                ->onUpdate('cascade');

        
            $table->foreign('persona_id')
                ->references('id')
                ->on('alumnos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividad_socios');
    }
};
