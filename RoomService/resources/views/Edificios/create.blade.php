<div>
        <h1>Edificios</h1>

        <form action="{{route('edificios.store')}}" method="POST">
            @csrf
            <label>Nombre: </label>
            <input type="text" name="nombre">
            <br>
            <br>
            <label>Slug:</label>
            <input type="text" name="slug">
            <br>
            <br>
            <label>Direccion:</label>
            <input type="text" name="direccion">
            <br>
            <br>
            <label>Pisos:</label>
            <input type="number" name="pisos">
            <br>
            <br>
            <button type="submit">Crear edificio</button>
        </form>

</div>
