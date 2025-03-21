@extends('layouts.app')

@section('content')
    <!--   -->
    {{-- <div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
    </div> --}}
    <div class="container-banner-Home">
        <!-- Swiper Container -->
        <div class="swiper verticle-animation">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide Banner-Home">
                    <div class="slide-container">
                        <div class="image-container">
                            <img src="{{ asset('images/logo_ipn.webp') }}" alt="">
                        </div>
                        <div class="content-box-Banner-Home">
                            <div class="title-Banner-Home" data-swiper-parallax="-600">
                                Venta hasta 50% de descuento
                            </div>
                            <div class="Texto-Banner-Home" data-swiper-parallax="-900">
                                Desde ropa y accesorios hasta productos exclusivos, el sitio celebra la moda como una
                                expresión única para cada momento especial. ¡Un lugar donde la tradición y la modernidad
                                se encuentran!
                            </div>
                            <a href="#" class="btn btn-mas hover">Más</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide Banner-Home">
                    <div class="slide-container">

                        <div class="content-box-Banner-Home">
                            <div class="title-Banner-Home" data-swiper-parallax="-600">
                                Más Productos
                            </div>
                            <div class="Texto-Banner-Home" data-swiper-parallax="-900">
                                Desde prendas y accesorios hasta artículos exclusivos, el sitio celebra la moda como una expresión única para cada ocasión especial. ¡Donde la tradición y la modernidad convergen!
                            </div>
                            <a href="#" class="btn btn-mas hover">Más</a>
                        </div>
                        <div class="image-container">
                            <img src="{{ asset('images/logo_ipn.webp') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>

            <!-- Navigation Buttons -->
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
        {{-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> --}}
    </div>
    <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10" />
    <!--flex de filtro -->
    <div class="contenedor">
        <!-- Filtro -->
        <div class="filtro">
            <button>TOP</button>
            <button>T-SHIRT</button>
            <button>DRESS</button>
            <button>SETS</button>
            <button>SHIRT</button>
        </div>

        <section class="LoNuevo">
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">Lo Nuevo</h2>
            <div class="CardContainer-LoNuevo">
                <div class="swiper-container-LoNuevo">
                    <div class="swiper-wrapper">
                        @foreach ($ropa as $item)
                            <div class="swiper-slide">
                                <div class="product-grid">
                                    <div class="product-imagen-LoNuevo">
                                        <!-- Imagen del producto -->
                                        <img src="{{ asset('images/' . $item->imagen) }}" alt="{{ $item->nombre }}">
                                        <!-- Etiqueta de descuento -->
                                        @if ($item->descuento)
                                            <span class="product-descuento-label">{{ $item->descuento }}</span>
                                        @endif
                                    </div>
                                    <div class="product-content-LoNuevo">
                                        <!-- Nombre del producto -->
                                        <h3 class="title-LoNuevo"><a>{{ $item->nombre }}</a></h3>
                                        <!-- Precios -->
                                        <div class="precio-LoNuevo">
                                            ${{ number_format($item->precio, 2) }}
                                            @if ($item->precio_descuento)
                                                <span>${{ number_format($item->precio_descuento, 2) }}</span>
                                            @endif
                                        </div>
                                        <!-- Tallas y cantidad -->
                                        <div class="Datos-LoNuevo">
                                            @if (!empty($item->tallas))
                                                <select class="Tallas-LoNuevo">
                                                    @foreach ($item->tallas as $talla)
                                                        <option>{{ $talla }}</option>
                                                    @endforeach
                                                </select>
                                            @endif
                                            <div class="MasMenos">
                                                <button class="px-2 py-1 bg-gray-200">+</button>
                                                <span class="px-2">1</span>
                                                <button class="px-2 py-1 bg-gray-200">-</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Botones sociales -->
                                    <ul class="social">
                                        <li><a data-tip="Quick View"><i class="fa-solid fa-eye"></i></a></li>
                                        <li><a data-tip="Wishlist"><i class="fa-solid fa-heart"></i></a></li>
                                        <li><a data-tip="Add to Cart" data-product='{!! json_encode([
                                            'id' => $item->id,
                                            'nombre' => $item->nombre,
                                            'precio' => $item->precio,
                                            'tallas' => $item->tallas ?? [],
                                            'imagen' => asset('images/' . $item->imagen)
                                        ]) !!}'><i
                                                    class="fa-solid fa-cart-plus"></i></a></li>
                                        <li><a data-tip="Compare"><i class="fa-solid fa-code-compare"></i></a></li>
                                    </ul>
                                </div>
                                <pre style="display: none;">{{ print_r($item, true) }}</pre>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Navigation Buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </section>
    </div>
    <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10" />
    <section class="bg-white white:bg-gray-900">
        <!--MODAL DE LOS PRODUCTOS DEL HOME-->

        <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
            Productos Recomendados<br class="hidden md:block" />
        </h2>
        <div class="container px-6 py-8 mx-auto">
            <div class="lg:flex lg:-mx-2">

                <div class="relative lg:w-1/5 lg:px-2 lg:space-y-4">
                    <!-- Botón hamburguesa (solo visible en pantallas pequeñas) -->
                    <button id="menu-toggle" class="lg:hidden block text-gray-600 dark:text-gray-300 focus:outline-none">
                        <i class="fa-solid fa-bars text-2xl"></i>
                    </button>

                    <!-- Menú de navegación (siempre visible en pantallas grandes) -->
                    <div id="menu"
                        class="hidden lg:block space-y-3 bg-white dark:bg-gray-900 p-4 lg:p-0 lg:bg-transparent lg:dark:bg-transparent rounded-lg shadow-md lg:shadow-none absolute lg:relative lg:sticky lg:top-0 left-0 w-48 lg:w-auto z-10">

                        <a href="#"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Chamarras y
                            abrigos</a>
                        <a href="#"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Sudaderas</a>
                        <a href="#"
                            class="block font-medium text-gray-600 dark:text-gray-500 hover:underline">Camisas</a>
                        <a href="#"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Playeras</a>
                        <a href="#"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Blazers</a>
                        <a href="#"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Jeans</a>
                        <a href="#"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Gorras</a>
                        <a href="#"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Uniformes</a>
                        <a href="#"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Cazadoras</a>
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
                    <!-- Cards -->
                    <section class="CardContainer-Home-Recomendados">
                        @foreach ($ropa_recientes as $producto)
                            <div class="product-grid-Home-Recomendados">
                                <div class="product-imagen-Home-Recomendados">
                                    <!-- Imagen del producto -->
                                    <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">

                                    <!-- Etiqueta de descuento (si existe) -->
                                    @if ($producto->descuento)
                                        <span
                                            class="product-descuento-label-Home-Recomendados">{{ $producto->descuento }}</span>
                                    @endif
                                </div>
                                <div class="product-content-Home-Recomendados">
                                    <!-- Nombre del producto -->
                                    <h3 class="title-Home-Recomendados"><a>{{ $producto->nombre }}</a></h3>

                                    <!-- Precios -->
                                    <div class="precio-Home-Recomendados">
                                        ${{ number_format($producto->precio, 2) }}
                                        @if ($producto->precio_descuento)
                                            <span>${{ number_format($producto->precio_descuento, 2) }}</span>
                                        @endif
                                    </div>

                                    <!-- Tallas y cantidad -->
                                    <div class="Datos-Home-Recomendados">
                                        <!-- Selector de tallas (si existen) -->
                                        @if (!empty($producto->tallas))
                                            <select class="Tallas-Home-Recomendados">
                                                @foreach ($producto->tallas as $talla)
                                                    <option>{{ $talla }}</option>
                                                @endforeach
                                            </select>
                                        @endif

                                        <!-- Botones de cantidad -->
                                        <div class="MasMenos-Home-Recomendados">
                                            <button class="px-2 py-1 bg-gray-200">+</button>
                                            <span class="px-2">1</span>
                                            <button class="px-2 py-1 bg-gray-200">-</button>
                                        </div>
                                    </div>

                                    <!-- Iconos sociales -->
                                    <ul class="social-Home-Recomendados">
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
                </div>
            </div>
        </div>
    </section>
    <!--DIVISOR DE SECCION-->

    <!-- SECCIÓN DIVIDIDA-->
    <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10" />
    <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
        Comprar por categoria<br class="hidden md:block" />
    </h2>
    <!-- component -->
    <div class="flex justify-center items-center">
        <div class="2xl:mx-auto 2xl:container py-12 px-4 sm:px-6 xl:px-20 2xl:px-0 w-full">
            <div class="flex flex-col justify-center items-center space-y-10">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 md:gap-x-4 md:gap-x-8 w-full">

                    <!-- Imagen 1 -->
                    <div class="relative group flex justify-center items-center h-full w-full">
                        <img class="object-center object-cover h-full w-full rounded-md transform transition-transform duration-300 group-hover:scale-110"
                            src="https://i.ibb.co/ThPFmzv/omid-armin-m-VSb6-PFk-VXw-unsplash-1-1.png" alt="girl-image" />
                        <button
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 bottom-4 z-10 absolute text-base font-medium leading-none text-white py-3 w-36 bg-black rounded-md transition-colors duration-300 hover:bg-[#722F37]">Ropa</button>
                    </div>

                    <!-- Imagen 2 y 3 en columna -->
                    <div class="flex flex-col space-y-4 md:space-y-8 mt-4 md:mt-0">
                        <div class="relative group flex justify-center items-center h-full w-full">
                            <img class="object-center object-cover h-full w-full rounded-md transform transition-transform duration-300 group-hover:scale-110"
                                src="https://i.ibb.co/SXZvYHs/irene-kredenets-DDqx-X0-7v-KE-unsplash-1.png"
                                alt="shoe-image" />
                            <button
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 bottom-4 z-10 absolute text-base font-medium leading-none text-white py-3 w-36 bg-black rounded-md transition-colors duration-300 hover:bg-[#722F37]">Rebajas</button>
                        </div>

                        <div class="relative group flex justify-center items-center h-full w-full">
                            <img class="object-center object-cover h-full w-full rounded-md transform transition-transform duration-300 group-hover:scale-110"
                                src="https://i.ibb.co/Hd1pVxW/louis-mornaud-Ju-6-TPKXd-Bs-unsplash-1-2.png"
                                alt="watch-image" />
                            <button
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 bottom-4 z-10 absolute text-base font-medium leading-none text-white py-3 w-36 bg-black rounded-md transition-colors duration-300 hover:bg-[#722F37]">Regalos</button>
                        </div>
                    </div>

                    <!-- Imagen 4 -->
                    <div class="relative group justify-center items-center h-full w-full hidden lg:flex">
                        <img class="object-center object-cover h-full w-full rounded-md transform transition-transform duration-300 group-hover:scale-110"
                            src="https://i.ibb.co/PTtRBLL/olive-tatiane-Im-Ez-F9-B91-Mk-unsplash-1.png"
                            alt="girl-image" />
                        <button
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 bottom-4 z-10 absolute text-base font-medium leading-none text-white py-3 w-36 bg-black rounded-md transition-colors duration-300 hover:bg-[#722F37]">Accesorios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10" />
    <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
        Estilos en todas las categorías<br class="hidden md:block" />
    </h2>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <!-- Ajuste en grid para móviles -->
            <div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                
                <!-- Producto 1 -->
                <div class="group relative">
                    <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#"><span aria-hidden="true" class="absolute inset-0"></span> Hombre</a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">2025</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                            </svg></p>
                    </div>
                </div>
    
                <!-- Producto 2 -->
                <div class="group relative">
                    <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/home-page-03-favorite-02.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#"><span aria-hidden="true" class="absolute inset-0"></span> Mujer</a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">2025</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                            </svg></p>
                    </div>
                </div>
    
                <!-- Producto 3 -->
                <div class="group relative">
                    <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/category-page-04-image-card-08.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#"><span aria-hidden="true" class="absolute inset-0"></span> Accesorios</a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">2025</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                            </svg></p>
                    </div>
                </div>
    
                <!-- Producto 4 -->
                <div class="group relative">
                    <img src="https://tailwindcss.com/plus-assets/img/ecommerce-images/category-page-02-image-card-05.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="aspect-square w-full rounded-md bg-gray-200 object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#"><span aria-hidden="true" class="absolute inset-0"></span> Conjunto</a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">2025</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314" />
                            </svg></p>
                    </div>
                </div>
    
            </div>
        </div>
    </div>


    <!--DIVISOR DE SECCION-->
    <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10" />

    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <div class="relative mb-12 px-3 lg:mb-0">
            <div class="mb-2 flex justify-center">
                <span class="text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                        <path
                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5" />
                    </svg>

                </span>
            </div>
            <h5 class="mb-6 font-bold text-primary">Servicio al Cliente</h5>
            <h6 class="mb-0 font-normal text-gray-600">
    Estamos aquí para ayudarte con cualquier pregunta o inquietud que tenga, las 24 horas del día los 7 días de la semana
</h6>
            <div
                class="absolute right-0 top-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:via-neutral-400 lg:block">
            </div>
        </div>
        <div class="relative mb-12 px-3 lg:mb-0">
            <div class="mb-2 flex justify-center">
                <span class="text-primary">

                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-box2" viewBox="0 0 16 16">
                        <path
                            d="M2.95.4a1 1 0 0 1 .8-.4h8.5a1 1 0 0 1 .8.4l2.85 3.8a.5.5 0 0 1 .1.3V15a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4.5a.5.5 0 0 1 .1-.3zM7.5 1H3.75L1.5 4h6zm1 0v3h6l-2.25-3zM15 5H1v10h14z" />
                    </svg>
                </span>
            </div>
            <h5 class="mb-6 font-bold text-primary">Devolución</h5>
            <h6 class="mb-0 font-normal text-gray-600">Si no esta satisfecho con su compra, simplemente devuélvela
                dentro de los 14 días para obtener un reembolso </h6>
            <div
                class="absolute right-0 top-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:via-neutral-400 lg:block">
            </div>
        </div>
        <div class="relative mb-12 px-3 lg:mb-0">
            <div class="mb-2 flex justify-center">
                <span class="text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-award" viewBox="0 0 16 16">
                        <path
                            d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702z" />
                        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1z" />
                    </svg>

                </span>
            </div>
            <h5 class="mb-6 font-bold text-primary">Nuestras Garantías</h5>
            <h6 class="mb-0 font-normal text-gray-600">Enviamos nuestros productos a todo el mundo, haciéndolos
                accesibles a clientes de todo el mundo.</h6>
            <div
                class="absolute right-0 top-0 hidden h-full min-h-[1em] w-px self-stretch border-t-0 bg-gradient-to-tr from-transparent via-neutral-500 to-transparent opacity-25 dark:via-neutral-400 lg:block">
            </div>
        </div>
        <div class="relative mb-12 px-3 lg:mb-0">
            <div class="mb-2 flex justify-center">
                <span class="text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-truck" viewBox="0 0 16 16">
                        <path
                            d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5zm1.294 7.456A2 2 0 0 1 4.732 11h5.536a2 2 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456M12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2" />
                    </svg>

                </span>
            </div>
            <h5 class="mb-6 font-bold text-primary">Envíos a todo México</h5>
            <h6 class="mb-0 font-normal text-gray-600">Enviamos nuestros productos a todo el mundo, haciéndolos
                accesibles a clientes de todo el mundo.</h6>
        </div>
    </div>

@endsection
