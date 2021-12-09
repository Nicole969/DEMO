<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\Empleados;
use App\Models\Clientes;

class ClientesUController extends Controller
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
        $clientes= Clientes::all();
        return view('usuario.clientesU.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Clientes $clientes)
    {
        //
        $ID_Empleados = Empleados::pluck('nombres','id');
        return view('usuario.clientesU.create', compact('ID_Empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Clientes $clientes)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'DNI' => "required|unique:clientes,DNI,$clientes->id",
            'celular' => 'required',
            'direccion' => 'required',
            'ID_Empleados' => 'required',
        ]
        );

        $clientes = Clientes::create($request->all());

        return redirect()->route('usuario.clientesU.create', compact('clientes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Citas $citas)
    {
        //
        /*
        return view('usuario.citas.show', compact('citas'));*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Citas $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Citas $citas)
    {
        //
        /*
        $citas = Citas::all();
        $ID_Empleados = Empleados::pluck('nombres','id');
        $ID_Clientes = Clientes::pluck('nombre','id');
        return view('usuario.citas.edit', compact('citas', 'ID_Empleados', 'ID_Clientes'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Citas $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citas $citas)
    {
        //
        /*
        $request->validate([
            'codigo' => 'required',
            'descripcion' => "required",
            'fecha_hora' => 'required',
            'direccion' => 'required',
            'ID_Empleados' => 'required',
            'ID_Clientes' => "required|unique:citas,ID_Clientes, $citas->id",
        ]
        );

        $citas->update($request->all());
        return redirect()->route('usuario.citas.edit', $citas)->with('info','Actualizacion exitosa');
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Citas $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citas $citas)
    {
        //
        /*
        $citas->delete();
        return redirect()->route('usuario.citas.index')->with('info','El cliente se elimino con exito');
    */
    }
}
