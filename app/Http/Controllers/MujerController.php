<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MujerController extends Controller
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
                'id' => 3, 'nombre' => 'Mochilas', 'imagen' => 'Mochilas.jpg', 'numero_productos' => 5,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 599.00,
                'precio_descuento' => 499.00, 'descuento' => '-17%', 'tallas' => []
            ],
            (object) [
                'id' => 4, 'nombre' => 'Accesorios', 'imagen' => 'accesorios.png', 'numero_productos' => 20,
                'categoria' => 'Mujer', 'subcategoria' => 'Accesorios', 'precio' => 199.00,
                'precio_descuento' => 150.00, 'descuento' => '-25%', 'tallas' => []
            ],
            
        ];
        return view('ropa.mujer.index', compact('ropa'));
    }
    public function sudaderasSueteres(){
        $ropa = [
            (object) [
                'id' => 98, 'nombre' => 'Sudadera Crop', 'imagen' => 'sudadera_crop.png', 'numero_productos' => 15,
                'categoria' => 'Mujer', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 899.00,
                'precio_descuento' => 449.00, 'descuento' => '-50%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 99, 'nombre' => 'Suéter de Punto', 'imagen' => 'sueter_punto.png', 'numero_productos' => 12,
                'categoria' => 'Mujer', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 799.00,
                'precio_descuento' => 399.00, 'descuento' => '-50%', 'tallas' => ['CH', 'M', 'G']
            ],
            (object) [
                'id' => 100, 'nombre' => 'Hoodie con Estampado', 'imagen' => 'hoodie_estampado.png', 'numero_productos' => 10,
                'categoria' => 'Mujer', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 999.00,
                'precio_descuento' => 499.00, 'descuento' => '-50%', 'tallas' => ['M', 'G', 'EG']
            ],
            (object) [
                'id' => 101, 'nombre' => 'Sudadera con Cierre', 'imagen' => 'sudaderacierremujer.png', 'numero_productos' => 8,
                'categoria' => 'Mujer', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 899.00,
                'precio_descuento' => 449.00, 'descuento' => '-50%', 'tallas' => ['CH', 'M', 'G']
            ],
            (object) [
                'id' => 102, 'nombre' => 'Suéter Largo', 'imagen' => 'sueterLargo.png', 'numero_productos' => 7,
                'categoria' => 'Mujer', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 1199.00,
                'precio_descuento' => 599.00, 'descuento' => '-50%', 'tallas' => ['M', 'G', 'EG']
            ],
        ];
           
        return view('ropa.mujer.sudaderasSueteres', compact('ropa'));
    }

}
