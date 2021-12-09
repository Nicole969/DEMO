<?php

namespace App\Models;

use App\Models\Empleados as ModelsEmpleados;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Empleados extends Model
{
    use HasFactory;

    protected $fillable = ['ID_Rols','nombres','apellido_paterno','apellido_materno','codigo','edad','DNI','celular','correo','estado'];

    public function getRouteKeyName()
    {
        return "nombres";
    }

    public function run(){
        
        $empleados = new ModelsEmpleados();
    }

    //Relacion de UNO A MUCHOS
    public function compras(){
        return $this->hasMany(Compras::class);
    }

    //Relacion de UNO A MUCHOS
    public function ventas(){
        return $this->hasMany(Ventas::class);
    }

    //Relacion de UNO A MUCHOS
    public function citas(){
        return $this->hasMany(Citas::class);
    }

    //Relacion de UNO A MUCHOS
    public function clientes(){
        return $this->hasMany(Clientes::class);
    }


    //Relacion de UNO A MUCHOS INVERSAA
    public function users(){
        return $this->belongsTo(User::class);
    }

    

}
