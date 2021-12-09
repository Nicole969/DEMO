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
		background: rgb(217, 242, 247); 
	}
	th { 
		background: rgb(24, 38, 114); 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 10px; 
		border: 1px solid rgb(24, 38, 114); 
		text-align: left; 
	}
</style>
</head>
<body>

      <h2>Listado de Clientes PDF</h2>
      <table id="page-wrap ">
      <thead>
      <tr>
      <th>#</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>DNI</th>
      <th>Celular</th>
      <th>Direccion</th>
      <th>Referencia</th>
      </tr>
      </thead>
    <!-- More people... -->
      <tbody>
      @foreach ($clientes as $cliente)
      <tr>
      <td>{{$cliente->id}}</td>
      <td>{{$cliente->nombre}}</td>
      <td>{{$cliente->apellido}}</td>
      <td>{{$cliente->DNI}}</td>
      <td>{{$cliente->celular}}</td>
      <td>{{$cliente->direccion}}</td>
      <td>{{$cliente->referencia}}</td>

      </tr>
    
       <!-- More people... -->
       @endforeach
      </tbody>
      </table>

  
  <!-- ... -->
</body>
</html>