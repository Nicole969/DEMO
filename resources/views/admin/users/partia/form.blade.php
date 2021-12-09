<!-- Codigo -->
<div class="flex flex-wrap">
  <p class="font-medium px-3 pt-0 text-xl sm:text-3lg text-blue-800">{{$user->name}}</p>
  <!-- Nombre -->
  <div class="w-full lg:w-12/12 px-3">
  <div class="relative w-full mb-3">
    {!! Form::label('rol', 'Roles', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
    @foreach ($roles as $role)
        
            {!! Form::checkbox('roles[]', $role->id,null, ['class'=>'mr-1 '])!!}
            {{$role->name}}
         
    @endforeach
  </div></div>
        
        
        <!-- name -->
        <div class="w-full lg:w-5/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('name', 'name', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('name', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 ', 'placeholder'=>'Nuevo name']) !!}
       
          @error('name')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
       
        </div></div>  
      
        <!-- email -->
        <div class="w-full lg:w-7/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('email', 'email', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('email', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el email']) !!}
       
          @error('email')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
       
        </div></div>
  
        <!-- tipo_usu -->
        <div class="w-full lg:w-6/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('tipo_usu', 'tipo_usu', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('tipo_usu', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa los tipo_usus']) !!}
        
          @error('tipo_usu')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  
        <!-- estado -->
        <div class="w-full lg:w-6/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('estado', 'estado', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('estado', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el estado']) !!}
        
          @error('estado')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  
       
