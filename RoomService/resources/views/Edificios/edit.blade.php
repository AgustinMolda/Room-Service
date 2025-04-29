<div>
    <h1>Edificios</h1>

    <form action="{{route('edificios.update',$edificio)}}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre: </label>
        <input type="text" name="nombre" value="{{$edificio->nombre}}">
        <br>
        <br>
        <label>Slug:</label>
        <input type="text" name="slug" value="{{$edificio->slug}}">
        <br>
        <br>
        <label>Direccion:</label>
        <input type="text" name="direccion" value="{{$edificio->direccion}}">
        <br>
        <br>
        <label>Pisos:</label>
        <input type="number" name="pisos" value="{{$edificio->pisos}}">
        <br>
        <br>
        <button type="submit">Modificar edificio</button>
    </form>

</div>
