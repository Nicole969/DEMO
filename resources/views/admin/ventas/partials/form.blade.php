<!-- Codigo -->
<div class="flex flex-wrap">

        <!-- Nombre -->
        <div class="w-full lg:w-6/12 px-3">
        <div class="relative w-full mb-3">
        {!! Form::label('nombre', 'Nombre', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
        {!! Form::text('nombre', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el nombre']) !!}
 
        @error('nombre')
        <samp class="text-danger">{{$message}}</samp>
        @enderror
        </div></div>


        <div class="w-full lg:w-3/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('codigo', 'Codigo', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('codigo', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 ', 'placeholder'=>'Nuevo codigo']) !!}
       
          @error('codigo')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
      
        
  
        <!-- Apellido -->
        <div class="w-full lg:w-3/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('cantidad', 'cantidad', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('cantidad', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa los cantidads']) !!}
        
          @error('cantidad')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
      
  
        <!-- DNI -->
        <div class="w-full lg:w-4/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('precio_unidad', 'precio_unidad', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('precio_unidad', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el precio_unidad']) !!}
        
          @error('precio_unidad')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
      
        <div class="w-full lg:w-4/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('precio_total', 'precio_total', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('precio_total', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el precio_total']) !!}
        
          @error('precio_total')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
      
        <div class="w-full lg:w-4/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('descuento', 'descuento', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('descuento', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el descuento']) !!}
        
          @error('descuento')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
      
        <!-- Celular -->
        <div class="w-full lg:w-12/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('descripcion', 'descripcion', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::textarea('descripcion', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el descripcion']) !!}
        
          @error('descripcion')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
      
  
       
        
