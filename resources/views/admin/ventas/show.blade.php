@extends('adminlte::page')
@extends('layouts.model')
@section('title', 'Empleados')

@section('css')
  <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')
<div >
   
  <div class="card-header">
  <td> 
  <a class="btn btn-primary" href="{{ route('admin.clientes.create') }}" 
  class="text-indigo-600 hover:text-indigo-900">Agrear nuevo cliente</a>
  </td>
  <td> 
  <a class="btn btn-primary" href="{{ route('pdf') }}" 
  class="text-indigo-600 hover:text-indigo-900">PDF</a>
   </td>
  </div>
<div class="card-body">

<div class="flex flex-col">

<div class=" bg-white rounded flex items-center w-full p-3 shadow-sm border border-gray-200">
<button class="outline-none focus:outline-none"><svg class=" w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
<input wire:model="search" type="search" placeholder="Realiza tu busqueda" x-model="q" class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">        
</div>

@if($clientes->count())
<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
<div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-8">
<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
  
  <table class="min-w-full divide-y divide-gray-200">
  <thead class="bg-gray-50">
  <tr>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
  Nombre
  </th>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
  DNI / Celular
  </th>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
  Direccion
  </th>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
  Referencia
  </th>

  <th scope="col" class="relative px-6 py-3">
  <span class="sr-only">Edit</span>
  </th>

  </tr>
  </thead>
<!-- More people... -->
  <tbody class="bg-white divide-y divide-gray-200">
  @foreach ($clientes as $cliente)
  <tr>
  <td class="px-6 py-4 whitespace-nowrap">
  <div class="flex items-center">
  <div class="flex-shrink-0 h-10 w-10">
  <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
  </div>

  <div class="ml-4">
  <div class="text-sm font-medium text-gray-900">
  {{$cliente->nombre}}
  </div>

  <div class="text-sm text-gray-500">
  {{$cliente->apellido}}
  </div>

  </div>
  </div>
  </td>

  <td class="px-6 py-4 whitespace-nowrap">
  <div class="text-sm text-gray-900">{{$cliente->DNI}}</div>
  <div class="text-sm text-gray-500">{{$cliente->celular}}</div>
  </td>

  <td class="px-6 py-4 whitespace-nowrap">
  <div class="text-sm text-gray-900">{{$cliente->direccion}}</div>
  </td>

  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
  {{$cliente->referencia}}
  </td>

  <td class="px-0 py-4 whitespace-nowrap text-right text-sm font-medium">
  <a href="{{ route('admin.clientes.edit', $cliente) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
  </td>

  <td class="px-5 py-4 whitespace-nowrap text-right text-sm font-medium">
    <form action="{{ route('admin.clientes.destroy', $cliente) }}" 
          method="POST"  >
          @csrf
          @method('delete')
          <button type="submit" class="text-red-600 hover:text-red-900 font-medium">Borrar</button>
    </form>
  </td>
  
  </tr>

   <!-- More people... -->
   @endforeach
  </tbody>
  </table>

</div>
</div>
</div>
</div>
</div>


@else

<div class="card-body">
<strong>No existe ese registro</strong>
</div>
@endif
</div>
@stop

@section('content')


