<!-- Codigo -->
<div class="flex flex-wrap">

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
          {!! Form::label('nombres', 'Nombres', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('nombres', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa el nombres']) !!}
       
          @error('nombres')
              <samp class="text-danger">{{$message}}</samp>
          @enderror
       
        </div></div>
  
        <!-- Apellido -->
        <div class="w-full lg:w-6/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('apellido_paterno', 'Apellido Paterno', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('apellido_paterno', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa los apellido_paternos']) !!}
        
          @error('apellido_paterno')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>

        <!-- Apellido -->
        <div class="w-full lg:w-6/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('apellido_materno', 'Apellido Materno', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('apellido_materno', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresa los apellido_maternos']) !!}
        
          @error('apellido_materno')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  
        <!-- edad -->
        <div class="w-full lg:w-4/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('edad', 'edad', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('edad', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el edad']) !!}
        
          @error('edad')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>

        <!-- DNI -->
        <div class="w-full lg:w-4/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('DNI', 'DNI', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('DNI', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el DNI']) !!}
        
          @error('DNI')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  
        <!-- Celular -->
        <div class="w-full lg:w-4/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('celular', 'Celular', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('celular', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar el celular']) !!}
        
          @error('celular')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  
        <!-- correo -->
        <div class="w-full lg:w-6/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('correo', 'Correo', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('correo', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar la correo']) !!}
        
          @error('correo')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
  
        <!-- estados -->
        <div class="w-full lg:w-3/12 px-3">
          <div class="relative w-full mb-3">
          {!! Form::label('estado', 'Estado', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2']) !!}
          {!! Form::text('estado', null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150', 'placeholder'=>'Ingresar la estado']) !!}
        
          @error('estado')
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
  
          {!! Form::label('ID_Rols', 'Creador: ', ['class' => 'block uppercase text-blue-700 text-xs font-bold mb-2'])!!}
          {!! Form::select('ID_Rols', $ID_Rols, null, ['class' => 'form border-0 px-3 py-3 placeholder-black-700 text-black-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150']) !!}
  
          @error('ID_Rols')
          <samp class="text-danger">{{$message}}</samp>
          @enderror
        </div></div>
