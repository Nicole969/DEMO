<!-- Codigo -->
<div class="flex flex-wrap">

  <!-- Tipo de empleado -->
  <div class="w-full lg:w-4/12 px-3">
  <div class="relative w-full mb-3">
  <!-- <label for="">Empleado en Atencion:</label>
  <select name="ID_Empleados" id="" class="form-control">
    <option value="1">1</option>
    <option value="2">2</option>
  </select>-->

  {!! Form::label('ID_Empleados', 'Empleado en Atencion: ', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
  {!! Form::select('ID_Empleados', $ID_Empleados, null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}

  @error('ID_Empleados')
  <samp class="text-danger">{{$message}}</samp>
  @enderror
  </div></div>


  <div class="w-full lg:w-4/12 px-3">
    <div class="relative w-full mb-3">
  <!-- <label for="">Empleado en Atencion:</label>
  <select name="ID_Empleados" id="" class="form-control">
    <option value="1">1</option>
    <option value="2">2</option>
  </select>-->

  {!! Form::label('ID_Clientes', 'Cliente : ', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
  {!! Form::select('ID_Clientes', $ID_Clientes, null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}

  @error('ID_Clientes')
  <samp class="text-danger">{{$message}}</samp>
  @enderror
  </div></div>


  <div class="w-full lg:w-4/12 px-3">
  <div class="relative w-full mb-3">
  {!! Form::label('codigo', 'Codigo', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2'])  !!}
  {!! Form::text('codigo', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Nuevo codigo']) !!}
 
  @error('codigo')
    <samp class="text-danger">{{$message}}</samp>
  @enderror
  </div></div>


          <div class="w-full lg:w-12/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('descripcion', 'descripcion', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::textarea('descripcion', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el descripcion']) !!}
       
          @error('descripcion')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div></div>

  
        <!-- Direccion -->
        <div class="w-full lg:w-7/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('direccion', 'Direccion', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('direccion', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar la direccion']) !!}
        
          @error('direccion')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  


          <!-- fecha y hora -->
          <div class="w-full lg:w-5/12 px-3">
          <div class="relative w-full mb-3">
            <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
            Fecha y Hora
            </label>
            <input type="datetime-local" name="fecha_hora" min="05:30" max="8:00" step="600"
            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"/>
            </div>
          @error('fecha_hora')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div>
        
