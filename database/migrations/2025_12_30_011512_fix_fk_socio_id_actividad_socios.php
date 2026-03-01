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
        Schema::table('actividad_socios', function (Blueprint $table) {

            // Eliminar la foreign key incorrecta
            $table->dropForeign(['socio_id']);

            //foreign key correcta
            $table->foreign('socio_id')
                ->references('id')
                ->on('socios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('actividad_socios', function (Blueprint $table) {

            // Quitar la FK correcta
            $table->dropForeign(['socio_id']);

            // Volver a la FK anterior 
            $table->foreign('socio_id')
                ->references('usuario_id')
                ->on('socios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }
};
