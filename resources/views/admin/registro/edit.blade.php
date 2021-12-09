@extends('adminlte::page')
@extends('layouts.model')
@section('title', 'Clientes')

@section('css')
  <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')
<h1>
  Editar clientes
</h1>
@stop

@section('content')

@if (session('info'))
@livewire('alerta')
@endif



@stop

