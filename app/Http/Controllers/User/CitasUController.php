<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\Empleados;
use App\Models\Clientes;

class CitasUController extends Controller
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
        $citas = Citas::all();
        return view('usuario.citasU.index', compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Citas $citas)
    {
        //
        $ID_Empleados = Empleados::pluck('nombres','id');
        $ID_Clientes = Clientes::pluck('nombre','id');
        return view('usuario.citasU.create', compact('ID_Empleados', 'ID_Clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Citas $citas)
    {
        //
        $request->validate([
            'codigo' => 'required|unique:citas',
            'descripcion' => "required",
            'direccion' => 'required',
            'ID_Empleados' => 'required',
            'ID_Clientes' => "required",
        ]
        );

        $citas = Citas::create($request->all());
        return redirect()->route('usuario.citasU.index', compact('citas'));
    }

 
  

    
}
