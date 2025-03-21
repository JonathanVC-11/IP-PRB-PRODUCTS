<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HombreController extends Controller
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
            
        ];
        return view('ropa.hombre.index', compact('ropa'));
    }
    public function HombreSudaderasSueteres(){
        $ropa = [
            (object) [
                'id' => 1, 'nombre' => 'Sudadera Clásica', 'imagen' => 'sudadera.webp', 'numero_productos' => 15,
                'categoria' => 'Hombre', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 899.00,
                'precio_descuento' => 120.00, 'descuento' => '-20%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 89, 'nombre' => 'Suéter de Algodón', 'imagen' => 'sueter_algodon.png', 'numero_productos' => 12,
                'categoria' => 'Hombre', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 799.00,
                'precio_descuento' => 399.00, 'descuento' => '-50%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 90, 'nombre' => 'Hoodie Oversize', 'imagen' => 'hoodie_oversize.png', 'numero_productos' => 10,
                'categoria' => 'Hombre', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 999.00,
                'precio_descuento' => 499.00, 'descuento' => '-50%', 'tallas' => ['M', 'G', 'EG']
            ],
            (object) [
                'id' => 91, 'nombre' => 'Sudadera con Cierre', 'imagen' => 'sudadera_cierre.png', 'numero_productos' => 8,
                'categoria' => 'Hombre', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 899.00,
                'precio_descuento' => 449.00, 'descuento' => '-50%', 'tallas' => ['CH', 'M', 'G']
            ],
            (object) [
                'id' => 92, 'nombre' => 'Suéter de Lana', 'imagen' => 'sueter_lana.png', 'numero_productos' => 7,
                'categoria' => 'Hombre', 'subcategoria' => 'Sudaderas y Suéteres', 'precio' => 1199.00,
                'precio_descuento' => 599.00, 'descuento' => '-50%', 'tallas' => ['M', 'G', 'EG']
            ],
        ];
        
             
        return view('ropa.hombre.hombreSudaderasSueteres', compact('ropa'));
    }
    public function chamarrasChalecos(){
        $ropa = [
            (object) [
                'id' => 93, 'nombre' => 'Chamarra de Cuero', 'imagen' => 'chamarra_cuero.png', 'numero_productos' => 10,
                'categoria' => 'Hombre', 'subcategoria' => 'Chamarras y Chalecos', 'precio' => 1999.00,
                'precio_descuento' => 999.00, 'descuento' => '-50%', 'tallas' => ['CH', 'M', 'G', 'EG']
            ],
            (object) [
                'id' => 94, 'nombre' => 'Chamarra Acolchonada', 'imagen' => 'chamarra_acolchonada.png', 'numero_productos' => 8,
                'categoria' => 'Hombre', 'subcategoria' => 'Chamarras y Chalecos', 'precio' => 1599.00,
                'precio_descuento' => 799.00, 'descuento' => '-50%', 'tallas' => ['M', 'G', 'EG']
            ],
            (object) [
                'id' => 95, 'nombre' => 'Chaleco Deportivo', 'imagen' => 'chaleco_deportivo.png', 'numero_productos' => 12,
                'categoria' => 'Hombre', 'subcategoria' => 'Chamarras y Chalecos', 'precio' => 999.00,
                'precio_descuento' => 499.00, 'descuento' => '-50%', 'tallas' => ['CH', 'M', 'G']
            ],
            (object) [
                'id' => 96, 'nombre' => 'Chamarra Impermeable', 'imagen' => 'chamarra_impermeable.png', 'numero_productos' => 6,
                'categoria' => 'Hombre', 'subcategoria' => 'Chamarras y Chalecos', 'precio' => 1399.00,
                'precio_descuento' => 699.00, 'descuento' => '-50%', 'tallas' => ['M', 'G', 'EG']
            ],
            (object) [
                'id' => 97, 'nombre' => 'Chaleco Casual', 'imagen' => 'chaleco_casual.png', 'numero_productos' => 9,
                'categoria' => 'Hombre', 'subcategoria' => 'Chamarras y Chalecos', 'precio' => 1199.00,
                'precio_descuento' => 599.00, 'descuento' => '-50%', 'tallas' => ['CH', 'M', 'G']
            ],
        ];
        
             
        return view('ropa.hombre.chamarrasChalecos', compact('ropa'));
    }
}
