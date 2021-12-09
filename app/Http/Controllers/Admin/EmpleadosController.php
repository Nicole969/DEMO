<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empleados;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{
    //
    public function __construct()
    {
       
        $this->middleware('can:admin.empleados.index');
        $this->middleware('can:admin.empleados.edit');
        $this->middleware('can:admin.empleados.create');
        $this->middleware('can:admin.empleados.destroy');
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        //
        $empleados = Empleados::all();
        return view('admin.empleados.index', compact('empleados'));
        
    }

    /**
     * Display a listing of the resource.
     * @param boolean
     * @return PDF
     */

    public function epdf()
    {
        //
        $empleados= Empleados::paginate();
        $pdf = PDF::loadView('admin.empleados.epdf', ['empleados'=>$empleados]);
        //$pdf->loadHTML('<h1>nnnnnn</h1>');
        // return $pdf->stream();
        return $pdf->download('___empleados.pdf');
        //return view('admin.clientes.pdf', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Empleados $empleados)
    {
        //
        
        $ID_Rols = User::pluck('name','id');
        return view('admin.empleados.create', compact('ID_Rols'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Empleados $empleado){

        //
        $request->validate([
            'codigo' => 'required',
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'edad' => 'required',
            'DNI' => "required|unique:empleados,DNI,$empleado->id",
            'celular' => 'required',
            'correo' => 'required',
            'estado' => 'required',
        ]
        );

        $empleados = Empleados::create($request->all());
        return redirect()->route('admin.empleados.index', compact('empleados'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleado)
    {
        // 
        return view('admin.empleados.show', compact('empleado'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  empleado $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleados $empleado)
    {
        //
        $ID_Rols = User::pluck('name','id');
        return view('admin.empleados.edit', compact('empleado','ID_Rols'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  empleado $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleados $empleado)
    {
        //
        
        $request->validate([
            'codigo' => 'required',
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'edad' => 'required',
            'DNI' => "required|unique:empleados,DNI,$empleado->id",
            'celular' => 'required',
            'correo' => 'required',
            'estado' => 'required',
        ]
        );

        $empleado->update($request->all());
        return redirect()->route('admin.empleados.edit', $empleado)->with('info','Actualizacion exitosa');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $ID_Empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleados $empleado)
    {
        //
        $empleado->delete();
        return redirect()->route('admin.empleados.index')->with('info','El emple$empleado se elimino con exito');
    }
}
