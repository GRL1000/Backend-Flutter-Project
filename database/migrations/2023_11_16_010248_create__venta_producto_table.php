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
        Schema::create('venta_producto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idClien');
            $table->foreign('idClien')->references('id')->on('clientes')->onDelete('cascade');

            $table->unsignedBigInteger('idProd');
            $table->foreign('idProd')->references('id')->on('productos')->onDelete('cascade');

            $table->string('cantidad');
            $table->string('precio');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_venta_producto_');
    }
};
