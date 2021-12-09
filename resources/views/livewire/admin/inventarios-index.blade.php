<div>
   
  <div class="flex flex-wrap">
    <div class="rounded-t  mb-0 px-4 py-3">
    <div class="text-center flex justify-between"> 
    <a class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 
    py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear 
    transition-all duration-150" href="{{ route('admin.inventarios.create') }}" 
    class=" hover:text-indigo-900">Agrear nueva Inventario</a>
    </div>
    </div> 
    <div class="rounded-t  mb-0 px-3 py-3">
    <div class="text-center flex justify-between"> 
    <a class="bg-red-500 text-white active:bg-red-600 font-bold uppercase 
    text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 
    ease-linear transition-all duration-150" href="{{ route('ipdf') }}" 
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
  
  @if($inventarios->count())
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-blue-200 sm:rounded-lg">
          
          <table class="min-w-full divide-y divide-blue-200">
          <thead class="bg-blue-50">
          <tr>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
          Codigo / Articulo
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
          Categoria
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
          Stock
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
          Descripcion
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
          @foreach ($inventarios as $inventario)
          <tr>
          <td class="px-6 py-4 whitespace-nowrap">
          <div class="flex items-center">
          <div class="flex-shrink-0 h-10 w-10">
            <img src="https://img.icons8.com/fluency/48/000000/handcart.png"/>
          </div>
        
          <div class="ml-4">
          <div class="text-sm font-medium text-blue-900">
          {{$inventario->codigo}}
          </div>
        
          <div class="text-sm text-blue-500">
          {{$inventario->nombre}}
          </div>
        
          </div>
          </div>
          </td>
        
          <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm text-blue-900">{{$inventario->categoria}}</div>
          </td>
        
          <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm text-blue-900">{{$inventario->stock}}</div>
          </td>
        
          <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500">
          {{$inventario->descripcion}}
          </td>
        
          <td class="px-0 py-4 whitespace-nowrap text-right text-sm font-medium">
          <a href="{{ route('admin.inventarios.edit', $inventario) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
          </td>
        
          <td class="px-5 py-4 whitespace-nowrap text-right text-sm font-medium">
            <form action="{{ route('admin.inventarios.destroy', $inventario) }}" 
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
          <!-- More people... -->
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
