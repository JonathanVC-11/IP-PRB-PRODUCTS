@extends('layouts.app')
{{-- @section('seccion2')
    <div class="pt-32  bg-white">
        <h1 class="text-center text-4xl font-bold text-gray-800">Lo más comprado</h1>
    </div>
@endsection --}}
@section('content')

    <div
        class="flex flex-wrap items-center  overflow-x-auto overflow-y-hidden py-10 justify-center   bg-white text-gray-800">
        <a rel="noopener noreferrer" href="#" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-person-standing" viewBox="0 0 16 16">
                <path
                    d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0" />
            </svg>
            <span>Hombre</span>
        </a>
        <a rel="noopener noreferrer" href="#"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 rounded-t-lg text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-person-standing-dress" viewBox="0 0 16 16">
                <path
                    d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z" />
            </svg>
            <span>Mujer</span>
        </a>
        <a rel="noopener noreferrer" href="#"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                <polygon
                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                </polygon>
            </svg>
            <span>Jersey</span>
        </a>
        <a rel="noopener noreferrer" href="#"
            class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
                <circle cx="12" cy="12" r="10"></circle>
                <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon>
            </svg>
            <span>Accesorios</span>
        </a>
    </div>
    {{-- El id afecta al carrito --}}
        <button id="menu-toggle">
        </button>
    {{-- hasta aquí --}}
    <section class="CardContainer-Vista-Ropa-Cards">
        @foreach ($hombre as $producto)
            <div class="product-grid-Vista-Ropa-Cards">
                <div class="product-imagen-Vista-Ropa-Cards">
                    <!-- Imagen del producto -->
                    <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">

                    <!-- Etiqueta de descuento (si existe) -->
                    @if ($producto->descuento)
                        <span
                            class="product-descuento-label-Vista-Ropa-Cards">{{ $producto->descuento }}</span>
                    @endif
                </div>
                <div class="product-content-Vista-Ropa-Cards">
                    <!-- Nombre del producto -->
                    <h3 class="title-Vista-Ropa-Cards"><a>{{ $producto->nombre }}</a></h3>

                    <!-- Precios -->
                    <div class="precio-Vista-Ropa-Cards">
                        ${{ number_format($producto->precio, 2) }}
                        @if ($producto->precio_descuento)
                            <span>${{ number_format($producto->precio_descuento, 2) }}</span>
                        @endif
                    </div>

                    <!-- Tallas y cantidad -->
                    <div class="Datos-Vista-Ropa-Cards">
                        <!-- Selector de tallas (si existen) -->
                        @if (!empty($producto->tallas))
                            <select class="Tallas-Vista-Ropa-Cards">
                                @foreach ($producto->tallas as $talla)
                                    <option>{{ $talla }}</option>
                                @endforeach
                            </select>
                        @endif

                        <!-- Botones de cantidad -->
                        <div class="MasMenos-Vista-Ropa-Cards">
                            <button class="px-2 py-1 bg-gray-200">+</button>
                            <span class="px-2">1</span>
                            <button class="px-2 py-1 bg-gray-200">-</button>
                        </div>
                    </div>

                    <!-- Iconos sociales -->
                    <ul class="social-Vista-Ropa-Cards">
                        <li><a data-tip="Quick View"><i class="fa-solid fa-eye"></i></a></li>
                        <li><a data-tip="Wishlist"><i class="fa-solid fa-heart"></i></a></li>
                        <li>
                            <a data-tip="Add to Cart" data-product='{!! json_encode([
                                'id' => $producto->id,
                                'nombre' => $producto->nombre,
                                'precio' => $producto->precio,
                                'tallas' => $producto->tallas ?? [],
                                'imagen' => asset('images/' . $producto->imagen)
                            ]) !!}'><i
                                    class="fa-solid fa-cart-plus"></i></a>
                        </li>
                        <li><a data-tip="Compare"><i class="fa-solid fa-code-compare"></i></a></li>
                    </ul>
                </div>
            </div>
        @endforeach
    </section>

@endsection
