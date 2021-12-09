@extends('adminlte::page')
@extends('layouts.model')
@section('title', 'Compras')

@section('css')
  <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')

  <div class="w-full lg:w-12/12 bg-white p-3 rounded-lg lg:rounded-l-none"> 
  <div class="font-medium pt-0 text-center text-xl sm:text-3lg text-blue-800">
      Listado de Ventas
  </div>
  <div class="mt-4 pt-0 text-center  text-lg sm:text-sm text-blue-700">
      Todas nuestras ventas 👏😄
  </div>
  </div>


@stop

@section('content')

@if (session('info'))
@livewire('alerta')
@endif

<div class="card">
  <div class="card-body">

    @livewire('admin.ventas-index')

  </div>
</div>

@stop