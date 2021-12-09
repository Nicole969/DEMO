<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ventas;
use App\Models\Empleados;
use App\Models\Clientes;
use App\Models\Inventarios;
use App\Models\Pago;

class VentasUController extends Controller
{
    //
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       //
       $ventas = Ventas::all();
       $ID_ventas = Ventas::pluck('nombre','id');
       $ID_Empleados = Empleados::pluck('nombres','id');
        $ID_Clientes = Clientes::pluck('nombre','id');
        $ID_Inventarios= Inventarios::pluck('nombre','id');
       return view('usuario.ventasU.index', compact('ventas', 'ID_Empleados', 'ID_Clientes', 'ID_Inventarios', 'ID_ventas'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       //
       
        $ID_Empleados = Empleados::pluck('nombres','id');
        $ID_Clientes = Clientes::pluck('nombre','id');
       return view('usuario.ventasU.create', compact('ID_Empleados', 'ID_Clientes'));
   }

   public function store(Request $request, Ventas $ventas)
    {
        //
        $request->validate([
            'descripcion' => "required",
            'nombre' => 'required',
            'cantidad' => 'required',
            'precio_total' => 'required',
            'ID_Empleados' => 'required',
            'ID_Inventarios' => 'required',
            'ID_Clientes' => "required",
        ]
        );

        $ventas = Ventas::create($request->all());

        return redirect()->route('usuario.ventasU.index', compact('ventas'));
    }

}
