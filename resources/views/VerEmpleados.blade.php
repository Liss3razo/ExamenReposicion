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
    <th>Apellido</th>
    <th>Fecha de ingreso</th>
     <th>Salario</th>
    </tr></thead>

    <tbody>
        @foreach ($listEmpleado as $empleado)
        <tr>
          <td>{{$empleado->id_empleado}}</td>
          <td>{{$empleado->nombre}}</td>
          <td>{{$empleado->apellido}}</td>
          <td>{{$empleado->fechaIngreso}}</td>
          <td>{{$empleado->salario}}</td>
        </tr>
            
        @endforeach
    </tbody>
 </table>
</div>
</body>
</html>