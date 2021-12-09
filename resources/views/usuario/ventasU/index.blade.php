@extends('adminlte::page')
@extends('layouts.model')
@section('title', 'Clientes')
@section('css')
  <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')

<section class=" py-1 bg-blueGray-50">
<div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
<div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blue-100 border-0">
<!-- secciom -->

{!! Form::open(['route' => 'usuario.ventasU.store']) !!}
  <div class="rounded-t bg-white mb-0 px-6 py-6">
  <div class="text-center flex justify-between">
  <h6 class="text-blue-800 text-xl font-bold">
  Venta
  </h6>
  
  </div>
  </div>

  <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
   <!-- Codigo --> 
  <form>
  <h6 class="text-blue-400 text-sm mt-3 mb-6 font-bold uppercase">
  Informacion de servicio
  </h6>
  <div class="flex flex-wrap">
  <div class="w-full lg:w-6/12 px-4">
  <div class="relative w-full mb-3">
  <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
  Empleado
  </label>
  {!! Form::select('ID_Empleados', $ID_Empleados, null, ['class' => 'form border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
  @error('ID_Empleados')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
  </div>
  </div>

  <div class="w-full lg:w-6/12 px-4">
  <div class="relative w-full mb-3">
  <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
  Cliente
  </label>
  {!! Form::select('ID_Clientes', $ID_Clientes, null, ['class' => 'form border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
  @error('ID_Clientes')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
  </div>
  </div>

  <div class="w-full lg:w-6/12 px-4">
  <div class="relative w-full mb-3">
  <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
  Nombre
  </label>
  {!! Form::text('nombre', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el nombre']) !!}
  @error('nombre')
  <samp class="text-danger">{{$message}}</samp>
@enderror  
</div>
  </div>

  <div class="w-full lg:w-6/12 px-4">
  <div class="relative w-full mb-3">
  <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
   Articulo
  </label>
  {!! Form::select('ID_Inventarios', $ID_Inventarios, null, ['class' => 'form border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
  @error('ID_Inventarios')
  <samp class="text-danger">{{$message}}</samp>
@enderror   
</div>
  </div>
  </div>
  
  <hr class="mt-6 border-b-1 border-blue-300">
  
  <h6 class="text-blue-400 text-sm mt-3 mb-6 font-bold uppercase">
  Informacion de venta
  </h6>
  <div class="flex flex-wrap">
  <div class="w-full lg:w-4/12 px-4">
  <div class="relative w-full mb-3">
  <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
   Codigo
  </label>
  {!! Form::text('codigo', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el codigo']) !!}
  @error('codigo')
  <samp class="text-danger">{{$message}}</samp>
@enderror
</div>
  </div>
  <div class="w-full lg:w-4/12 px-4">
  <div class="relative w-full mb-3">
  <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
   Cantidad
  </label>
  {!! Form::text('cantidad', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el cantidad']) !!}
  @error('cantidad')
  <samp class="text-danger">{{$message}}</samp>
@enderror  
</div>
  </div>
  <div class="w-full lg:w-4/12 px-4">
  <div class="relative w-full mb-3">
  <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
   Precio Unidad
  </label>
  {!! Form::text('precio_unidad', null, ['class' => 'border-0 px-3 py-3 placeholderGray-blue-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el precio_unidad']) !!}
  @error('precio_unidad')
  <samp class="text-danger">{{$message}}</samp>
@enderror  
</div>
  </div>



  <div class="w-full lg:w-4/12 px-4">
  <div class="relative w-full mb-3">
  <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
   Descuento
  </label>
  {!! Form::text('descuento', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el descuento']) !!}
  
</div>
  </div>
  <div class="w-full lg:w-4/12 px-4">
  <div class="relative w-full mb-3">
  <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
   Precio Total
  </label>
  {!! Form::text('precio_total', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el precio total']) !!}
  @error('precio_total')
    <samp class="text-danger">{{$message}}</samp>
  @enderror
       
</div>
  </div>
  <div class="w-full lg:w-4/12 px-4">
    <div class="relative w-full mb-3">
    <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
    Fecha y Hora
    </label>
    <input type="datetime-local" name="fecha_hora" min="05:30" max="8:00" step="600"
    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"/>
    </div>
    </div>
  </div>
  
  
  <hr class="mt-6 border-b-1 border-blue-300">
  
  <h6 class="text-blue-400 text-sm mt-3 mb-6 font-bold uppercase">
  Descripcion
  </h6>
  <div class="flex flex-wrap">
  <div class="w-full lg:w-12/12 px-4">
  <div class="relative w-full mb-3">
  <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
  Descripcion de la venta
  </label>
  {!! Form::textarea('descripcion', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa la descripcion de la venta']) !!}
  @error('descripcion')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
</div>
  </div>
  </div>


  <div class="rounded-t  mb-1 px-3 py-3">
    <div class="text-center flex justify-between">
      
    {!! Form::submit('Guardar', ['class' => 'bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear transition-all duration-150']) !!}
   
  </div>
  </div>
  </form>
  
  <!-- Codigo -->
  </div>
  <!-- boton -->
      <div class="rounded-t bg-white mb-0 px-5 py-6">
      <div class="text-center flex justify-between">
      <h6 class="text-blue-800 text-xl font-bold ms:text-lg">
       Ingresa la Informacion de pago
      </h6>
      <button onclick="document.getElementById('myModal').showModal()"
      class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear transition-all duration-150">Pago</button>
      </div>
      </div>

{!! Form::close() !!}
<!-- secciom -->

</div>
</div>
</section>
<style>
  dialog[open] {
  animation: appear .15s cubic-bezier(0, 1.8, 1, 1.8);
}

  dialog::backdrop {
    background: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(54, 54, 54, 0.5));
    backdrop-filter: blur(3px);
  }

</style>

<dialog id="myModal" class="h-50% w-11/12 md:w-1/2 p-5  bg-white rounded-md ">
 {!! Form::open(['route' => 'admin.pagos.store']) !!}       
  <div class="flex flex-col w-full h-auto ">
       <!-- Header -->
       <div class="flex w-full h-auto justify-center items-center">
         <div class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
          Informacion de pago
         </div>
         <div onclick="document.getElementById('myModal').close();" class="flex w-1/12 h-auto justify-center cursor-pointer">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
         </div>
         <!--Header End-->
         <hr class="mt-12 border-b-1 border-blue-300">
       </div>

       
         <!-- Modal Content-->
          
            <!-- header -->
      
  
          <div class="flex flex-wrap">
          <div class="w-full lg:w-12/12 px-4">
          <div class="relative w-full mb-3">
          <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
              Venta
          </label>
          {!! Form::select('ID_Ventas', $ID_ventas, 'id', ['class' => 'form border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
          @error('ID_Ventas')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
          <div class="relative w-full mb-3">
          <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
          Pago
          </label>
          {!! Form::text('pago', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Pago']) !!}
          @error('pago')
          <samp class="text-danger">{{$message}}</samp>
          @enderror  
        </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
          <div class="relative w-full mb-3">
          <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
          Vuelto
          </label>
          {!! Form::text('vuelto', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Vuelto']) !!}
          </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
          <div class="relative w-full mb-3">
          <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
          A Saldo
          </label>
          {!! Form::text('saldo', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'A saldo']) !!}
          </div>
          </div>
          <div class="w-full lg:w-6/12 px-4">
          <div class="relative w-full mb-3">
          <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
          A Cuenta
          </label>
          {!! Form::text('cuenta', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'A cuenta']) !!}
          </div>
          </div>
          <div class="w-full lg:w-12/12 px-4">
          <div class="relative w-full mb-3">
          <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
          Estado
          </label>
          {!! Form::text('estado', null, ['class' => 'border-0 px-3 py-3 placeholder-blueGray-300 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el estado']) !!}
          @error('estado')
          <samp class="text-danger">{{$message}}</samp>
          @enderror  
        </div>
          </div>
          <div class="rounded-t  mb-1 px-3 py-3">
          <div class="text-center flex justify-between"> 
            {!! Form::submit('Guardar', ['class' => 'bg-blue-500 text-white active:bg-blueGray-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear transition-all duration-150']) !!}
          </div>
          </div>
          </div>
         
         <!-- End of Modal Content-->
            
  </div>
  {!! Form::close() !!}
</dialog>

@stop

@section('js')

@stop