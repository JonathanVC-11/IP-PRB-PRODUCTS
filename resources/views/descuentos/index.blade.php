@extends('layouts.app')

@section('content')
<h1 class="text-center text-4xl font-bold text-gray-800">Productos en descuento</h1>
<!-- component -->
<div class="container mx-auto py-9 md:py-12 px-4 md:px-6">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    <div class="flex items-strech justify-center flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-6 lg:space-x-8">
      <div class="flex flex-col md:flex-row items-strech justify-between bg-gray-50 dark:bg-gray-800 py-6 px-6 md:py-12 lg:px-12 md:w-8/12 lg:w-7/12 xl:w-8/12 2xl:w-9/12">
        <div class="flex flex-col justify-center md:w-1/2">
          <h1 class="text-3xl lg:text-4xl font-semibold text-gray-800 dark:text-white">Rebajas</h1>
          <p class="text-base lg:text-xl text-gray-800 dark:text-white mt-2">En toda la tienda hasta del <span class="font-bold">50%</span></p>
        </div>
        <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center md:justify-end">
          <img src="{{ asset('images/sale2.png') }}" alt="" class="" />
        </div>
      </div>
      <div class="md:w-4/12 lg:w-5/12 xl:w-4/12 2xl:w-3/12 bg-gray-50 dark:bg-gray-800 py-6 px-6 md:py-0 md:px-4 lg:px-6 flex flex-col justify-center relative">
        <div class="flex flex-col justify-center">
          <h1 class="text-3xl lg:text-4xl font-semibold text-gray-800 dark:text-white">30%</h1>
          <p class="text-base lg:text-xl text-gray-800 dark:text-white">De descuento en  <span class="font-bold">Accesorios</span></p>
        </div>
        <div class="flex justify-end md:absolute md:bottom-4 md:right-4 lg:bottom-0 lg:right-0">
          <img src="{{ asset('images/sale.png') }}" alt="" class="md:w-20 md:h-20 lg:w-full lg:h-full" />
        </div>
      </div>
    </div>
  </div>
  <!--AGREGAR OTRA SECCION-->
  <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 dark:bg-white/10" />

<!--SECCION DE PRODUCTOS -->
 <!-- Tab Menu -->
 <div class="flex flex-wrap items-center  overflow-x-auto overflow-y-hidden py-10 justify-center   bg-white text-gray-800">
    <a rel="noopener noreferrer" href="#" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2text-gray-600">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing" viewBox="0 0 16 16">
        <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M6 6.75v8.5a.75.75 0 0 0 1.5 0V10.5a.5.5 0 0 1 1 0v4.75a.75.75 0 0 0 1.5 0v-8.5a.25.25 0 1 1 .5 0v2.5a.75.75 0 0 0 1.5 0V6.5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v2.75a.75.75 0 0 0 1.5 0v-2.5a.25.25 0 0 1 .5 0"/>
      </svg>
        <span>Hombre</span>
    </a>
    <a rel="noopener noreferrer" href="#" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2 rounded-t-lg text-gray-900">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-standing-dress" viewBox="0 0 16 16">
        <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.5 12.25V12h1v3.25a.75.75 0 0 0 1.5 0V12h1l-1-5v-.215a.285.285 0 0 1 .56-.078l.793 2.777a.711.711 0 1 0 1.364-.405l-1.065-3.461A3 3 0 0 0 8.784 3.5H7.216a3 3 0 0 0-2.868 2.118L3.283 9.079a.711.711 0 1 0 1.365.405l.793-2.777a.285.285 0 0 1 .56.078V7l-1 5h1v3.25a.75.75 0 0 0 1.5 0Z"/>
      </svg>
        <span>Mujer</span>
    </a>
    <a rel="noopener noreferrer" href="#" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4">
            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
        </svg>
        <span>Jersey</span>
    </a>
    <a rel="noopener noreferrer" href="#" class="flex items-center flex-shrink-0 px-5 py-3 space-x-2  text-gray-600">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-smartwatch" viewBox="0 0 16 16">
        <path d="M9 5a.5.5 0 0 0-1 0v3H6a.5.5 0 0 0 0 1h2.5a.5.5 0 0 0 .5-.5z"/>
        <path d="M4 1.667v.383A2.5 2.5 0 0 0 2 4.5v7a2.5 2.5 0 0 0 2 2.45v.383C4 15.253 4.746 16 5.667 16h4.666c.92 0 1.667-.746 1.667-1.667v-.383a2.5 2.5 0 0 0 2-2.45V8h.5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H14v-.5a2.5 2.5 0 0 0-2-2.45v-.383C12 .747 11.254 0 10.333 0H5.667C4.747 0 4 .746 4 1.667M4.5 3h7A1.5 1.5 0 0 1 13 4.5v7a1.5 1.5 0 0 1-1.5 1.5h-7A1.5 1.5 0 0 1 3 11.5v-7A1.5 1.5 0 0 1 4.5 3"/>
      </svg>
        <span>Accesorios</span>
    </a>
</div>


<section class="bg-white white:bg-gray-900">
  <!--MODAL DE LOS PRODUCTOS DEL HOME-->
  <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
      Descuentos<br class="hidden md:block" />
  </h2>
  <div class="container px-6 py-8 mx-auto">
      <div class="lg:flex lg:-mx-2">

      <div class="relative lg:w-1/5 lg:px-2 lg:space-y-4">
          <!-- Botón hamburguesa (solo visible en pantallas pequeñas) -->
          <button id="menu-toggle" class="lg:hidden block text-gray-600 dark:text-gray-300 focus:outline-none">
              <i class="fa-solid fa-bars text-2xl"></i>
          </button>
      
          <!-- Menú de navegación (siempre visible en pantallas grandes) -->
          <div id="menu" class="hidden lg:block space-y-3 bg-white dark:bg-gray-900 p-4 lg:p-0 lg:bg-transparent lg:dark:bg-transparent rounded-lg shadow-md lg:shadow-none absolute lg:relative lg:sticky lg:top-0 left-0 w-48 lg:w-auto z-10">

              <a href="#" class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Chamarras y abrigos</a>
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
                                            'imagen' => asset('images/' . $producto->imagen)
                                        ]) !!}'><i
                                                class="fa-solid fa-cart-plus"></i></a>
                                    </li>                                      <li><a data-tip="Compare"><i class="fa-solid fa-code-compare"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      @endforeach
                  </section>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection