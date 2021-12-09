<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Clientes');
            $table->unsignedBigInteger('ID_Empleados');
            
            $table->string('codigo');
            $table->string('descripcion');
            $table->timestamp('fecha_hora');
            $table->string('direccion');

            $table->foreign('ID_Clientes')->references('id')->on('clientes');
            $table->foreign('ID_Empleados')->references('id')->on('empleados');
            
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
        Schema::dropIfExists('citas');
    }
}
