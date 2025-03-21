<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lomascompradoController extends Controller
{
    public function index(){
        return view('lomascomprado.index');
    }
    
    public function hombre(){
        $hombre = [
            (object) [
                'id' => 1, 'nombre' => 'Sudaderas', 'imagen' => 'sudadera.webp', 'numero_productos' => 15,
                'categoria' => 'Hombre', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 899.00,
                'precio_descuento' => 120.00, 'descuento' => '-20%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 2, 'nombre' => 'Gorras', 'imagen' => 'gorra.png', 'numero_productos' => 8,
                'categoria' => 'Hombre', 'subcategoria' => 'Accesorios', 'precio' => 299.00,
                'precio_descuento' => 250.00, 'descuento' => '-15%', 'tallas' => []
            ],
            (object) [
                'id' => 5, 'nombre' => 'Playeras', 'imagen' => 'playera3.png', 'numero_productos' => 30,
                'categoria' => 'Hombre', 'subcategoria' => 'Playeras', 'precio' => 499.00,
                'precio_descuento' => 399.00, 'descuento' => '-20%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 7, 'nombre' => 'Pants', 'imagen' => 'Pants.png', 'numero_productos' => 10,
                'categoria' => 'Hombre', 'subcategoria' => 'Pants y Shorts', 'precio' => 799.00,
                'precio_descuento' => 699.00, 'descuento' => '-12%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
        ];
        return view('lomascomprado.index', compact('hombre'));
    }
}
