<div>
    <form action="{{route('clients.store')}}" method="POST">
            @csrf
            
            <label >Nombre:</label>
            <input type="text" name="name">
            <br>
            <br>
            <label >Slug:</label>
            <input type="text" name="slug">
            <br>
            <br>
            <label>Apellido:</label>
            <input type="text" name="surename" >
            <br>
            <br>
            <label>Email</label>
            <input type="email" name="email">
            <br>
            <br>
            <label >Telefono</label>
            <input type="phone" name="phone">
            <br>
            <br>
            <button type="submit">Crear cliente</button>

    </form>
</div>
