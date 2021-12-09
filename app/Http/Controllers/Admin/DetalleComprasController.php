<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Detalle__compras;
use App\Models\Clientes;
use App\Models\Empleados;
use App\Models\Compras;
use App\Models\Inventarios;

class DetalleComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.detallecompras.index');
        $this->middleware('can:admin.detallecompras.edit');
        $this->middleware('can:admin.detallecompras.create');
        $this->middleware('can:admin.detallecompras.destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $detallecompras = Detalle__compras::all();
        return view('admin.detallecompras.index', compact('detallecompras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ID_Inventarios = Inventarios::pluck('nombre','id');
        $ID_Compras = Compras::pluck('proveedor','id');
        $detallecompras = Detalle__compras::all();
        return view('admin.detallecompras.create', compact('detallecompras', 'ID_Compras', 'ID_Inventarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        $request->validate([
            'descripcion' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'ID_Inventarios' => 'required',
            'ID_Compras' => 'required',
        ]
        );

        $detallecompra= Detalle__compras::create($request->all());

        return redirect()->route('admin.detallecompras.edit', compact('detallecompra'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Detalle__compras $detallecompra)
    {
        //
        return view('admin.detallecompras.show', compact('detallecompra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int   Detalle__compras $detallecompra
     * @return \Illuminate\Http\Response
     */
    public function edit( Detalle__compras $detallecompra)
    {
        //
        $ID_Inventarios = Inventarios::pluck('nombre','id');
        $ID_Compras = Compras::pluck('proveedor','id');
        $detallecompra = Detalle__compras::all();
        return view('admin.detallecompras.edit', compact('detallecompra', 'ID_Compras', 'ID_Inventarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int   Detalle__compras $detallecompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Detalle__compras $detallecompra)
    {
        //
        $request->validate([
            'descripcion' => 'required',
            'precio' => 'required',
            'cantidad' => 'required',
            'ID_Inventarios' => 'required',
            'ID_Compras' => 'required',
        ]
        );

        $detallecompra->update($request->all());
        return redirect()->route('admin.detallecompras.edit', $detallecompra)->with('info','Actualizacion exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int   Detalle__compras $detallecompra
     * @return \Illuminate\Http\Response
     */
    public function destroy( Detalle__compras $detallecompra)
    {
        //
        $detallecompra->delete();
        return redirect()->route('admin.detallecompras.index')->with('info','El detallecompra se elimino con exito');
    }
}
