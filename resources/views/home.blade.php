@extends('adminlte::page')

@section('title', 'Multiservicios Garay')

@section('content_header')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
@stop

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif


        <section class="flex flex-col break-words bg-white sm:border-0 sm:rounded-md">

            <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
              <div class="w-full lg:w-12/12 bg-white p-3 rounded-lg lg:rounded-l-none"> 
                <div class="font-medium pt-0 text-center text-xl sm:text-3lg text-blue-800">
                    Multiservicios GARAY
                </div>
                <div class="mt-4 pt-0 text-center  text-lg sm:text-sm text-blue-700">
                    Es un maravilloso día para seguir creciendo 👏😄
                </div>
                </div>
            </div>

            <div class="flex flex-wrap -m-4 text-center">
                <div class="max-w-7xl w-full mx-auto py-6 sm:px-6 lg:px-8">
                    <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
            
                        <div class="w-full lg:w-1/5">
                            <div class="widget w-full p-4 rounded-lg bg-white border-4 border-purple-400">
                                <div class="flex items-center">
                                    <div class="icon w-14 p-3.5 bg-purple-400 text-white rounded-full mr-3">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <div class="text-lg">{{$clientes}}</div>
                                        <div class="text-sm text-gray-400">Clientes</div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="w-full lg:w-1/5">
                            <div class="widget w-full p-4 rounded-lg bg-white border-4 border-blue-400">
                                <div class="flex items-center">
                                    <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <div class="text-lg">{{$empleados}}</div>
                                        <div class="text-sm text-gray-400">Personal</div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="w-full lg:w-1/5">
                            <div class="widget w-full p-4 rounded-lg bg-white border-4 border-yellow-400">
                                <div class="flex items-center">
                                    <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <div class="text-lg">{{$articulos}}</div>
                                        <div class="text-sm text-gray-400">Articulos</div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="w-full lg:w-1/5">
                            <div class="widget w-full p-4 rounded-lg bg-white border-4 border-red-400">
                                <div class="flex items-center">
                                    <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <div class="text-lg">{{$compras}}</div>
                                        <div class="text-sm text-gray-400">Compras</div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="w-full lg:w-1/5">
                            <div class="widget w-full p-4 rounded-lg bg-white border-4 border-green-400">
                                <div class="flex items-center">
                                    <div class="icon w-14 p-3.5 bg-green-400 text-white rounded-full mr-3">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div class="flex flex-col justify-center">
                                        <div class="text-lg">{{$ventas}}</div>
                                        <div class="text-sm text-gray-400">Ventas</div>
                                    </div>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>

      </div>
      </section>



<!--CITAS--->

<div class="w-10/12 md:w-7/12 lg:6/12 mx-auto relative ">
  <h1 class="text-3xl text-center font-bold text-red-500">TODAS NUESTRAS CITAS</h1>
  <div class="border-l-2 mt-10">
    
    <?php $t = date ( 'Y-m-d 00:00:00' );?>
    
    @if($fecha >= $t)
    @foreach ($citas as $cita)
    <!-- Card 1 -->
    <div class="transform transition cursor-pointer hover:-translate-y-2 ml-10 relative flex items-center px-8 py-3 bg-blue-900 text-white rounded mb-5 flex-col md:flex-row space-y-2 md:space-y-0">
    <!-- Dot Follwing the Left Vertical Line -->
    <div class="w-5 h-5 bg-red-500 absolute -left-10 transform -translate-x-2/4 rounded-full z-10 mt-2 md:mt-0"></div>

    <!-- Line that connecting the box with the vertical line -->
    <div class="w-10 h-1 bg-yellow-300 absolute -left-10 z-0"></div>

    <!-- Content that showing in the box -->
    <div class="flex-auto">
    <h1 class="text-lg">{{$cita->codigo}}</h1>
    <h1 class="text-lg font-bold"> {{$cita->descripcion}}</h1>
    <h3>{{$cita->fecha_hora}}</h3>
    </div>
    <a href="#" class="text-center text-white hover:text-gray-300">{{$cita->direccion}}</a>
    </div>
    @endforeach
    @endif
  </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style=""></div>


@stop


