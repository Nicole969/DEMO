<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle__compras extends Model
{
    use HasFactory;

    protected $fillable = ['ID_Compras','ID_Inventarios','cantidad','precio','descripcion','created_at'];

    public function getRouteKeyName()
    {
        return "precio";
    }

    //Relacion de UNO A MUCHOS INVERSAA
    public function compras(){
        return $this->belongsTo(Compras::class);
    }

    //Relacion de UNO A MUCHOS INVERSAA
    public function inventario(){
        return $this->belongsTo(Inventarios::class);
    }
}
