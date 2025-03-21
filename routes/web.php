<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RopaController;
use App\Http\Controllers\lomascompradoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DescuentoController;
use App\Http\Controllers\SobrenosotrosController;
use App\Http\Controllers\carritoController;
use App\Http\Controllers\HombreController;
use App\Http\Controllers\MujerController;
use App\Http\Controllers\ProximamenteController;
Route::get('/', function () {
    return view('home');
});

Route::get('/carrito', function () {
    return view('Carrito.carrito');
})->name('carrito');

//////ROPA
Route::get('/ropa', [RopaController::class, 'index'])->name('ropa.index');
Route::get('/', [RopaController::class, 'home'])->name('home');
/////LO MAS COMPRADO
// Route::get('/lomascomprado', [lomascompradoController::class, 'index'])->name('lomascomprado.index');
Route::get('/lomascomprado', [lomascompradoController::class, 'hombre'])->name('lomascomprado.index');

///CONTACTO
Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');

//SOBRENOSOTROS
Route::get('/sobrenosotros', [SobrenosotrosController::class, 'index'])->name('sobrenosotros.index');
Route::get('/descuentos', [DescuentoController::class, 'index'])->name('descuentos.index');



///////SUBCATEGORIA MUJER
Route::get('/ropa/mujer', [MujerController::class, 'index'])->name('ropa/mujer.index');
Route::get('/ropa/mujer/sudaderasSueteres', [MujerController::class, 'sudaderasSueteres'])->name('ropa/mujer.sudaderasSueteres');

/////SUBCATEGORIA HOMBRE
Route::get('/ropa/hombre', [HombreController::class, 'index'])->name('ropa/hombre.index');
Route::get('/ropa/hombre/hombreSudaderasSueteres', [HombreController::class, 'HombreSudaderasSueteres'])->name('ropa.hombre.hombreSudaderasSueteres');
Route::get('/ropa/hombre/chamarrasChalecos', [HombreController::class, 'chamarrasChalecos'])->name('ropa.hombre.chamarrasChalecos');

/////SUBCATEGORIA Proximamente
Route::get('/proximamente', [ProximamenteController::class, 'index'])->name('proximamente.index');