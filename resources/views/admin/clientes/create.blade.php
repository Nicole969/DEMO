@extends('adminlte::page')
@extends('layouts.model')
@section('title', 'Clientes')

@section('css')
  <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')
<div class="w-full lg:w-12/12 bg-white p-3 rounded-lg lg:rounded-l-none">

  <div class="font-medium pt-0 text-center text-xl sm:text-3lg text-blue-800">
    Añadiendo Clientes
  </div>
  <div class="mt-4 pt-0 text-center  text-lg sm:text-sm text-blue-700">
    Ingresa un nuevo Cliente 👈
  </div>

</div> 
@stop

@section('content')

@if (session('info'))
@livewire('alerta')
@endif

<div class="card">
  <div class="card-body">
    {!! Form::open(['route' => 'admin.clientes.store']) !!}

     @include('admin.clientes.par.form')
    
     <!-- Boton -->
    <div class="rounded-t  mb-1 px-3 py-3">
    <div class="text-center flex justify-between"> 
    {!! Form::submit('Añadir Cliente', ['class' => 'bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear transition-all duration-150']) !!}
    </div></div>
    
    <!-- Boton -->
    <div class="rounded-t  mb-1 px-3 py-3">
    <div class="text-center flex justify-between"> 
    <a class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear transition-all duration-150" 
     href="{{ route('admin.clientes.index') }}" 
     class="text-blue-600 hover:text-blue-900">Volver</a>
    </div></div>

     

    {!! Form::close() !!}
  </div>
</div>

@stop