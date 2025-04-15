<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Editar Cliente</h1>

        <form action="{{route('clients.update',$client)}}" method="POST">
            @csrf
            @method('PUT')


            <label >Nombre:</label>
            <input type="text" name="name" value="{{$client->name}}">
            <br>
            <br>
            <label >Slug:</label>
            <input type="text" name="slug" value="{{$client->slug}}">
            <br>
            <br>
            <label>Apellido:</label>
            <input type="text" name="surename" value="{{$client->surename}}" >
            <br>
            <br>
            <label>Email</label>
            <input type="email" name="email" value="{{$client->email}}">
            <br>
            <br>
            <label >Telefono</label>
            <input type="phone" name="phone" value="{{$client->phone}}">
            <br>
            <br>
            <button type="submit">Modificar cliente</button>

    </form>
</body>
</html>