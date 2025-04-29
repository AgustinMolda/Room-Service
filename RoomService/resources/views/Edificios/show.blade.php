<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edificio</title>
</head>
<body>
        <h1>Edificio en la direccion= {{$edificio->direccion}}</h1>
        <br>
        <br>
        <p>Nombre: {{$edificio->nombre}}</p>
        <br>
        <br>
        <p>Slug: {{$edificio->slug}}</p>
        <br>
        <br>
        <p>Pisos: {{$edificio->pisos}}</p>
        <br>
        <br>
        <a href="{{route('edificios.edit', $edificio)}}">Editar edificio</a>
         <br>
         <br>   
        <form action="{{route('edificios.destroy', $edificio)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>

</body>
</html>