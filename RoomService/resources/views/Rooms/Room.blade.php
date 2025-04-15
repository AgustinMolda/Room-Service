<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room</title>
</head>
<body>
        <h1>Habitaciones</h1>
        <br>
        <br>
        
        <a href="{{route('rooms.create')}}">Crear habitación</a>

        <ul>
            @foreach ($rooms as $room)
                   <li><a href="{{route('rooms.show',$room->id)}}">{{$room->Número_Habitación}}</a></li> 
            @endforeach
        </ul>


        {{$rooms->links()}}

</body>
</html>