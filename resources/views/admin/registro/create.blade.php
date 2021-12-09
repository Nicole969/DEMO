@extends('adminlte::page')
@extends('layouts.model')
@section('title', 'Clientes')

@section('css')
  <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')
<h1>
  Añadiendo Clientes
</h1>
@stop

@section('content')

<div class="card">
  <div class="card-body">
    {!! Form::open(['route' => 'admin.clientes.store']) !!}

     @include('admin.clientes.partials.form')

    <!-- Boton -->
    {!! Form::submit('Añadir Cliente', ['class' => 'btn btn-primary']) !!}


    {!! Form::close() !!}
  </div>
</div>

@stop