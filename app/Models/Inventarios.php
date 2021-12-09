<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventarios extends Model
{
    use HasFactory;
    protected $fillable = ['codigo','nombre','categoria','stock','descripcion'];

    public function getRouteKeyName()
    {
        return "nombre";
    }
    //Relacion de UNO A MUCHOS
    public function ventas(){
        return $this->hasMany(Ventas::class);
    }

    //Relacion de UNO A MUCHOS
    public function detallecompra(){
        return $this->hasMany(Detalle_compras::class);
    }

}
