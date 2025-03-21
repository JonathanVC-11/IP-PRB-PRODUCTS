@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:-mx-2">

        <div class="relative lg:w-1/5 lg:px-2 lg:space-y-4">
            <!-- Botón hamburguesa (solo visible en pantallas pequeñas) -->
            <button id="menu-toggle" class="lg:hidden block text-gray-600 dark:text-gray-300 focus:outline-none">
                <i class="fa-solid fa-bars text-2xl"></i>
            </button>

            <!-- Menú de navegación (siempre visible en pantallas grandes) -->
            <div id="menu"
                class="hidden lg:block space-y-3 bg-white dark:bg-gray-900 p-4 lg:p-0 lg:bg-transparent lg:dark:bg-transparent rounded-lg shadow-md lg:shadow-none absolute lg:relative lg:sticky lg:top-0 left-0 w-48 lg:w-auto z-10">

                <a href="#" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Chamarras y
                    abrigos</a>
                <a href="#" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Sudaderas</a>
                <a href="#" class="block font-medium text-gray-600 dark:text-gray-500 hover:underline">Camisas</a>
                <a href="#" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Playeras</a>
                <a href="#" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Blazers</a>
                <a href="#" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Jeans</a>
                <a href="#" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Gorras</a>
                <a href="#" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Uniformes</a>
                <a href="#" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Cazadoras</a>
            </div>
        </div>

        <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5 ">
            <div class="flex items-center justify-between text-sm tracking-widest uppercase ">
                <p class="text-gray-500 dark:text-gray-300">6 items</p>
                <div class="flex items-center">
                    <p class="text-gray-500 dark:text-gray-300">Productos</p>
                    <select class="font-medium text-gray-700 bg-transparent dark:text-gray-500 focus:outline-none">
                        <option value="#">Recomendados</option>
                        <option value="#">Talla</option>
                        <option value="#">Precio</option>
                    </select>
                </div>
            </div>
            {{-- mostrar productos --}}
            <section class="CardContainer-Vista-Ropa-Cards">
                @foreach ($ropa as $producto)
                    <div class="product-grid-Vista-Ropa-Cards">
                        <div class="product-imagen-Vista-Ropa-Cards">
                            <!-- Imagen del producto -->
                            <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">

                            <!-- Etiqueta de descuento (si existe) -->
                            @if ($producto->descuento)
                                <span class="product-descuento-label-Vista-Ropa-Cards">{{ $producto->descuento }}</span>
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
                                        'imagen' => asset('images/' . $producto->imagen),
                                    ]) !!}'><i
                                            class="fa-solid fa-cart-plus"></i></a>
                                </li>
                                <li><a data-tip="Compare"><i class="fa-solid fa-code-compare"></i></a></li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>
    </div>
@endsection
