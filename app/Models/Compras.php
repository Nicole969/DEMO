<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;
    ////QUITAR FECHA Y HORA
    protected $fillable = ['ID_Empleados','codigo','proveedor','celular','correo','comprobante','fecha_hora'];

    public function getRouteKeyName()
    {
        return "proveedor";
    }


    //Relacion de UNO A MUCHOS INVERSAA
    public function empleados(){
        return $this->belongsTo(Empleados::class);
    }

    //Relacion de UNO A MUCHOS
    public function detallecompra(){
        return $this->hasMany(Detalle_compras::class);
    }

}

