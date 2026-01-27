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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nombre_producto');
            $table->text('descripcion');
            $table->integer('precio');
            $table->integer('existencia');
            $table->unsignedBigInteger('id_linea_negocio');
            
            $table->foreign('id_linea_negocio')->references('id')->on('lineas_negocios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');

    }
};
