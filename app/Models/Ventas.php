<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $fillable = ['ID_Empleados', 'ID_Clientes', 'ID_Inventarios','codigo','nombre','cantidad','precio_unidad','precio_total','descripcion','descuento'];

    public function getRouteKeyName()
    {
        return "nombre";
    }

    //Relacion de UNO A MUCHOS INVERSAA
    public function empleados(){
        return $this->belongsTo(Empleados::class);
    }

    //Relacion de UNO A MUCHOS INVERSAA
    public function clientes(){
        return $this->belongsTo(Clientes::class);
    }

    //Relacion de UNO A MUCHOS INVERSAA
    public function inventario(){
        return $this->belongsTo(Inventarios::class);
    }

    ///De Uno a Uno
    public function pago(){
    return $this->hasOne(Pago::class);
    }
}
