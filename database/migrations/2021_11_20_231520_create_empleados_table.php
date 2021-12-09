<?php

use App\Models\Rols;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_Rols');

            $table->string('codigo');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->integer('edad')->nullable()->default(0);
            $table->integer('DNI')->nullable()->default(0);
            $table->integer('celular')->nullable()->default(0);
            $table->string('correo');
            $table->enum('estado',[0, 1])->default(1);

            
            $table->foreign('ID_Rols')->references('id')->on('users');
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
        Schema::dropIfExists('empleados');
    }
}
