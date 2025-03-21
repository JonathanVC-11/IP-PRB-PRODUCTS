<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RopaController extends Controller
{
    public function index(){
        $ropa = [
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
                'id' => 3, 'nombre' => 'Mochilas', 'imagen' => 'Mochilas.png', 'numero_productos' => 5,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 599.00,
                'precio_descuento' => 499.00, 'descuento' => '-17%', 'tallas' => []
            ],
            (object) [
                'id' => 4, 'nombre' => 'Accesorios', 'imagen' => 'accesorios.png', 'numero_productos' => 20,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 199.00,
                'precio_descuento' => 150.00, 'descuento' => '-25%', 'tallas' => []
            ],
            (object) [
                'id' => 5, 'nombre' => 'Playeras', 'imagen' => 'playera3.png', 'numero_productos' => 30,
                'categoria' => 'Hombre', 'subcategoria' => 'Playeras', 'precio' => 499.00,
                'precio_descuento' => 399.00, 'descuento' => '-20%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 6, 'nombre' => 'Decoración', 'imagen' => 'Decoracion.png', 'numero_productos' => 10,
                'categoria' => 'Mujer', 'subcategoria' => 'Hogar', 'precio' => 299.00,
                'precio_descuento' => 250.00, 'descuento' => '-16%', 'tallas' => []
            ],
            (object) [
                'id' => 7, 'nombre' => 'Pants', 'imagen' => 'Pants.png', 'numero_productos' => 10,
                'categoria' => 'Hombre', 'subcategoria' => 'Pants y Shorts', 'precio' => 799.00,
                'precio_descuento' => 699.00, 'descuento' => '-12%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 8, 'nombre' => 'Tazas', 'imagen' => 'Tazas.png', 'numero_productos' => 10,
                'categoria' => 'Mujer', 'subcategoria' => 'Hogar', 'precio' => 199.00,
                'precio_descuento' => 149.00, 'descuento' => '-25%', 'tallas' => []
            ],
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
                'id' => 3, 'nombre' => 'Mochilas', 'imagen' => 'Mochilas.png', 'numero_productos' => 5,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 599.00,
                'precio_descuento' => 499.00, 'descuento' => '-17%', 'tallas' => []
            ],
            (object) [
                'id' => 4, 'nombre' => 'Accesorios', 'imagen' => 'accesorios.png', 'numero_productos' => 20,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 199.00,
                'precio_descuento' => 150.00, 'descuento' => '-25%', 'tallas' => []
            ],
            (object) [
                'id' => 5, 'nombre' => 'Playeras', 'imagen' => 'playera3.png', 'numero_productos' => 30,
                'categoria' => 'Hombre', 'subcategoria' => 'Playeras', 'precio' => 499.00,
                'precio_descuento' => 399.00, 'descuento' => '-20%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 6, 'nombre' => 'Decoración', 'imagen' => 'Decoracion.png', 'numero_productos' => 10,
                'categoria' => 'Mujer', 'subcategoria' => 'Hogar', 'precio' => 299.00,
                'precio_descuento' => 250.00, 'descuento' => '-16%', 'tallas' => []
            ],
            (object) [
                'id' => 7, 'nombre' => 'Pants', 'imagen' => 'Pants.png', 'numero_productos' => 10,
                'categoria' => 'Hombre', 'subcategoria' => 'Pants y Shorts', 'precio' => 799.00,
                'precio_descuento' => 699.00, 'descuento' => '-12%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 8, 'nombre' => 'Tazas', 'imagen' => 'Tazas.png', 'numero_productos' => 10,
                'categoria' => 'Mujer', 'subcategoria' => 'Hogar', 'precio' => 199.00,
                'precio_descuento' => 149.00, 'descuento' => '-25%', 'tallas' => []
            ],
        ];
        return view('ropa.index', compact('ropa'));
    }
    public function home(){
        $ropa = [
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
                'id' => 3, 'nombre' => 'Mochilas', 'imagen' => 'Mochilas.png', 'numero_productos' => 5,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 599.00,
                'precio_descuento' => 499.00, 'descuento' => '-17%', 'tallas' => []
            ],
            (object) [
                'id' => 4, 'nombre' => 'Accesorios', 'imagen' => 'accesorios.png', 'numero_productos' => 20,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 199.00,
                'precio_descuento' => 150.00, 'descuento' => '-25%', 'tallas' => []
            ],
            (object) [
                'id' => 5, 'nombre' => 'Playeras', 'imagen' => 'playera3.png', 'numero_productos' => 30,
                'categoria' => 'Hombre', 'subcategoria' => 'Playeras', 'precio' => 499.00,
                'precio_descuento' => 399.00, 'descuento' => '-20%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 6, 'nombre' => 'Decoración', 'imagen' => 'Decoracion.png', 'numero_productos' => 10,
                'categoria' => 'Mujer', 'subcategoria' => 'Hogar', 'precio' => 299.00,
                'precio_descuento' => 250.00, 'descuento' => '-16%', 'tallas' => []
            ],
            (object) [
                'id' => 7, 'nombre' => 'Pants', 'imagen' => 'Pants.png', 'numero_productos' => 10,
                'categoria' => 'Hombre', 'subcategoria' => 'Pants y Shorts', 'precio' => 799.00,
                'precio_descuento' => 699.00, 'descuento' => '-12%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 8, 'nombre' => 'Tazas', 'imagen' => 'Tazas.png', 'numero_productos' => 10,
                'categoria' => 'Mujer', 'subcategoria' => 'Hogar', 'precio' => 199.00,
                'precio_descuento' => 149.00, 'descuento' => '-25%', 'tallas' => []
            ],
        ];

        $ropa_recientes = [
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
             
        return view('home', compact('ropa', 'ropa_recientes'));
    }
}