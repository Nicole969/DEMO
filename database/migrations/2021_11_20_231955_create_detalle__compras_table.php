<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Compras');
            $table->unsignedBigInteger('ID_Inventarios');
            $table->foreign('ID_Compras')->references('id')->on('compras');
            $table->foreign('ID_Inventarios')->references('id')->on('inventarios');
            
            $table->integer('cantidad')->nullable()->default(0);
            $table->decimal('precio', 5, 2)->nullable()->default(000.00);
            $table->string('descripcion');
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
        Schema::dropIfExists('detalle__compras');
    }
}
