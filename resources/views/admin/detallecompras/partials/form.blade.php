<!-- Codigo -->
<div class="flex flex-wrap">
  <!-- Tipo de empleado -->
  <div class="w-full lg:w-3/12 px-3">
    <div class="relative w-full mb-3">
    <!-- <label for="">Empleado en Atencion:</label>
    <select name="ID_Empleados" id="" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
    </select>-->

    {!! Form::label('ID_Compras', 'Proveedor: ', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
    {!! Form::select('ID_Compras', $ID_Compras, null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}

    @error('ID_Compras')
    <samp class="text-danger">{{$message}}</samp>
    @enderror
  </div></div>

  <!-- Tipo de empleado -->
  <div class="w-full lg:w-3/12 px-3">
    <div class="relative w-full mb-3">
    <!-- <label for="">Empleado en Atencion:</label>
    <select name="ID_Empleados" id="" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
    </select>-->

    {!! Form::label('ID_Inventarios', 'Articulo: ', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
    {!! Form::select('ID_Inventarios', $ID_Inventarios, null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}

    @error('ID_Inventarios')
    <samp class="text-danger">{{$message}}</samp>
    @enderror
  </div></div>

        <!-- Nombre -->
        <div class="w-full lg:w-3/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('cantidad', 'cantidad', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('cantidad', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 ', 'placeholder'=>'Nuevo cantidad']) !!}
       
          @error('cantidad')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
       
        </div></div> 
      
        <!-- Nombre -->
        <div class="w-full lg:w-3/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('precio', 'precio', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('precio', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el precio']) !!}
       
          @error('precio')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
       
        </div></div>
  
        <!-- Apellido -->
        <div class="w-full lg:w-12/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('descripcion', 'descripcion', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::textarea('descripcion', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa los descripcions']) !!}
        
          @error('descripcion')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>

          
        
  
        
