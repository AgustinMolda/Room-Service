<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Clients::paginate(10);

        return view('Clients/ClientsIndex',compact('clients'));
    }

    public function show(Clients $clients){
       // $clients= Clients::find($clients);

        return view('Clients/clientsShow', compact('clients'));
    }

    public function create(){
        return view('Clients/ClientsCreate');
    }

    public function store(Request $request){
       /* $client = new Clients();

        $client->name= $request->name;
        $client->slug= $request->slug;
        $client->surename=$request->surename;
        $client->email=$request->email;
        $client->phone= $request->phone;*/

        Clients::create($request->all());

        return redirect(route('clients.index'));


    }

    public function edit(Clients $client){
        //$client= Clients::find($cliente);
        return view('Clients/ClientsEdit',compact('client'));
    }

    public function update(Request $request, Clients $client){
            //$client= Clients::find($client);

            /*$client->name= $request->name;
            $client->slug= $request->slug;
            $client->surename=$request->surename;
            $client->email= $request->email;
            $client->phone= $request->phone;*/
        

            $client->save($request->all());

           return redirect(route('clients.index'));
    }

    public function destroy(Clients $client){
        //$client= Clients::find($client);

        $client->delete();

        return redirect(route('clients.index'));
    }
}
