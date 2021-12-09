<?php

namespace Database\Factories;

use App○\Models\Empleados;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    protected $model = Empleados::class;

    public function definition()
    {
        return [
            //
            'ID_Empleados'=> $this->name,
            'codigo'=> $this->name,
            'nombres'=> $this->name,
            'apellido_paterno'=> $this->name,
            'apellido_materno'=> $this->name,
            'edad'=> $this->name,
            'DNI'=> $this->name,
            'celular'=> $this->name,
            'correo'=> $this->unique()->safeEmail(),
            'estado'=> $this->name,

        ];
    }
}
