<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Empleados');
            $table->foreign('ID_Empleados')->references('id')->on('empleados');
            
            $table->string('codigo');
            $table->string('proveedor');
            $table->integer('celular')->nullable()->default(0);
            $table->string('correo');
            $table->string('comprobante');
            $table->timestamp('fecha_hora');
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
        Schema::dropIfExists('compras');
    }
}
