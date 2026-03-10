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
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id')->constrained()->onDelete('cascade');
            $table->integer('numero_socio')->unique();
            $table->string('documento')->unique();
            $table->string('sexo')->nullable();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            $table->date('fecha_ingreso')->nullable();
            $table->dateTime('fecha_nacimiento')->nullable();
            $table->boolean('activo')->default(false);
            $table->text('observaciones')->nullable();
            $table->timestamps();

            $table->foreign('usuario_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socios');
    }
};
