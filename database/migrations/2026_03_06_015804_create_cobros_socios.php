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
    Schema::create('cobros_socios', function (Blueprint $table) {
    
    $table->id();
    $table->unsignedBigInteger('socio_id');
    $table->unsignedBigInteger('actividad_id')->nullable();
    $table->unsignedBigInteger('tipo_cobro_id');
    $table->decimal('monto', 10, 2);
    $table->date('fecha');
    $table->text('observaciones')->nullable();
    $table->string('usuario');
    $table->timestamps();

    // Foreign keys
    $table->foreign('socio_id')
          ->references('id')
          ->on('socios')
          ->onDelete('cascade')
          ->onUpdate('cascade');

    $table->foreign('actividad_id')
          ->references('id')
          ->on('actividades')
          ->onDelete('set null')
          ->onUpdate('cascade');

    $table->foreign('tipo_cobro_id')
          ->references('id')
          ->on('tipo_cobro')
          ->onDelete('restrict')
          ->onUpdate('cascade');
});
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cobros_socios');
    }
};
