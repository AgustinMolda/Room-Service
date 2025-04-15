<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear habitación</title>
</head>
<body>
        <form action="{{route('rooms.store')}}" method="POST">
            @csrf    

            <label>Número de la habitación</label>   
            <input type="text" name="numero_Habitacion" >
            <br>
            <br>
            <label>Slug</label> 
            <input type="text" name="slug">
            <br>
            <br>
            <label >Tipo de habitación</label>
            <input type="text" name="tipo_Habitación">
            <br>
            <br>
            <label >Precio por noche</label>
            <input type="text" name="precio_Noche">
            <br>
            <br>
            <label >Estado</label>
            <input type="text" name="estado">
            <br>
            <br>
            <button type="submit">Crear habitación</button>


           
        </form>  
</body>
</html>