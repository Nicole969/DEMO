<div>
   
  <div class="flex flex-wrap">
    <div class="rounded-t  mb-0 px-4 py-3">
    <div class="text-center flex justify-between"> 
      <a class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 
      py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 ease-linear 
      transition-all duration-150" href="{{ route('admin.compras.create') }}" 
      class=" hover:text-indigo-900">Agrear nueva compra</a>
    </div>
    </div> 
    <div class="rounded-t  mb-0 px-3 py-3">
    <div class="text-center flex justify-between"> 
    <a class="bg-red-500 text-white active:bg-red-600 font-bold uppercase 
    text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-0.0001 
    ease-linear transition-all duration-150" href="{{ route('copdf') }}" 
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
  
  @if($compras->count())
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-blue-200 sm:rounded-lg">
          
          <table class="min-w-full divide-y divide-blue-200">
          <thead class="bg-blue-50">
          <tr>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
          Proveedor // Celular
          </th>
        
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
          Correo
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
          Comprobante
          </th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
          Fecha y hora
          </th>
        
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
          <span class="sr-only">Edit</span>
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
          @foreach ($compras as $compra)
          <tr>
          <td class="px-6 py-4 whitespace-nowrap">
          <div class="flex items-center">
          <div class="flex-shrink-0 h-10 w-10">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="48" height="48"
            viewBox="0 0 48 48"
            style=" fill:#000000;"><path fill="#50e6ff" d="M41,7H9C7.895,7,7,7.895,7,9v30c0,1.105,0.895,2,2,2h32c1.105,0,2-0.895,2-2V9	C43,7.895,42.105,7,41,7z"></path><circle cx="10" cy="16" r="1" fill="#057093"></circle><circle cx="10" cy="20" r="1" fill="#057093"></circle><circle cx="10" cy="24" r="1" fill="#057093"></circle><circle cx="10" cy="28" r="1" fill="#057093"></circle><circle cx="10" cy="32" r="1" fill="#057093"></circle><path fill="#50e6ff" d="M11,7H6C5.448,7,5,7.448,5,8v1c0.552,0,1,0.448,1,1s-0.448,1-1,1v2c0.552,0,1,0.448,1,1 s-0.448,1-1,1v2c0.552,0,1,0.448,1,1s-0.448,1-1,1v2c0.552,0,1,0.448,1,1s-0.448,1-1,1v2c0.552,0,1,0.448,1,1s-0.448,1-1,1v1 c0,0.552,0.448,1,1,1h5V7z"></path><path fill="#50e6ff" d="M11,19H6c-0.552,0-1,0.448-1,1v1c0.552,0,1,0.448,1,1s-0.448,1-1,1v2c0.552,0,1,0.448,1,1 s-0.448,1-1,1v2c0.552,0,1,0.448,1,1s-0.448,1-1,1v2c0.552,0,1,0.448,1,1s-0.448,1-1,1v2c0.552,0,1,0.448,1,1s-0.448,1-1,1v1 c0,0.552,0.448,1,1,1h5V19z"></path><path d="M11.5,24c-0.827,0-1.5-0.673-1.5-1.5v-3c0-0.827,0.673-1.5,1.5-1.5h3c0.827,0,1.5,0.673,1.5,1.5v3	c0,0.827-0.673,1.5-1.5,1.5H11.5z" opacity=".05"></path><path d="M11.5,23.5c-0.551,0-1-0.448-1-1v-3c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v3	c0,0.552-0.449,1-1,1H11.5z" opacity=".07"></path><path fill="#fff" d="M14.5,23h-3c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v3	C15,22.776,14.776,23,14.5,23z"></path><path d="M17.5,24c-0.827,0-1.5-0.673-1.5-1.5v-3c0-0.827,0.673-1.5,1.5-1.5h3c0.827,0,1.5,0.673,1.5,1.5v3	c0,0.827-0.673,1.5-1.5,1.5H17.5z" opacity=".05"></path><path d="M17.5,23.5c-0.551,0-1-0.448-1-1v-3c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v3	c0,0.552-0.449,1-1,1H17.5z" opacity=".07"></path><path fill="#fff" d="M20.5,23h-3c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v3	C21,22.776,20.776,23,20.5,23z"></path><path d="M23.5,24c-0.827,0-1.5-0.673-1.5-1.5v-3c0-0.827,0.673-1.5,1.5-1.5h3c0.827,0,1.5,0.673,1.5,1.5v3	c0,0.827-0.673,1.5-1.5,1.5H23.5z" opacity=".05"></path><path d="M23.5,23.5c-0.551,0-1-0.448-1-1v-3c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v3	c0,0.552-0.449,1-1,1H23.5z" opacity=".07"></path><path fill="#fff" d="M26.5,23h-3c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v3	C27,22.776,26.776,23,26.5,23z"></path><path d="M29.5,24c-0.827,0-1.5-0.673-1.5-1.5v-3c0-0.827,0.673-1.5,1.5-1.5h3c0.827,0,1.5,0.673,1.5,1.5v3	c0,0.827-0.673,1.5-1.5,1.5H29.5z" opacity=".05"></path><path d="M29.5,23.5c-0.551,0-1-0.448-1-1v-3c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v3	c0,0.552-0.449,1-1,1H29.5z" opacity=".07"></path><path fill="#fff" d="M32.5,23h-3c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v3	C33,22.776,32.776,23,32.5,23z"></path><path d="M35.5,24c-0.827,0-1.5-0.673-1.5-1.5v-3c0-0.827,0.673-1.5,1.5-1.5h3c0.827,0,1.5,0.673,1.5,1.5v3	c0,0.827-0.673,1.5-1.5,1.5H35.5z" opacity=".05"></path><path d="M35.5,23.5c-0.551,0-1-0.448-1-1v-3c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v3	c0,0.552-0.449,1-1,1H35.5z" opacity=".07"></path><path fill="#fff" d="M38.5,23h-3c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v3	C39,22.776,38.776,23,38.5,23z"></path><path d="M11.5,30c-0.827,0-1.5-0.673-1.5-1.5v-3c0-0.827,0.673-1.5,1.5-1.5h3c0.827,0,1.5,0.673,1.5,1.5v3	c0,0.827-0.673,1.5-1.5,1.5H11.5z" opacity=".05"></path><path d="M11.5,29.5c-0.551,0-1-0.448-1-1v-3c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v3	c0,0.552-0.449,1-1,1H11.5z" opacity=".07"></path><path fill="#fff" d="M14.5,29h-3c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v3	C15,28.776,14.776,29,14.5,29z"></path><path d="M17.5,30c-0.827,0-1.5-0.673-1.5-1.5v-3c0-0.827,0.673-1.5,1.5-1.5h3c0.827,0,1.5,0.673,1.5,1.5v3	c0,0.827-0.673,1.5-1.5,1.5H17.5z" opacity=".05"></path><path d="M17.5,29.5c-0.551,0-1-0.448-1-1v-3c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v3	c0,0.552-0.449,1-1,1H17.5z" opacity=".07"></path><path fill="#fff" d="M20.5,29h-3c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v3	C21,28.776,20.776,29,20.5,29z"></path><path d="M23.5,30c-0.827,0-1.5-0.673-1.5-1.5v-3c0-0.827,0.673-1.5,1.5-1.5h3c0.827,0,1.5,0.673,1.5,1.5v3	c0,0.827-0.673,1.5-1.5,1.5H23.5z" opacity=".05"></path><path d="M23.5,29.5c-0.551,0-1-0.448-1-1v-3c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v3	c0,0.552-0.449,1-1,1H23.5z" opacity=".07"></path><path fill="#fff" d="M26.5,29h-3c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v3	C27,28.776,26.776,29,26.5,29z"></path><path d="M29.5,30c-0.827,0-1.5-0.673-1.5-1.5v-3c0-0.827,0.673-1.5,1.5-1.5h3c0.827,0,1.5,0.673,1.5,1.5v3	c0,0.827-0.673,1.5-1.5,1.5H29.5z" opacity=".05"></path><path d="M29.5,29.5c-0.551,0-1-0.448-1-1v-3c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v3	c0,0.552-0.449,1-1,1H29.5z" opacity=".07"></path><path fill="#fff" d="M32.5,29h-3c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v3	C33,28.776,32.776,29,32.5,29z"></path><path d="M35.5,30c-0.827,0-1.5-0.673-1.5-1.5v-3c0-0.827,0.673-1.5,1.5-1.5h3c0.827,0,1.5,0.673,1.5,1.5v3	c0,0.827-0.673,1.5-1.5,1.5H35.5z" opacity=".05"></path><path d="M35.5,29.5c-0.551,0-1-0.448-1-1v-3c0-0.552,0.449-1,1-1h3c0.551,0,1,0.448,1,1v3	c0,0.552-0.449,1-1,1H35.5z" opacity=".07"></path><path fill="#fff" d="M38.5,29h-3c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5h3c0.276,0,0.5,0.224,0.5,0.5v3	C39,28.776,38.776,29,38.5,29z"></path><path fill="#057093" d="M34.171,15H13.829C13.371,15,13,14.629,13,14.171v-1.342C13,12.371,13.371,12,13.829,12h20.342	C34.629,12,35,12.371,35,12.829v1.342C35,14.629,34.629,15,34.171,15z"></path><path fill="#057093" d="M38.5,36h-11c-0.276,0-0.5-0.224-0.5-0.5v-1c0-0.276,0.224-0.5,0.5-0.5h11c0.276,0,0.5,0.224,0.5,0.5	v1C39,35.776,38.776,36,38.5,36z"></path></svg>
          </div>
        
          <div class="ml-4">
          <div class="text-sm font-medium text-blue-900">
          {{$compra->proveedor}}
          </div>
        
          <div class="text-sm text-blue-500">
          {{$compra->celular}}
          </div>
        
          </div>
          </div>
          </td>
        
          <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm text-blue-900">{{$compra->correo}}</div>
          </td>
        
          <td class="px-6 py-4 whitespace-nowrap">
          <div class="text-sm text-blue-900">{{$compra->comprobante}}</div>
          </td>
        
          <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500">
          {{$compra->fecha_hora}}
          </td>
        
          <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">
          <a href="{{ route('admin.compras.edit', $compra) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
          </td>
          <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">
          <a href="{{ route('admin.detallecompras.index') }}" class="text-blue-600 hover:text-blue-900">Detalle</a>
          </td>
          <td class="px-5 py-4 whitespace-nowrap text-right text-sm font-medium">
            <form action="{{ route('admin.compras.destroy', $compra) }}" 
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
        
          <!--More people... -->
          </table>
        
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
