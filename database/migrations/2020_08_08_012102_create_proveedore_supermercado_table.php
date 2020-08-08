<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoreSupermercadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedore_supermercado', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('id_proveedor');
            $table->unsignedBigInteger('id_supermercado');

            $table->foreign('id_proveedor')->references('id')->on('proveedores')->onDelete("cascade")->onUpdate("cascade");
            $table->foreign('id_supermercado')->references('id')->on('supermercados')->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedore_supermercado');
    }
}
