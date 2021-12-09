<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Clientes');
            $table->unsignedBigInteger('ID_Inventarios');
            $table->unsignedBigInteger('ID_Empleados');
            $table->foreign('ID_Clientes')->references('id')->on('clientes');
            $table->foreign('ID_Inventarios')->references('id')->on('inventarios');
            $table->foreign('ID_Empleados')->references('id')->on('empleados');
            
            $table->string('codigo');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('cantidad')->nullable()->default(0);
            $table->float('precio_unidad')->nullable()->default(000.00);
            $table->float('descuento')->nullable()->default(000.00);
            $table->float('precio_total')->nullable()->default(000.00);
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
        Schema::dropIfExists('ventas');
    }
}
