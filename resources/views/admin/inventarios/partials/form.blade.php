<!-- Codigo -->
<div class="flex flex-wrap">

          <!-- Nombre -->
          <div class="w-full lg:w-3/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('codigo', 'Codigo', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('codigo', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 ', 'placeholder'=>'Nuevo codigo']) !!}
       
          @error('codigo')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
       
        </div></div>  
      
        <!-- Nombre -->
        <div class="w-full lg:w-9/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('nombre', 'Articulo', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('nombre', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el nombre']) !!}
       
          @error('nombre')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
       
        </div></div>
  
        <!-- Apellido -->
        <div class="w-full lg:w-7/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('categoria', 'categoria', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('categoria', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa los categorias']) !!}
        
          @error('cayrgotia')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  
        <!-- DNI -->
        <div class="w-full lg:w-5/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('stock', 'stock', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('stock', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el stock']) !!}
        
          @error('stock')
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
  
       
        
