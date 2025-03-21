<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    public function index(){
        $ropa = [
            (object) [
                'id' => 81, 'nombre' => 'Chaquetas', 'imagen' => 'chaqueta.png', 'numero_productos' => 10,
                'categoria' => 'Hombre', 'subcategoria' => 'Abrigos', 'precio' => 1200.00,
                'precio_descuento' => 600.00, 'descuento' => '-50%', 'tallas' => ['M', 'G', 'EG']
            ],
            (object) [
                'id' => 82, 'nombre' => 'Bufandas', 'imagen' => 'bufanda.png', 'numero_productos' => 25,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 299.00,
                'precio_descuento' => 149.00, 'descuento' => '-50%', 'tallas' => []
            ],
            (object) [
                'id' => 83, 'nombre' => 'Zapatos', 'imagen' => 'zapatos.png', 'numero_productos' => 18,
                'categoria' => 'Hombre', 'subcategoria' => 'Calzado', 'precio' => 999.00,
                'precio_descuento' => 499.00, 'descuento' => '-50%', 'tallas' => ['CH', 'M', 'G']
            ],
            (object) [
                'id' => 84, 'nombre' => 'Botas', 'imagen' => 'botas.png', 'numero_productos' => 12,
                'categoria' => 'Mujer', 'subcategoria' => 'Calzado', 'precio' => 899.00,
                'precio_descuento' => 400.00, 'descuento' => '-55%', 'tallas' => ['M', 'G']
            ],
            (object) [
                'id' => 85, 'nombre' => 'Relojes', 'imagen' => 'reloj.png', 'numero_productos' => 8,
                'categoria' => 'Hombre', 'subcategoria' => 'Accesorios', 'precio' => 1500.00,
                'precio_descuento' => 750.00, 'descuento' => '-50%', 'tallas' => []
            ],
            (object) [
                'id' => 86, 'nombre' => 'Carteras', 'imagen' => 'cartera.png', 'numero_productos' => 20,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 499.00,
                'precio_descuento' => 249.00, 'descuento' => '-50%', 'tallas' => []
            ],
            (object) [
                'id' => 87, 'nombre' => 'Cinturones', 'imagen' => 'cinturon.png', 'numero_productos' => 30,
                'categoria' => 'Hombre', 'subcategoria' => 'Accesorios', 'precio' => 299.00,
                'precio_descuento' => 150.00, 'descuento' => '-50%', 'tallas' => []
            ],
            (object) [
                'id' => 88, 'nombre' => 'Sombreros', 'imagen' => 'sombrero.png', 'numero_productos' => 15,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 399.00,
                'precio_descuento' => 199.00, 'descuento' => '-50%', 'tallas' => []
            ],
        ];
        return view('descuentos.index', compact('ropa'));
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
                'id' => 3, 'nombre' => 'Mochilas', 'imagen' => 'Mochilas.jpg', 'numero_productos' => 5,
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
             
        return view('home', compact('descuentos', 'ropa_recientes'));
    }
}
