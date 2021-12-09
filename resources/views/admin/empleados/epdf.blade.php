<!doctype html>
<html>
<head>
  <!-- ... -->
 
  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
<style>
* { 
	margin: 0; 
	padding: 0; 
}
body { 
	font: 14px/1.4 Georgia, Serif; 
}
h2{
  margin-top: 50px;
  text-align: center;
}

#page-wrap {
	margin: 50px;
}

	/* 
	Generic Styling, for Desktops/Laptops 
	*/
	table { 
		width: 90%; 
		border-collapse: collapse; 
	}
	/* Zebra striping */
	tr:nth-of-type(odd) { 
		background: rgb(164, 240, 236); 
	}
	th { 
		background: rgb(21, 129, 124); 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 10px; 
		border: 1px solid rgb(21, 129, 124); 
		text-align: left; 
	}
</style>
</head>
<body>

      <h2>Listado de Empleados PDF</h2>
      <table id="page-wrap ">
      <thead>
      <tr>
      <th>#</th>
      <th>Codigo</th>
      <th>Nombres</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>Edad</th>
      <th>DNI</th>
      <th>Celular</th>
      <th>Correo</th>
      </tr>
      </thead>
    <!-- More people... -->
      <tbody>
      @foreach ($empleados as $empleado)
      <tr>
      <td>{{$empleado->id}}</td>
      <td>{{$empleado->codigo}}</td>
      <td>{{$empleado->nombres}}</td>
      <td>{{$empleado->apellido_paterno}}</td>
      <td>{{$empleado->apellido_materno}}</td>
      <td>{{$empleado->edad}}</td>
      <td>{{$empleado->DNI}}</td>
      <td>{{$empleado->celular}}</td>
      <td>{{$empleado->correo}}</td>

      </tr>
    
       <!-- More people... -->
       @endforeach
      </tbody>
      </table>

  
  <!-- ... -->
</body>
</html>