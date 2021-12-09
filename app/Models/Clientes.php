<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $fillable = ['ID_Empleados','nombre','apellido','codigo','DNI','celular','direccion','referencia'];

    public function getRouteKeyName()
    {
        return "nombre";
    }

    //Relacion de UNO A MUCHOS
    public function ventas(){
        return $this->hasMany(Ventas::class);
    }

    //Relacion de UNO A MUCHOS
    public function citas(){
        return $this->hasMany(Citas::class);
    }


    //Relacion de UNO A MUCHOS INVERSAA
    public function empleados(){
        return $this->belongsTo(Empleados::class);
    }
}
