<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="POST" action='{{route('CrearEmpleado')}}' class="form" >
        @csrf

        

        <div style="display: flex; flex-direction: column; align-items: center;">
        <label >ID</label>
        <input type="text" name="Id">
        
        <label>Nombre</label>
        <input type="text" name="nombre">

        <label>Apellido</label>
        <input type="text" name="apellido">

        <label >Fecha de ingreso</label>
        <input type="text" name="fechaIn">

        <label >Salario</label>
        <input type="text" name="salario">

        <button type="submit"> Guardar</button>
    </div>
    </form>

    
</body>
</html>