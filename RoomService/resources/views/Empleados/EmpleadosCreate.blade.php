<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Empleado</title>
</head>
<body>
    <h1>Nuevo empleado</h1>

    <form action="{{route('empleados.store')}}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <br>
        <label>Slug:</label>
        <input type="text" name="slug">
        <br>
        <br>
        <label>Apellido:</label>
        <input type="text" name="apellido">
        <br>
        <br>
        <label>Cargo:</label>
        <input type="text" name="cargo">
        <br>
        <br>
        <label>Telefono:</label>
        <input type="phone" name="telefono">
        <br>
        <br>
        <button type="submit">Crear usuario</button>


    </form>
</body>
</html>