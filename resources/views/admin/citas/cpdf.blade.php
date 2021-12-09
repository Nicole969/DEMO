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
		background: rgb(244, 255, 146); 
	}
	th { 
		background: rgb(91, 97, 7); 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 10px; 
		border: 1px solid rgb(91, 97, 7); 
		text-align: left; 
	}
</style>
</head>
<body>

      <h2>Listado de CITAS PDF</h2>
      <table id="page-wrap ">
      <thead>
      <tr>
      <th>#</th>
      <th>Codigo</th>
      <th>Descripcion</th>
      <th>Fecha / Hora</th>
      <th>Direccion</th>
      </tr>
      </thead>
    <!-- More people... -->
      <tbody>
      @foreach ($citas as $cita)
      <tr>
      <td>{{$cita->id}}</td>
      <td>{{$cita->codigo}}</td>
      <td>{{$cita->descripcion}}</td>
      <td>{{$cita->fecha_hora}}</td>
      <td>{{$cita->direccion}}</td>

      </tr>
    
       <!-- More people... -->
       @endforeach
      </tbody>
      </table>

  
  <!-- ... -->
</body>
</html>