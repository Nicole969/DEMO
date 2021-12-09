@extends('adminlte::page')
@extends('layouts.model')
@section('title', 'Empleados')

@section('css')
  <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')

<div class="mb-4 d-flex justify-content-end">
  <a class="btn btn-primary" href="{{ URL::to('#') }}">Convertir a PDF</a>
</div>


@stop

@section('content')


