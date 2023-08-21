<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>EMPLEADOS</h1>
    <div class="table-responsive">
    <table class="table">
    <thead><tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Fecha de registro</th>
    <th>Telefono</th>
     <th>Correo</th>
    </tr></thead>

    <tbody>
        @foreach ($listProveedores as $proveedor)
        <tr>
          <td>{{$proveedor->id_proveedor}}</td>
          <td>{{$proveedor->nombre}}</td>
          <td>{{$proveedor->fechaRegistro}}</td>
          <td>{{$proveedor->telefono}}</td>
          <td>{{$proveedor->correo}}</td>
        </tr>
            
        @endforeach
    </tbody>
 </table>
</div>
</body>
</html>