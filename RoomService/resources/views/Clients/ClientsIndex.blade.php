<div>
        <h1>Lista de clientes</h1>

        <a href="{{route('clients.create')}}">Nuevo</a>

        <ul>
        @foreach ($clients as $client)
                <li><a href="{{route('clients.show',$client) }}">{{$client->name}}</a></li>
        @endforeach
        </ul>

        {{$clients->links()}}
</div>
