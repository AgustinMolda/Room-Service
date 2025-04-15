<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        $rooms= Room::paginate(10);
        return view('Rooms/Room', compact('rooms'));
    }

    public function show(Room $rooms){
        //$rooms = Room::find($rooms);
        
        return view('Rooms/Habitacion',compact('rooms'));
    }

    public function create(){
        return view('Rooms/RoomCreate');
    }

    public function store(Request $request){
        $room= new Room();

        $room->Número_Habitación= $request->numero_Habitacion;
        $room->slug= $request->slug;
        $room->Tipo_Habitación= $request->tipo_Habitación;
        $room->Precio_Noche= $request->precio_Noche;
        $room->Estado= $request->estado;

        $room->save();

       /* $request->validate([
            'Número_Habitación' => ['required'],
            'slug' => ['required','unique:rooms'],
            'Tipo_Habitación' => ['required','min:5','max:255'],
            'Precio_Noche' => 'required',
            'Estado'=> 'required'
        ]);*/



        Room::create($request->all());

        return redirect()->route('rooms.index');
    }

    public function edit(Room $room){
       // $room= Room::find($room);
        return view('Rooms/RoomEdit', compact('room'));
    }


    public function update(Request $request, Room $room){
        //$room = Room::find($room);
        $room->Número_Habitación= $request->numero_Habitacion;
        $room->slug= $request->slug;
        $room->Tipo_Habitación= $request->tipo_Habitación;
        $room->Precio_Noche= $request->precio_Noche;
        $room->Estado= $request->estado;


          $room->save();

          return redirect()->route('rooms.index');
    }

    public function destroy(Room $room){
            //$room= Room::find($room);
            $room->delete();

            return redirect()->route('rooms.index');
    }
}
