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
		background: rgb(235, 208, 209); 
	}
	th { 
		background: rgb(105, 24, 24); 
		color: white; 
		font-weight: bold; 
	}
	td, th { 
		padding: 10px; 
		border: 1px solid rgb(102, 17, 17); 
		text-align: left; 
	}
</style>
</head>
<body>

      <h2>Listado de Inventarios PDF</h2>
      <table id="page-wrap ">
      <thead>
      <tr>
      <th>#</th>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Categoria</th>
      <th>Stock</th>
      <th>Descripcion</th>
      <th>Ultima Actualizacion</th>
      </tr>
      </thead>
    <!-- More people... -->
      <tbody>
      @foreach ($inventarios as $inventario)
      <tr>
      <td>{{$inventario->id}}</td>
      <td>{{$inventario->codigo}}</td>
      <td>{{$inventario->nombre}}</td>
      <td>{{$inventario->categoria}}</td>
      <td>{{$inventario->stock}}</td>
      <td>{{$inventario->descripcion}}</td>
      <td>{{$inventario->updated_at}}</td>

      </tr>
    
       <!-- More people... -->
       @endforeach
      </tbody>
      </table>

  
  <!-- ... -->
</body>
</html>