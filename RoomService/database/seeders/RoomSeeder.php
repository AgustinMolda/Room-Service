<?php

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomModel;
use Database\Factories\RoomFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        $room = new Room();
        
        $room->Número_Habitación= "0001";
        $room->slug="slug-room-1";
        $room->Tipo_Habitación="Común";
        $room->Precio_Noche= 53641.33;
        $room->Estado= "Reservado";
        $room->created_at=now();

        $room->save();

        $room= new Room();

        $room->Número_Habitación= "0002";
        $room->slug= "slug-room-2";
        $room->tipo_Habitación= "Suite";
        $room->precio_Noche= 164871.99;
        $room->Estado="Alquilado";
        $room->created_at=now();

        $room->save();


        $room= new Room();

        $room->Número_Habitación= "0003";
        $room->slug= "slug-room-3";
        $room->tipo_Habitación= "común";
        $room->precio_Noche= 356974.22;
        $room->Estado="En alquiler";
        $room->created_at= now();

        $room->save();
        
        $room = new Room();

        $room->Número_Habitación = "0004";
        $room->slug= "slug-room-4";
        $room->tipo_Habitación= "suite";
        $room->precio_Noche= 2648712.50;
        $room->Estado="Alguilado";
        $room->created_at=now();

        $room->save();

        $room= new Room();

        $room->Número_Habitación= "0005";
        $room->slug="slug-room-5";
        $room->tipo_Habitación="común";
        $room->precio_Noche=452167.00;
        $room->Estado="Reservado";
        $room->created_at=now();

        $room->save();

        $room= new Room();
        $room->Número_Habitación= "0006"; 
        $room->slug="slug-room-6";
        $room->tipo_Habitación="Penhouse";
        $room->precio_Noche=5216471.30;
        $room->Estado="Alguilado";
        $room->created_at=now();

        $room->save();

        $room= new Room();

        $room->Número_Habitación="0007";
        $room->slug="slug-room-7";
        $room->tipo_Habitación="Suite Presidencial";
        $room->precio_Noche=4561702;
        $room->Estado="Reservado";
        $room->created_at=now();

        $room->save();

        $room= new Room();

        $room->Número_Habitación="0008";
        $room->slug="slug-room-8";
        $room->tipo_Habitación="Común";
        $room->precio_Noche=6521467;
        $room->Estado="En alquiler";
        $room->created_at=now();

        $room->save();

        $room= new Room();

        $room->Número_Habitación="0009";
        $room->slug="slug-room-9";
        $room->tipo_Habitación="Común";
        $room->precio_Noche=46521396;
        $room->Estado="Alquilado";
        $room->created_at=now();

        $room->save();

        $room = new Room();

        $room->Número_Habitación="0010";
        $room->slug="slug-room-10";
        $room->tipo_Habitación="Suite";
        $room->precio_noche=6325102;
        $room->Estado="En alquier";
        $room->created_at=now();


        $room->save();


        Room::factory(1000)->create();


    }
}
