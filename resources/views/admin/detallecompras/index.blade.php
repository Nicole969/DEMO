@extends('adminlte::page')
@extends('layouts.model')
@section('title', 'Clientes')
@section('css')
  <!-- link rel="stylesheet" href="/css/admin_custom.css"-->
@stop

@section('content_header')
<div class="w-full lg:w-12/12 bg-white p-3 rounded-lg lg:rounded-l-none"> 
  <div class="font-medium pt-0 text-center text-xl sm:text-3lg text-blue-800">
      Listado de los Detalles de Compra
  </div>
  <div class="mt-4 pt-0 text-center  text-lg sm:text-sm text-blue-700">
      Todas los detalles👏😄
  </div>
  </div>

@stop

@section('content')
<div class="card">

  <div class="flex flex-wrap">
  <div class="rounded-t  mb-0 px-4 py-3">
  <div class="text-center flex justify-between"> 
  <a class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 
      py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear 
      transition-all duration-150" href="{{ route('admin.compras.index') }}" 
      class=" hover:text-indigo-900">Volver</a>
  </div>
  </div> 
  <div class="rounded-t  mb-0 px-4 py-3">
  <div class="text-center flex justify-between"> 
  <a class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 
  py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear 
  transition-all duration-150" href="{{ route('admin.detallecompras.create') }}" class="text-indigo-600 hover:text-indigo-900">Agrear nueva detallecompras</a>
  </div>
  </div>
  </div>
  
<div class="card-body">
<div class="flex flex-col">
<div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
<div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-8">
<div class="shadow overflow-hidden border-b border-blue-200 sm:rounded-lg">
  
  <table class="min-w-full divide-y divide-blue-200">
  <thead class="bg-blue-50">
  <tr>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
  Cantidad
  </th>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
  Precio
  </th>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
  Descripcion
  </th>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
  Fecha de Creacion
  </th>

  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
  <span class="sr-only">Edit</span>
  </th>
  <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
    <span class="sr-only">Edit</span>
    </th>

  </tr>
  </thead>
