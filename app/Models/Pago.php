<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;


    protected $fillable = ['ID_Ventas', 'pago', 'vuelto','saldo','cuenta' ,'estado'];


    ///De Uno a Uno
    public function ventas(){
        return $this->hasOne(Ventas::class);
    }
}
