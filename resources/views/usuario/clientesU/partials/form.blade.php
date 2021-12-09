
      <!-- Codigo -->
        <div class="flex flex-wrap">

          <div class="w-full lg:w-5/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('codigo', 'Codigo', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('codigo', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Nuevo codigo']) !!}
       
          @error('codigo')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div></div>

          <div class="w-full lg:w-7/12 px-3">
          <div class="relative w-full mb-3">
            <!-- <label for="">Empleado en Atencion:</label>
            <select name="ID_Empleados" id="" class="form-control">
              <option value="1">1</option>
              <option value="2">2</option>
            </select>-->
    
          {!! Form::label('ID_Empleados', 'Empleado en Atencion: ', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::select('ID_Empleados', $ID_Empleados, null, ['class' => 'form border-0 px-3 py-3 placeholder-black-800 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
    
          @error('ID_Empleados')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div></div>
          
          
          
          <div class="w-full lg:w-5/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('nombre', 'Nombre', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('nombre', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-800 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el nombre']) !!}
       
          @error('nombre')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div></div>
         
      
          <div class="w-full lg:w-7/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('apellido', 'Apellido', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('apellido', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-800 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el apellido']) !!}
       
          @error('apellido')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div></div>
  
  
          <div class="w-full lg:w-3/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('DNI', 'DNI', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('DNI', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-800 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el DNI']) !!}
        
          @error('DNI')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div></div>
  
          <div class="w-full lg:w-4/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('celular', 'Celular', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('celular', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-800 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el celular']) !!}
        
          @error('celular')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div></div>
  
          <div class="w-full lg:w-5/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('direccion', 'Direccion', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('direccion', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-800 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar la direccion']) !!}
        
          @error('direccion')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div></div>
  
          <div class="w-full lg:w-12/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('referencia', 'Referencia', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::textarea('referencia', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-800 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar la referencia']) !!}
        
          @error('referencia')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
          </div></div>
  
         
