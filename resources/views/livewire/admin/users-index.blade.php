<div>

<div class="card-body">

  <div class="flex flex-col">

  <div class=" bg-white rounded flex items-center w-full p-3 shadow-sm border border-blue-200">
  <button class="outline-none focus:outline-none"><svg class=" w-5 text-blue-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
  <input wire:model="search" type="search" placeholder="Realiza tu busqueda" x-model="q" class="w-full pl-4 text-sm outline-none focus:outline-none bg-transparent">
  </div>
  
@if($users->count())
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
  <div class="py-4 align-middle inline-block min-w-full sm:px-6 lg:px-8">
  <div class="shadow overflow-hidden border-b border-blue-200 sm:rounded-lg">
    
    <table class="min-w-full divide-y divide-blue-200">
    <thead class="bg-blue-50">
    <tr>
    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
    Nombre / Correo
    </th>
    
    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
    Tipo de Usuario
    </th>
    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider">
    Estado
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
    @foreach ($users as $user)
    <tr>
    <td class="px-6 py-4 whitespace-nowrap">
    <div class="flex items-center">
    <div class="flex-shrink-0 h-10 w-10">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
      width="48" height="48"
      viewBox="0 0 171 171"
      style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none"
       stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" 
       stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" 
       font-size="none" text-anchor="none" style="mix-blend-mode: normal">
       <path d="M0,171.98863v-171.98863h171.98863v171.98863z" fill="none"></path><g><path d="M160.3125,128.25c0,0 -10.84781,-24.9375 -39.1875,-24.9375c-28.34325,0 -39.1875,24.9375 -39.1875,24.9375v10.6875h78.375z" fill="#f1c40f"></path><path d="M85.5,57c0,13.77619 -11.16487,24.9375 -24.9375,24.9375c-13.77619,0 -24.9375,-11.16131 -24.9375,-24.9375c0,-13.77619 11.16131,-24.9375 24.9375,-24.9375c13.77263,0 24.9375,11.16131 24.9375,24.9375M110.4375,124.6875c0,0 -13.80469,-32.0625 -49.875,-32.0625c-36.07387,0 -49.875,32.0625 -49.875,32.0625v14.25h99.75z" fill="#e74c3c"></path><path d="M121.125,92.625c11.80613,0 21.375,-9.56888 21.375,-21.375c0,-11.80613 -9.56887,-21.375 -21.375,-21.375c-11.80612,0 -21.375,9.56887 -21.375,21.375c0,11.80612 9.56888,21.375 21.375,21.375" fill="#f1c40f"></path></g></g></svg>
    </div>
  
    <div class="ml-4">
    <div class="text-sm font-medium text-blue-900">
    {{$user->name}}
    </div>
  
    <div class="text-sm text-blue-500">
    {{$user->email}}
    </div>
    </div>
    </div>
    </td>
  
    <td class="px-6 py-4 whitespace-nowrap">
    <div class="text-sm text-blue-900">{{$user->tipo_usu}}</div>
    </td>
  
    <td class="px-6 py-4 whitespace-nowrap">
    <div class="text-sm text-blue-900">{{$user->estado}}</div>
    </td>
  
    <td class="px-0 py-4 whitespace-nowrap text-right text-sm font-medium">
    <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
    </td>
  
    <td class="px-5 py-4 whitespace-nowrap text-right text-sm font-medium">
      <form action="{{ route('admin.users.destroy', $user) }}" 
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
  </div>




@else
    
<div class="card-body">
  <strong>No existe ese registro</strong>
</div>
@endif

</div>
