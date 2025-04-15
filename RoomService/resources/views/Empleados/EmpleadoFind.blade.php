<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleado</title>
</head>
<body>
            <a href="{{route('empleados.index')}}">Volver</a>

        <h1>Empleado nombre: {{$empleado->nombre}} {{$empleado->apellido}}</h1>
            <br>
            <br>
         <p>Slug: {{$empleado->slug}}</p>
            <br>
            <br>
         <p>Cargo: {{$empleado->cargo}}</p>
            <br>
            <br>
         <p>Telefono: {{$empleado->telefono}}</p>  


         <a href="{{route('empleados.edit',$empleado)}}">Modificar datos</a>
         <br>
         <br>
         <form action="{{route('empleados.destroy',$empleado)}}" method="POST">
            @csrf
            @method('DELETE')
               <button type="submit">Eliminar empleado</button>
         </form>
         
</body>
</html>