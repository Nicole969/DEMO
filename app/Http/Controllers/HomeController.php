<?php

namespace App\Http\Controllers;
use App\Models\Citas;
use App\Models\Ventas;
use App\Models\Clientes;
use App\Models\Empleados;
use App\Models\Inventarios;
use App\Models\Compras;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fecha = Citas::pluck('fecha_hora'); 
        //$fecha = Citas::where('fecha_hora', '<', date_format(now(),'Y-m-d'));
        //$fechass = $fecha->format('Y-m-d'); 
        $citas = Citas::all();
        $clientes = Clientes::count();
        $empleados = Empleados::count();
        $articulos= Inventarios::count();
        $compras = Compras::count();
        $ventas = Ventas::count();
        return view('home', compact('citas','fecha','clientes','empleados','articulos','compras','ventas'));
        
    }
}
