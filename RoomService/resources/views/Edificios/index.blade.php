<div>
     <h1>Lista de edificios</h1>

     <a href="{{route('edificios.create')}}">Nuevo</a>

     <ul>
            @foreach ($edificios as $edificio)
                <li><a href="{{route('edificios.show', $edificio)}}">{{$edificio->direccion}}</a></li>
            @endforeach

     </ul>

        {{ $edificios->links() }}
</div>
