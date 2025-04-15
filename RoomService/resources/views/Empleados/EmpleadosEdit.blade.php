<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Empleado</title>
</head>
<body>
        <h1>Modificar infromacion de empleado</h1>
        <br>
        <br>
    <form action="{{route('empleados.update', $empleado)}}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{$empleado->nombre}}">
        <br>
        <br>
        <label>Slug:</label>
        <input type="text" name="slug" value="{{$empleado->slug}}">
        <br>
        <br>
        <label>Apellido:</label>
        <input type="text" name="apellido" value="{{$empleado->apellido}}">
        <br>
        <br>
        <label>Cargo:</label>
        <input type="text" name="cargo" value="{{$empleado->cargo}}">
        <br>
        <br>
        <label>Telefono:</label>
        <input type="tel" name="telefono" value="{{$empleado->telefono}}">
        <br>
        <br>
        <button type="submit">Modificar usuario</button>


    </form>
    
</body>
</html>