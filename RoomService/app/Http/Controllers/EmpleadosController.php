<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller{

    public function index(){
        //$empleados= Empleado::orderby( 'nombre','asc')->get();
        $empleados= Empleado::paginate(10);

        return view('Empleados/EmpleadoIndex',compact('empleados'));

}

    public function show(Empleado $empleado){
       
        return view('Empleados/EmpleadoFind', compact('empleado'));
    }


    public function create(){
        return view('Empleados/EmpleadosCreate');
    }

    public function store(Request $request){
        $empleado= new Empleado();

        Empleado::create($request->all());

        /*$empleado->nombre= $request->nombre;
        $empleado->slug= $request->slug;
        $empleado->apellido=$request->apellido;
        $empleado->cargo= $request->cargo;
        $empleado->telefono=$request->telefono;

        $empleado->save();*/

        return redirect()->route('empleados.index');

    }


    public function edit(Empleado $empleado){
       

        return view('Empleados/EmpleadosEdit',compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado){
        
        $empleado->update($request->all());

        return redirect()->route('empleados.index');
    }

    public function destroy(Empleado $empleado){
        

        $empleado->delete();

        return redirect()->route('empleados.index');

    }
}