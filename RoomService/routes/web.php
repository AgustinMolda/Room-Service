<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EdificioController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\RoomController;
use App\Models\Edificio;
use Database\Factories\EdificioFactory;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/*Route::get('/clients',[ClientController::class,'index'])->name('clients.index');

Route::get('/clients/{cliente}',[ClientController::class,'show'])->name('clients.show');

Route::get('/cli/create',[ClientController::class,'create'])->name('clients.create');

Route::post('/cli/store',[ClientController::class,'store'])->name('clients.store');

Route::get('/cli/edit/{client}',[ClientController::class,'edit'])->name('client.edit');

Route::put('/cli/update/{client}',[ClientController::class,'update'])->name('clients.update');

Route::delete('/cli/destroy/{client}',[ClientController::class,'destroy'])->name('client.destroy');*/

Route::resource('/clients', ClientController::class);


/*Route::get('/rooms', [RoomController::class,'index'])->name('rooms.index');

Route::get('/rooms/{rooms}',[RoomController::class,'show'])->name('rooms.show');

Route::get('/roo/create',[RoomController::class,'create'])->name('rooms.create');

Route::post('/rooms/store',[RoomController::class,'store'])->name('rooms.store');

Route::get('/rooms/{room}/edit',[RoomController::class,'edit'])->name('rooms.edit');

Route::put('/rooms/{room}/update',[RoomController::class,'update'])->name('rooms.update');

Route::delete('/rooms/destroy/{room}',[RoomController::class,'destroy'])->name('rooms.destroy');*/

Route::resource('rooms', RoomController::class);

/*Route::get('/empleados',[EmpleadosController::class,'index'])->name('empleados.index');

Route::get('/empleado/{empleado}',[EmpleadosController::class,'find'])->name('empleado.find');

Route::get('/emp/create',[EmpleadosController::class,'create'])->name('empleados.create');

Route::post('/empleados/store',[EmpleadosController::class,'store'])->name('empleados.store');

Route::get('/empleados/edit/{empleado}',[EmpleadosController::class,'edit'])->name('empleados.edit');

Route::put('/empleados/{empleado}/update',[EmpleadosController::class,'update'])->name('empelados.update');

Route::delete('/empleados/destroy/{empleado}',[EmpleadosController::class,'destroy'])->name('empleados.destroy');*/

Route::resource('empleados', EmpleadosController::class);

/*Route::get('/edificios',[EdificioController::class,'index'])->name('edificios.index');

Route::get('/edificios/{edificio}',[EdificioController::class, 'show'])->name('edificios.show');

Route::get('/edi/create', [EdificioController::class, 'create'])->name('edificios.create');

Route::post('/edificios/store', [EdificioController::class,'store'])->name('edificios.store');

Route::get('/edificios/edit/{edificio}',[EdificioController::class,'edit'])->name('edificios.edit');

Route::put('/edificios/{edificio}/update',[EdificioController::class,'update'])->name('edificios.update');

Route::delete('/edificios/destroy/{edificio}',[EdificioController::class,'destroy'])->name('edificios.destroy');*/

Route::resource('edificios', EdificioController::class);