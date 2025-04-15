<?php

namespace Database\Seeders;

use App\Models\Empleado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        
        $empleado = new Empleado();

        $empleado->nombre= "Pedro";
        $empleado->slug="slug-emp-01";
        $empleado->apellido='Malevio';
        $empleado->cargo='Recepcionista';
        $empleado->telefono= '426513698';
        $empleado->created_at= now();

        $empleado->save();


        $empleado = new Empleado();

        $empleado->nombre='Carla';
        $empleado->slug="slug-empl-02";
        $empleado->apellido="Sanchez";
        $empleado->cargo="Mucama";
        $empleado->telefono="6541032";
        $empleado->created_at=now();

        $empleado->save();

        $empleado = new Empleado();

        $empleado->nombre='Fausto';
        $empleado->slug='slug-geren-03';
        $empleado->apellido='Cervantes';
        $empleado->cargo= 'Gerente';
        $empleado->telefono='52364187';
        $empleado->created_at=now();

        $empleado->save();


        $empleado = new Empleado();


        $empleado->nombre='Alfredo';
        $empleado->slug='slug-emplea-04';
        $empleado->apellido='Godofredo';
        $empleado->cargo='Jefe de mantenimiento';
        $empleado->telefono= '36025410';
        $empleado->created_at=now();


        $empleado->save();

        $empleado= new Empleado();

        $empleado->nombre='Victoria';
        $empleado->slug='slug-emplead-05';
        $empleado->apellido='Rodrigez';
        $empleado->cargo='Recepcionista';
        $empleado->telefono='362159748';
        $empleado->created_at=now();

        $empleado->save();

        Empleado::factory(1000)->create();

    }
}
