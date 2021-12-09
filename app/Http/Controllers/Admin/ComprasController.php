<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Compras;
use App\Models\Empleados;
use App\Models\Detalle__compras;
use PDF;
use Illuminate\Support\Facades\DB;

class ComprasController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.compras.index');
        $this->middleware('can:admin.compras.edit');
        $this->middleware('can:admin.compras.create');
        $this->middleware('can:admin.compras.destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $compras = Compras::all();
        return view('admin.compras.index', compact('compras'));
    }

    /**
     * Display a listing of the resource.
     * @param boolean
     * @return PDF
     */

    public function copdf()
    {
        //
        $compras= Compras::paginate();
        $detalles= Detalle__Compras::paginate();
        $pdf = PDF::loadView('admin.compras.copdf', ['compras'=>$compras],['detalles'=>$detalles]);
        //$pdf->loadHTML('<h1>nnnnnn</h1>');
        // return $pdf->stream();
        return $pdf->download('___compras.pdf');
        //return view('admin.clientes.pdf', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Compras $compra)
    {
        //

        $ID_Empleados = Empleados::pluck('nombres','id');
        return view('admin.compras.create',compact('ID_Empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Compras $compra)
    {
        //

        $request->validate([
            'codigo' => 'required',
            'proveedor' => 'required',
            'celular' => 'required|unique:compras',
            'correo' => 'required',
            'comprobante' => 'required',
            'fecha_hora' => 'required',
            'ID_Empleados' => 'required',
        ]
        );

        $compra = Compras::create($request->all());
        return redirect()->route('admin.compras.edit', compact('compra'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $compra
     * @return \Illuminate\Http\Response
     */
    public function show(Compras $compra)
    {
        //
        return view('admin.compras.show', compact('compra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int   Compras $compra
     * @return \Illuminate\Http\Response
     */
    public function edit(Compras $compra)
    {
        //
        $ID_Empleados = Empleados::pluck('nombres','id');
        return view('admin.compras.edit', compact('compra', 'ID_Empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int   Compras $compra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Compras $compra)
    {
        //
        $request->validate([
            'codigo' => 'required',
            'proveedor' => 'required',
            'celular' => 'required|unique:compras',
            'correo' => 'required',
            'comprobante' => 'required',
            'fecha_hora' => 'required',
            'ID_Empleados' => 'required',
        ]
        );

        $compra->update($request->all());
        return redirect()->route('admin.compras.edit', $compra)->with('info','Actualizacion exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int   Compras $compra
     * @return \Illuminate\Http\Response
     */
    public function destroy( Compras $compra)
    {
        //

        $compra->delete();
        return redirect()->route('admin.compras.index')->with('info','El compra se elimino con exito');


    }
}
