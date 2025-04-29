<?php

namespace Database\Seeders;

use App\Models\Edificio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdificioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $edificio = new Edificio();

        $edificio->nombre="Torre de babel";
        $edificio->direccion= "Calle falsa 123";
        $edificio->slug="Torre-01-edificio";
        $edificio->pisos= 50;

        $edificio->save();

        $edificio = new Edificio();

        $edificio->direccion="Pampa y la vía 1547";
        $edificio->slug="edificio-importante-moderno";
        $edificio->pisos=30;

        $edificio->save();

        $edificio = new Edificio();

        $edificio->nombre="Torre de pizza";
        $edificio->slug="torre-pizza-italo";
        $edificio->direccion="Italia 8214";
        $edificio->pisos= 15;

        $edificio->save();
        
        $edificio = new Edificio();

        $edificio->slug="Slug-Edificio-04";
        $edificio->direccion="Cervantes 2523";
        $edificio->pisos=14;

        $edificio->save();

        $edificio= new Edificio();

        $edificio->nombre="Hamilton";
        $edificio->slug="Slug-hamilton-hotel";
        $edificio->direccion="Cerruti 564";
        $edificio->pisos= 13;

        $edificio->save();


        $edificio= new Edificio();

        $edificio->slug="Edificio-07-larrea";
        $edificio->direccion="Larrea 1824";
        $edificio->pisos=16;

        $edificio->save();

        Edificio::factory(100)->create();
    }
}
