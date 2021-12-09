<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventarios;
use PDF;
use Illuminate\Support\Facades\DB;

class InventariosController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.inventarios.index');
        $this->middleware('can:admin.inventarios.edit');
        $this->middleware('can:admin.inventarios.create');
        $this->middleware('can:admin.inventarios.destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $inventarios = Inventarios::all();
        return view('admin.inventarios.index', compact('inventarios'));
    }


    /**
     * Display a listing of the resource.
     * @param boolean
     * @return PDF
     */

    public function ipdf()
    {
        //
        $inventarios= Inventarios::paginate();
        $pdf = PDF::loadView('admin.inventarios.ipdf', ['inventarios'=>$inventarios]);
        //$pdf->loadHTML('<h1>nnnnnn</h1>');
        // return $pdf->stream();
        return $pdf->download('___inventario.pdf');
        //return view('admin.clientes.pdf', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Inventarios $inventario)
    {
        //
        return view('admin.inventarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Inventarios $inventario)
    {
        //
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'categoria' => 'required|unique:inventarios',
            'stock' => 'required',
            'descripcion' => 'required',
        ]
        );

        $inventario = Inventarios::create($request->all());

        return redirect()->route('admin.inventarios.edit', compact('inventario'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Inventarios $inventario)
    {
        //
        return view('admin.inventarios.show', compact('inventario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int   Inventarios $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventarios $inventario)
    {
        //
        return view('admin.inventarios.edit', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int   Inventarios $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Inventarios $inventario)
    {
        //
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'categoria' => 'required',
            'stock' => 'required',
            'descripcion' => 'required',
        ]
        );

        $inventario->update($request->all());
        return redirect()->route('admin.inventarios.edit', $inventario)->with('info','Actualizacion exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int   Inventarios $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventarios $inventario)
    {
        //
        $inventario->delete();
        return redirect()->route('admin.inventarios.index')->with('info','El inventario se elimino con exito');
    }
}
