<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente</title>
</head>
<body>
        <h1>Bienvenido: {{$clients->name}}  {{$clients->surename}}</h1>
        <br>
        <br>
        <p>Slug: {{$clients->slug}}</p>
        <br>
        <br>
        <p>Email: {{$clients->email}}</p>
        <br>
        <br>
        <p>Telefono: {{$clients->phone}}</p>
        <br>
        <br>
        <a href="{{route('clients.edit',$clients)}}">Editar</a>
        <br>
        <br>
        <form action="{{route('clients.edit',$clients)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
</body>
</html>