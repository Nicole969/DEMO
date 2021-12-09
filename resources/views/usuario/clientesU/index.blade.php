
@extends('adminlte::page')
@extends('layouts.model')
@section('title', 'Clientes')
@section('css')
  <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')
<div class="w-full lg:w-12/12 bg-white p-3 rounded-lg lg:rounded-l-none">

  <div class="font-medium pt-0 text-center text-xl sm:text-3lg text-blue-800">
    Listado de clientes
  </div>
  <div class="mt-4 pt-0 text-center  text-lg sm:text-sm text-blue-500">
    Cada día somos más 👀
  </div>

</div> 

@if (session('info'))
<div class="alert alert-success">
  <strong>{{session('info')}}</strong>
</div>
@endif



<div class="card-body">
  <td> 
  <a class="bg-yellow-300 text-white active:bg-yellow-400 font-bold uppercase text-xs 
  px-4 py-2 rounded shadow hover:shadow-md 
  outline-none focus:outline-none mr-0.0001 ease-linear transition-all duration-150" 
  href="{{ route('usuario.clientesU.create') }}" 
  class="hover:text-blue-900">Agrear nuevo cliente</a>
  </td>
  
<div class="flex flex-col">
<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
<div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-8"> 
<div class="shadow overflow-hidden border-b border-blue-200 sm:rounded-lg">
  
  <table class="min-w-full divide-y divide-blue-200">
  <thead class="bg-blue-50">
  <tr>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
  Nombre / apellido
  </th>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
  DNI / Celular
  </th>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
  Direccion
  </th>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
  Referencia
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
  <svg class="h-10 w-10 rounded-full" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
  width="48" height="48"
  viewBox="0 0 171 171"
  style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,171.98863v-171.98863h171.98863v171.98863z" fill="none"></path><g><path d="M117.5625,49.875c0,17.8125 -14.25,32.0625 -32.0625,32.0625c-17.8125,0 -32.0625,-14.25 -32.0625,-32.0625c0,-17.8125 14.25,-32.0625 32.0625,-32.0625c17.8125,0 32.0625,14.25 32.0625,32.0625" fill="#f1c40f"></path>
  <path d="M149.625,128.60625c0,0 -17.8125,-35.98125 -64.125,-35.98125c-46.3125,0 -64.125,35.98125 -64.125,35.98125v21.01875h128.25z" fill="#2563eb"></path></g></g></svg>  
  </div>

  <div class="ml-4">
  <div class="text-sm font-medium text-blue-900">
  {{$cliente->nombre}}
  </div>

  <div class="text-sm text-blue-500">
  {{$cliente->apellido}}
  </div>

  </div>
  </div>
  </td>

  <td class="px-6 py-4 whitespace-nowrap">
  <div class="text-sm text-blue-900">{{$cliente->DNI}}</div>
  <div class="text-sm text-blue-500">{{$cliente->celular}}</div>
  </td>

  <td class="px-6 py-4 whitespace-nowrap">
  <div class="text-sm text-blue-900">{{$cliente->direccion}}</div>
  </td>

  <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500">
  {{$cliente->referencia}}
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
@stop

@section('content')


