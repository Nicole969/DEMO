<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Empleados');
            $table->foreign('ID_Empleados')->references('id')->on('empleados');
            
            $table->string('codigo');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('DNI')->nullable()->default(0);
            $table->integer('celular')->nullable()->default(0);
            $table->string('direccion');
            $table->string('referencia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
