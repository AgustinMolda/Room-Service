<?php

namespace Database\Seeders;

use App\Models\Clients;
use Database\Factories\ClientsFactory;
use GuzzleHttp\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = new Clients();

        $client->name="Armando";
        $client->slug="Slug de cliente";
        $client->surename="Barreda";
        $client->email= "Armandogendo@mail.com";
        $client->phone= "45698217";
        $client->created_at=now();

        $client->save();

        $client = new Clients();

        $client->name="Max";
        $client->slug="Slug de cliente 2";
        $client->surename="Power";
        $client->email="MaxPow@mail.com";
        $client->phone="67415810";
        $client->created_at=now();

        $client->save();

        $client= new Clients();

        $client->name="Jorge";
        $client->slug="Slug de cliente 3";
        $client->surename="Pelongo";
        $client->email="JorgePelongo@mail.com";
        $client->phone="226874962";
        $client->created_at=now();

        $client->save();


        $client= new Clients();

        $client->name="Susana";
        $client->slug="Slug de cliente 4";
        $client->surename="Repetti";
        $client->email="SuRepetti@mail.com";
        $client->phone="96741351";
        $client->created_at=now();

        $client->save();

        $client= new Clients();

        $client->name="Monica";
        $client->slug="Slug de cliente 5";
        $client->surename="Rodrigez";
        $client->email="MoniRodrigez@mail.com";
        $client->phone="584136987";
        $client->created_at=now();

        $client->save();

        
        $client= new Clients();

        $client->name="Alfredo";
        $client->slug="Slug de cliente 6";
        $client->surename="Ferreira";
        $client->email="AlfredFerreira@mail.com";
        $client->phone="4687510";
        $client->created_at=now();

        $client->save();


        $client= new Clients();
        
        $client->name="Merlina";
        $client->slug="Slug de cliente 7";
        $client->surename="Valentine";
        $client->email="MerlinaValentine@mail.com";
        $client->phone="71569841";
        $client->created_at=now();

        $client->save();

        $client= new Clients();

        $client->name="Fausto";
        $client->slug="Slug de cliente 8";
        $client->surename="Cervantes";
        $client->email="FaustoCervantes@mail.com";
        $client->phone="69234871";
        $client->created_at=now();

        $client->save();


        $client= new Clients();

        $client->name="Jhon";
        $client->slug="Slug de cliente 9";
        $client->surename="Romero";
        $client->email="JhonSlayer@mail.com";
        $client->phone="624817035";
        $client->created_at=now();

        $client->save();


        $client=new Clients();
        
        $client->name="Lucy";
        $client->slug="Slug de cliente 10";
        $client->surename="Lawless";
        $client->email="LucyLaw@mail.com";
        $client->phone="36598741";
        $client->created_at=now();

        $client->save();

        Clients::factory(90)->create();
    }
}
