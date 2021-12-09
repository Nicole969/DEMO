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
		background: rgb(243, 223, 240); 
	}
	th { 
		background: rgb(114, 24, 102); 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 10px; 
		border: 1px solid rgb(66, 1, 55); 
		text-align: left; 
	}
</style>
</head>
<body>

      <h2>Listado de Ventas PDF</h2>
      <table id="page-wrap ">
      <thead>
      <tr>
      <th>#</th>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Cantidad</th>
      <th>Precio Unidad</th>
      <th>Precio Total</th>
      <th>Descuento</th>
      <th>Fecha / Hora</th>
      </tr>
      </thead>
    <!-- More people... -->
      <tbody>
      @foreach ($ventas as $venta)
      <tr>
      <td>{{$venta->id}}</td>
      <td>{{$venta->codigo}}</td>
      <td>{{$venta->nombre}}</td>
      <td>{{$venta->descripcion}}</td>
      <td>{{$venta->cantidad}}</td>
      <td>{{$venta->precio_unidad}}</td>
      <td>{{$venta->precio_total}}</td>
      <td>{{$venta->descuento}}</td>
      <td>{{$venta->fecha_hora}}</td>

      </tr>
    
       <!-- More people... -->
       @endforeach
      </tbody>
      </table>

  
  <!-- ... -->
</body>
</html>