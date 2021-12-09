<!-- Codigo -->
<div class="flex flex-wrap">

        <!-- Nombre -->
        <div class="w-full lg:w-4/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('codigo', 'Codigo', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('codigo', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 ', 'placeholder'=>'Nuevo codigo']) !!}
       
          @error('codigo')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
       
        </div></div> 
      
        <!-- Nombre -->
        <div class="w-full lg:w-8/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('proveedor', 'proveedor', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('proveedor', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el proveedor']) !!}
       
          @error('proveedor')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
       
        </div></div>
  
        <!-- Apellido -->
        <div class="w-full lg:w-5/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('celular', 'celular', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('celular', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa los celulars']) !!}
        
          @error('celular')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  
        <!-- DNI -->
        <div class="w-full lg:w-7/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('correo', 'correo', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('correo', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el correo']) !!}
        
          @error('correo')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  
        <!-- Comprobante -->
        <div class="w-full lg:w-4/12 px-3">
        <div class="relative w-full mb-3">
          {!! Form::label('comprobante', 'Comprobante', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('comprobante', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el comprobante']) !!}
        
          @error('comprobante')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  
        <!-- Direccion -->
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
            <label class="block uppercase text-blue-600 text-xs font-bold mb-2" htmlfor="grid-password">
            Fecha y Hora
            </label>
            <input type="datetime-local" name="fecha_hora" min="05:30" max="8:00" step="600"
            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"/>
            @error('fecha_hora')
            <samp class="text-danger">{{$message}}</samp>
            @enderror
            </div>
            </div>
          
        
  
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
