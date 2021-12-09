<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inventarios;
use App\Models\Ventas;
use App\Models\Empleados;
use App\Models\Clientes;
use App\Models\Pago;
use PDF;
use Illuminate\Support\Facades\DB;
use mysqli;

class VentasController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.ventas.index');
        $this->middleware('can:admin.ventas.edit');
        $this->middleware('can:admin.ventas.create');
        $this->middleware('can:admin.ventas.destroy');
    }
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
        return view('admin.ventas.index', compact('ventas', 'ID_Empleados', 'ID_Clientes', 'ID_Inventarios', 'ID_ventas'));
    }

    /**
     * Display a listing of the resource.
     * @param boolean
     * @return PDF
     */

    public function vpdf()
    {
        //
        $ventas= Ventas::paginate();
        $pdf = PDF::loadView('admin.ventas.vpdf', ['ventas'=>$ventas]);
        //$pdf->loadHTML('<h1>nnnnnn</h1>');
        // return $pdf->stream();
        return $pdf->download('___ventas.pdf');
        //return view('admin.clientes.pdf', compact('clientes'));

    }


    /**
     * Show the form for creating a new resource. ticketpdf
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ID_ventas = Ventas::pluck('nombre','id');
        $ID_Empleados = Empleados::pluck('nombres','id');
        $ID_Clientes = Clientes::pluck('nombre','id');
        $ID_Inventarios= Inventarios::pluck('nombre','id');
        return view('admin.ventas.create', compact('ID_Empleados', 'ID_Clientes', 'ID_Inventarios', 'ID_ventas'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        $id= Ventas::pluck('id');
        $ventas = Ventas::create($request->all());
        return redirect()->route('admin.ventas.index', compact('ventas','id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ventas $venta)
    {
        //
        $ID_ventas = Ventas::pluck('nombre','id');
        return view('admin.ventas.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Ventas $venta
     * @return \Illuminate\Http\Response
     */
    public function edit(Ventas $venta)
    {
        //
        return view('admin.ventas.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Ventas $venta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ventas $venta, Pago $pago)
    {
        //
        $request->validate([
            'codigo' => 'required',
            'nombre' => 'required',
            'cantidad' => 'required',
            'precio_unidad' => 'required',
            'precio_total' => 'required',
        ]
        );

        $venta->update($request->all());
        return redirect()->route('admin.ventas.edit', $venta)->with('info','Actualizacion exitosa');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  Ventas $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ventas $venta)
    {
        //
        $venta->delete();
        return redirect()->route('admin.ventas.index')->with('info','El venta se elimino con exito');
    }
}
