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
  margin-bottom: 50px;
  text-align: center;
}

#page-wrap {
	margin: 5px;
}

	/* 
	Generic Styling, for Desktops/Laptops 
	*/
	table { 
		width: 98%; 
		border-collapse: collapse; 
	}
	/* Zebra striping */
	tr:nth-of-type(odd) { 
		background: rgb(167, 240, 177); 
	}
	th { 
		background: rgb(18, 131, 52); 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 5px; 
		border: 1px solid rgb(18, 131, 52); 
		text-align: left; 
	}
</style>
</head>
<body>

      <h2>Listado de Compras PDF</h2>
      <table id="page-wrap ">
      <thead>
      <tr>
      <th>#</th>
      <th>Codigo</th>
      <th>Proveedor</th>
      <th>Celular</th>
      <th>Correo</th>
      <th>Comprobante</th>
      <th>Fecha / Hora</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Descripcion</th>
      </tr>
      </thead>
    <!-- More people... -->
      <tbody>
      @foreach ($compras as $ccompra)
      @foreach ($detalles as $detalle)
      <tr>
      <td>{{$ccompra->id}}</td>
      <td>{{$ccompra->codigo}}</td>
      <td>{{$ccompra->proveedor}}</td>
      <td>{{$ccompra->celular}}</td>
      <td>{{$ccompra->correo}}</td>
      <td>{{$ccompra->comprobante}}</td>
      <td>{{$ccompra->fecha_hora}}</td>
      <td>{{$detalle->cantidad}}</td>
      <td>{{$detalle->precio}}</td>
      <td>{{$detalle->descripcion}}</td>

      </tr>
    
       <!-- More people... -->
       @endforeach
       @endforeach
      </tbody>
      </table>

  
  <!-- ... -->
</body>
</html>