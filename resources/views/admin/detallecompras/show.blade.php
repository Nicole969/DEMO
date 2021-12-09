@extends('adminlte::page')
@extends('layouts.model')
@section('title', 'Empleados')

@section('css')
  <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')
<h1>
    Empleados
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-empleados">
        ver
    </button>
</h1>
@stop

@section('content')


