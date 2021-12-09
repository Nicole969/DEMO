<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Empleados;
use Barryvdh\DomPDF\Facade as DomPDF;
use PDF;


class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.clientes.index');
        $this->middleware('can:admin.clientes.edit');
        $this->middleware('can:admin.clientes.create');
        $this->middleware('can:admin.clientes.destroy');
        $this->middleware('can:admin.clientes.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $search;
    public function index()
    {
        //
        $clientes = Clientes::all();
        return view('admin.clientes.index', compact('clientes'));
    }

    /**
     * Display a listing of the resource.
     * @param boolean
     * @return PDF
     */

    public function pdf()
    {
        //
        $clientes= Clientes::paginate();
        $pdf = PDF::loadView('admin.clientes.pdf', ['clientes'=>$clientes]);
        //$pdf->loadHTML('<h1>nnnnnn</h1>');
        //return $pdf->stream();
        return $pdf->download('___clientes.pdf');
        //return view('admin.clientes.pdf', compact('clientes'));

    }


/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Clientes $cliente)
    {
        //
        $ID_Empleados = Empleados::pluck('nombres','id');
        
        return view('admin.clientes.create',compact('ID_Empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Clientes $cliente)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'DNI' => 'required|unique:clientes',
            'celular' => 'required',
            'direccion' => 'required',
            'ID_Empleados' => 'required',
        ]
        );

        $cliente = Clientes::create($request->all());

        return redirect()->route('admin.clientes.edit', compact('cliente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $cliente)
    {
        // 
        
        return view('admin.clientes.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Clientes $cliente)
    {
        //

        $ID_Empleados = Empleados::pluck('nombres','id');
        return view('admin.clientes.edit', compact('cliente', 'ID_Empleados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clientes $cliente)
    {
        //
        
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'DNI' => "required|unique:clientes,DNI,$cliente->id",
            'celular' => 'required',
            'direccion' => 'required',
            'ID_Empleados' => 'required',
        ]
        );

        $cliente->update($request->all());
        return redirect()->route('admin.clientes.edit', $cliente)->with('info','Actualizacion exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $ID_Clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $cliente)
    {
        //
        $cliente->delete();
        return redirect()->route('admin.clientes.index')->with('info','El cliente se elimino con exito');
    }
}
