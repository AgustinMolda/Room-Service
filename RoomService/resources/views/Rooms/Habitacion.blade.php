<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room</title>
</head>
<body>
        <a href="{{route('rooms.index')}}">Volver</a>

        <h1>Habitación número:  {{optional($rooms)->Número_Habitación}}</h1>
        <br>
        <br>
        <p>Slug: {{$rooms->slug}}</p>
        <br>
        <br>
        <p>Tipo de habitación:  {{$rooms->Tipo_Habitación}}</p>
        <br>
        <br>
        <p>Precio por noche: {{$rooms->Precio_Noche}}</p>
        <br>
        <br>
        <p>disponibilidad: {{$rooms->Estado}}</p>
        <br>
        <br>

        <a href="{{route('rooms.edit',$rooms)}}">Actualizar habitación</a>

        <br>
        <br>  
        <form action="{{route('rooms.destroy',$rooms)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar habitación</button>
        </form>


</body>
</html>