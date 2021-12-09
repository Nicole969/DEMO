<div>
  <div class="flex flex-wrap">
    <div class="rounded-t  mb-0 px-4 py-3">
    <div class="text-center flex justify-between"> 
    <a class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 
    py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear 
    transition-all duration-150" href="{{ route('admin.citas.create') }}" 
    class=" hover:text-indigo-900">Agrear nueva cita</a>
    </div>
    </div> 
    <div class="rounded-t  mb-0 px-3 py-3">
    <div class="text-center flex justify-between"> 
    <a class="bg-yellow-400 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 
    py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear 
    transition-all duration-150" href="{{ route('cpdf') }}" 
    class=" hover:text-indigo-900">PDF</a>
    </div>
    </div>
  </div> 
<div class="card-body">    
<div class="flex flex-col">
    <div class=" bg-white rounded flex items-center w-full p-3 shadow-sm border border-blue-200">
    <button class="outline-none focus:outline-none"><svg class=" w-5 text-blue-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
    <input wire:model="search" type="search" placeholder="Realiza tu busqueda" x-model="q" class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">        
    </div>
        
    @if($citas->count())
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden border-b border-blue-200 sm:rounded-lg">
      
      <table class="min-w-full divide-y divide-blue-200">
      <thead class="bg-blue-50">
      <tr>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
      Codigo
      </th>
    
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
      Fecha y hora
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
      Direccion
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
    @foreach ($citas as $cita)
    <tr>
    <td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
      <div class="flex-shrink-0 h-10 w-10">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="48" height="48"
        viewBox="0 0 171 171"
        style=" fill:#000000;"><defs>
        <linearGradient x1="85.5" y1="153.51881" x2="85.5" 
        y2="138.78075" gradientUnits="userSpaceOnUse" id="color-1_pXOksSoyv6At_gr1">
        <stop offset="0" stop-color="#f1c40f"></stop><stop offset="1" stop-color="#34495e"></stop>
       </linearGradient></defs><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,171.98863v-171.98863h171.98863v171.98863z" fill="none"></path><g><path d="M96.1875,24.9375h-21.375v-7.125c0,-5.90306 4.78444,-10.6875 10.6875,-10.6875v0c5.90306,0 10.6875,4.78444 10.6875,10.6875z" fill="#f1c40f"></path><path d="M138.9375,74.8125c0,-29.51175 -23.92575,-53.4375 -53.4375,-53.4375c-29.51175,0 -53.4375,23.92575 -53.4375,53.4375c0,1.38938 0,46.3125 0,46.3125h106.875c0,0 0,-44.92312 0,-46.3125z" fill="#f1c40f"></path><path d="M138.9375,121.125h-106.875l-13.80469,5.52187c-2.4225,0.969 -4.00781,3.31312 -4.00781,5.91731v0c0,3.51975 2.85356,6.37331 6.37331,6.37331h129.75338c3.51975,0 6.37331,-2.85356 6.37331,-6.37331v0c0,-2.60419 -1.58531,-4.94831 -4.00781,-5.91731z" fill="#f1c40f"></path><path d="M99.75,138.9375c0,7.86956 -6.38044,14.25 -14.25,14.25c-7.86956,0 -14.25,-6.38044 -14.25,-14.25z" fill="url(#color-1_pXOksSoyv6At_gr1)"></path></g></g></svg>  
      </div>
    
    <div class="ml-4">
    <div class="text-sm font-medium text-blue-900">
    {{$cita->codigo}}
    </div>
    
    <div class="text-sm text-blue-500">
    {{$cita->descripcion}}
    </div>
    
    </div>
    </div>
    </td>
    
    <td class="px-6 py-4 whitespace-nowrap">
    <div class="text-sm text-blue-900">{{$cita->fecha_hora}}</div>
    </td>
    
    <td class="px-6 py-4 whitespace-nowrap">
    <div class="text-sm text-blue-900">{{$cita->direccion}}</div>
    </td>
     
    
    <td class="px-0 py-4 whitespace-nowrap text-right text-sm font-medium">
    <a href="{{ route('admin.citas.edit', $cita) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
    </td>
    
    <td class="px-5 py-4 whitespace-nowrap text-right text-sm font-medium">
      <form action="{{ route('admin.citas.destroy', $cita) }}" 
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
    @else
  
    <div class="card-body">
    <strong>No existe ese registro</strong>
    </div>
    @endif
</div>
</div>
</div>