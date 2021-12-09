<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Ventas');
            $table->foreign('ID_Ventas')->references('id')->on('ventas');
           
            $table->float('pago')->nullable()->default(000.00);
            $table->float('vuelto')->nullable()->default(000.00);
            $table->float('saldo')->nullable()->default(000.00);
            $table->float('cuenta')->nullable()->default(000.00);
            $table->enum('estado',[0, 1])->default(1);
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
        Schema::dropIfExists('pagos');
    }
}
