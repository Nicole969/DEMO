<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    protected $fillable = ['ID_Empleados','ID_Clientes','codigo','descripcion','fecha_hora','direccion'];

   

    //Relacion de UNO A MUCHOS INVERSAA
    public function empleados(){
        return $this->belongsTo(Empleados::class);
    }

    //Relacion de UNO A MUCHOS INVERSAA
    public function clientes(){
        return $this->belongsTo(Clientes::class);
    }
}
