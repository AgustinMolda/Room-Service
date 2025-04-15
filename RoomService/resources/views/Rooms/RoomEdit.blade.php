<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar habitación</title>
</head>
<body>
        <form action="{{route('rooms.update',$room->id)}}" method="POST">
            @csrf
            @method('PUT')
            

            <label>Número de la habitación</label>   
            <input type="text" name="numero_Habitacion" value="{{$room->Número_Habitación}}" >
            <br>
            <br>
            <label>Slug</label> 
            <input type="text" name="slug" value="{{$room->slug}}">
            <br>
            <br>
            <label >Tipo de habitación</label>
            <input type="text" name="tipo_Habitación" value="{{$room->Tipo_Habitación}}">
            <br>
            <br>
            <label >Precio por noche</label>
            <input type="text" name="precio_Noche" value="{{$room->Precio_Noche}}">
            <br>
            <br>
            <label >Estado</label>
            <input type="text" name="estado" value="{{$room->Estado}}">
            <br>
            <br>
            <button type="submit">Editar habitación</button>
        </form>
</body>
</html>