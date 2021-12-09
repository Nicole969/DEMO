<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clientes;
use App\Models\Empleados;
use App\Models\Citas;
use Illuminate\Support\Facades\BD;
use Illuminate\Support\Facades\DB;
use PDF;

class CitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.citas.index');
        $this->middleware('can:admin.citas.edit');
        $this->middleware('can:admin.citas.create');
        $this->middleware('can:admin.citas.destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Citas $citas)
    {
        //
        //
        $citas = Citas::all();
        return view('admin.citas.index', compact('citas'));
    }

    /**
     * Display a listing of the resource.
     * @param boolean
     * @return PDF
     */

    public function cpdf()
    {
        //
        $citas= Citas::paginate();
        $pdf = PDF::loadView('admin.citas.cpdf', ['citas'=>$citas]);
        //$pdf->loadHTML('<h1>nnnnnn</h1>');
        // return $pdf->stream();
        return $pdf->download('___citas.pdf');
        //return view('admin.clientes.pdf', compact('clientes'));

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
        return view('admin.citas.create', compact('ID_Empleados', 'ID_Clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Citas $cita)
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

        $cita = Citas::create($request->all());
        return redirect()->route('admin.citas.edit', compact('cita'));
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
        return view('admin.citas.show', compact('citas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Citas $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Citas $cita)
    {
        //
        $ID_Empleados = Empleados::pluck('nombres','id');
        $ID_Clientes = Clientes::pluck('nombre','id');
        return view('admin.citas.edit', compact('cita', 'ID_Empleados', 'ID_Clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  Citas $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citas $cita)
    {
        //
        $request->validate([
            'codigo' => 'required',
            'descripcion' => "required",
            'direccion' => 'required',
            'ID_Empleados' => 'required',
            'ID_Clientes' => "required",
        ]
        );

        $cita->update($request->all());
        return redirect()->route('admin.citas.edit', $cita)->with('info','Actualizacion exitosa');
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
        $citas->delete();
        return redirect()->route('admin.citas.index')->with('info','El cliente se elimino con exito');
    }

    public function grafica(){

        $cit= Citas::select(DB::raw('COUNT(*) as count'))
        ->pluck('count');

        return view('home', compact('cit'));
    }
}
