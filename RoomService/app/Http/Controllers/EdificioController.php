<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    public function index(){
        $edificios= Edificio::paginate(10);

        return view('Edificios.index', compact('edificios'));
    }

    public function show(Edificio $edificio){
        

        return view('Edificios.show', compact('edificio'));
    }


    public function create(){
        return view('Edificios.create');
    }

    public function store(Request $request){
      
        Edificio::create($request->all());

        return redirect()->route('edificios.index');

    }

    public function edit(Edificio $edificio){
     
        
        return view('Edificios.edit', compact('edificio'));
    }

    public function update(Request $request,Edificio $edificio){
           
         $edificio->update($request->all());

          return redirect()->route('edificios.index');  
    }

    public function destroy(Edificio $edificio){
         $edificio->delete();

        return redirect()->route('edificios.index');
    }
    
}