<!-- More people... -->
<tbody class="bg-white divide-y divide-blue-200">
  @foreach ($detallecompras as $detallecompra)
  <tr>
  <td class="px-6 py-4 whitespace-nowrap">
  <div class="flex items-center">
  <div class="flex-shrink-0 h-10 w-10">
    <svg class="h-10 w-10 squra-full" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
    width="60" height="60"
    viewBox="0 0 171 171"
    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" 
    stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" 
    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
    <path d="M0,171.98863v-171.98863h171.98863v171.98863z" fill="none"></path><g>
    <path d="M134.26241,35.98378v123.61643c0,4.72022 -3.82962,8.54984 -8.54984,8.54984h-107.58548c-4.72379,0 -8.54984,-3.82962 -8.54984,-8.54984v-148.19722c0,-4.72022 3.82605,-8.54984 8.54984,-8.54984h83.00469z" fill="#3498db"></path><path d="M121.4779,23.19928c0.62271,0.62271 0.42179,1.67434 -0.38581,2.0256c-53.00901,23.06675 -88.39145,72.22691 -91.9261,132.51931c-0.762,12.99932 -19.58911,11.76066 -19.58911,-0.61488v-144.47911c0,-5.41098 4.38642,-9.79705 9.79705,-9.79705c86.96754,0 81.57936,-0.17812 82.12264,0.36515z" fill="#d6f4fc"></path><path d="M43.44886,56.3039h-5.73908c-4.71417,0 -8.54984,-3.83532 -8.54984,-8.54984v-5.72839c0,-4.71452 3.83567,-8.54984 8.54984,-8.54984h5.75012c4.73198,0 8.55981,3.83282 8.54984,8.56694l-0.01069,5.72732c-0.01104,4.70597 -3.84636,8.53381 -8.5502,8.53381z" fill="#ffffff"></path><path d="M43.42036,99.03885h-5.69989c-4.71417,0 -8.54984,-3.83532 -8.54984,-8.54984v-5.69989c0,-4.71452 3.83567,-8.54984 8.54984,-8.54984h5.69989c4.71417,0 8.54984,3.83532 8.54984,8.54984v5.69989c0,4.71452 -3.83567,8.54984 -8.54984,8.54984z" fill="#ffffff"></path><path d="M43.42036,141.78805h-5.69989c-4.71417,0 -8.54984,-3.83532 -8.54984,-8.54984v-5.69989c0,-4.71452 3.83567,-8.54984 8.54984,-8.54984h5.69989c4.71417,0 8.54984,3.83532 8.54984,8.54984v5.69989c0,4.71452 -3.83567,8.54984 -8.54984,8.54984z" fill="#ffffff"></path><path d="M134.26241,35.98378h-24.58079c-4.72379,0 -8.54984,-3.82962 -8.54984,-8.54984v-24.58079z" fill="#f1fafc"></path><path d="M147.88871,80.31826c4.36042,0 8.02616,3.28456 8.4964,7.62361l4.98741,45.79508c0.55218,5.05866 -3.41281,9.47607 -8.49997,9.47607c-1.68966,0 -58.93369,0 -58.43815,0c-4.41599,0 -7.84947,-3.83852 -7.37246,-8.21889l5.12456,-47.05333c0.47167,-4.33228 4.1285,-7.62254 8.48643,-7.62254c14.07553,0 43.01282,0 47.21578,0z" fill="#ffaa64"></path><path d="M152.87256,143.21302h-58.50584c-4.31838,0 -7.80137,-3.7288 -7.30299,-8.21141l5.12634,-47.06687c0.47024,-4.33548 4.12886,-7.61648 8.48928,-7.61648h47.20936c4.14311,0 7.65211,2.96394 8.39666,6.97524c0.09512,0.51762 -0.25115,-2.545 5.08359,46.447c0.55182,5.05759 -3.41495,9.47251 -8.4964,9.47251z" fill="#ffaa64"></path><path d="M148.89332,95.02755c-23.41231,0 -43.06982,17.62336 -45.61696,40.89673c-0.45243,4.13955 -3.92936,7.28874 -8.09741,7.28874c-0.79229,0 -2.68144,0.09832 -4.58841,-1.06873c-2.51864,-1.53968 -3.82962,-4.34189 -3.52681,-7.14268l5.12634,-47.06687c0.47024,-4.33548 4.12886,-7.61648 8.48928,-7.61648h47.20936c3.07402,0 5.79893,1.63159 7.30477,4.11212c3.02593,4.98527 -0.91448,10.59717 -6.30016,10.59717z" fill="#ffbd7b"></path><path d="M164.20537,133.42915l-4.98563,-45.79579c-0.63091,-5.79537 -5.50325,-10.16576 -11.33317,-10.16576h-3.6319v-8.33467c0,-11.01077 -8.95809,-19.96851 -19.96851,-19.96851c-11.01077,0 -19.96886,8.95809 -19.96886,19.96851v8.33431h-3.6319c-5.82957,0 -10.70191,4.37039 -11.33317,10.16612l-4.98563,45.79579c-0.73386,6.74155 4.55564,12.63346 11.33317,12.63346h57.17278c6.77005,0.00036 12.06774,-5.88336 11.33281,-12.63346zM152.87291,140.36307h-57.17278c-3.39999,0 -6.03441,-2.94186 -5.66641,-6.31691l4.98563,-45.79544c0.31563,-2.89768 2.75162,-5.08324 5.66641,-5.08324h3.6319v7.19291c0,1.57388 1.27606,2.84995 2.84995,2.84995c1.57388,0 2.84995,-1.27606 2.84995,-2.84995v-21.22711c0,-7.86763 6.40098,-14.26861 14.26897,-14.26861c7.86763,0 14.26861,6.40098 14.26861,14.26861v8.33431h-18.03909c-1.57388,0 -2.84995,1.27606 -2.84995,2.84995c0,1.57388 1.27606,2.84995 2.84995,2.84995h18.03909v7.19291c0,1.57388 1.27606,2.84995 2.84995,2.84995c1.57388,0 2.84995,-1.27606 2.84995,-2.84995v-7.19291h3.6319c2.91514,0 5.35113,2.1852 5.66641,5.08288l4.98563,45.79544c0.36836,3.38004 -2.27069,6.31726 -5.66605,6.31726zM134.26134,156.75027c-1.57388,0 -2.84995,1.27606 -2.84995,2.84995c0,3.14278 -2.55711,5.69989 -5.69989,5.69989h-107.58548c-3.14278,0 -5.69989,-2.55711 -5.69989,-5.69989v-148.19722c0,-3.14278 2.55711,-5.69989 5.69989,-5.69989h80.15475v21.73084c0,6.28591 5.11387,11.39979 11.39979,11.39979h24.58079c2.5336,0 3.80575,-3.07474 2.01527,-4.86522c-35.67848,-35.67848 -33.36896,-33.6682 -34.58838,-33.91009c-0.39365,-0.07802 4.14525,-0.05522 -83.56221,-0.05522c-6.28591,0 -11.39979,5.11387 -11.39979,11.39979v148.19722c0,6.28591 5.11387,11.39979 11.39979,11.39979h107.58548c6.28591,0 11.39979,-5.11387 11.39979,-11.39979c0,-1.57424 -1.27606,-2.84995 -2.84995,-2.84995zM109.68055,33.13383c-3.14278,0 -5.69989,-2.55711 -5.69989,-5.69989v-17.70066l23.40055,23.40055zM52.0101,42.04134c0.00926,-4.73234 -3.81715,-8.56658 -8.54984,-8.56658h-5.7519c-4.71417,0 -8.54984,3.83532 -8.54984,8.54984v5.73017c0,4.71452 3.83567,8.54984 8.54984,8.54984h5.74086c4.70562,0 8.54129,-3.82819 8.54984,-8.53345zM46.29916,47.76047c-0.00285,1.56854 -1.28141,2.84425 -2.84995,2.84425h-5.74086c-1.57139,0 -2.84995,-1.27856 -2.84995,-2.84995v-5.73017c0,-1.57139 1.27856,-2.84995 2.84995,-2.84995h5.7519c1.5778,0 2.8528,1.27784 2.84995,2.85529zM51.96913,84.78912c0,-4.71452 -3.83567,-8.54984 -8.54984,-8.54984h-5.69989c-4.71417,0 -8.54984,3.83532 -8.54984,8.54984v5.69989c0,4.71452 3.83567,8.54984 8.54984,8.54984h5.69989c4.71417,0 8.54984,-3.83532 8.54984,-8.54984zM46.26924,90.48901c0,1.57139 -1.27856,2.84995 -2.84995,2.84995h-5.69989c-1.57139,0 -2.84995,-1.27856 -2.84995,-2.84995v-5.69989c0,-1.57139 1.27856,-2.84995 2.84995,-2.84995h5.69989c1.57139,0 2.84995,1.27856 2.84995,2.84995zM43.41929,118.98848h-5.69989c-4.71417,0 -8.54984,3.83532 -8.54984,8.54984v5.69989c0,4.71452 3.83567,8.54984 8.54984,8.54984h5.69989c4.71417,0 8.54984,-3.83532 8.54984,-8.54984v-5.69989c0,-4.71452 -3.83567,-8.54984 -8.54984,-8.54984zM46.26924,133.23821c0,1.57139 -1.27856,2.84995 -2.84995,2.84995h-5.69989c-1.57139,0 -2.84995,-1.27856 -2.84995,-2.84995v-5.69989c0,-1.57139 1.27856,-2.84995 2.84995,-2.84995h5.69989c1.57139,0 2.84995,1.27856 2.84995,2.84995zM85.49982,47.73981h-19.59338c-1.57388,0 -2.84995,-1.27606 -2.84995,-2.84995c0,-1.57388 1.27606,-2.84995 2.84995,-2.84995h19.59338c1.57388,0 2.84995,1.27606 2.84995,2.84995c0,1.57388 -1.27606,2.84995 -2.84995,2.84995zM77.30623,90.48901h-11.39979c-1.57388,0 -2.84995,-1.27606 -2.84995,-2.84995c0,-1.57388 1.27606,-2.84995 2.84995,-2.84995h11.39979c1.57388,0 2.84995,1.27606 2.84995,2.84995c0,1.57388 -1.27606,2.84995 -2.84995,2.84995zM73.03131,127.53831c1.57388,0 2.84995,1.27606 2.84995,2.84995c0,1.57388 -1.27606,2.84995 -2.84995,2.84995h-7.12487c-1.57388,0 -2.84995,-1.27606 -2.84995,-2.84995c0,-1.57388 1.27606,-2.84995 2.84995,-2.84995z" fill="#000000"></path></g></g></svg>
  </div>

  <div class="ml-4">
  <div class="text-sm font-medium text-blue-900">
  {{$detallecompra->cantidad}}
  </div>
  </div>
  </td>

  <td class="px-6 py-4 whitespace-nowrap">
  <div class="text-sm text-blue-500">
      {{$detallecompra->precio}}
  </div>
  </td>
  
  <td class="px-6 py-4 whitespace-nowrap">
  <div class="text-sm text-blue-900">
  {{$detallecompra->descripcion}}
  </div> 
  </td>

  <td class="px-6 py-4 whitespace-nowrap">
  <div class="text-sm text-blue-900">
  {{$detallecompra->created_at}}</div>
  </td>



  <td class="px-0 py-4 whitespace-nowrap text-right text-sm font-medium">
  <a href="{{ route('admin.detallecompras.edit', $detallecompra) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
  </td>

  <td class="px-5 py-4 whitespace-nowrap text-right text-sm font-medium">
    <form action="{{ route('admin.detallecompras.destroy', $detallecompra) }}" 
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
</div>
@stop


