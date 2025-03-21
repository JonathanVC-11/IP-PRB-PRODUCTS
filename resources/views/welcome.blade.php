<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPN Store - Ropa y Accesorios</title>

  
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
  
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body class="bg-white text-gray-900 font-sans">
   
    <header x-data="{ open: false }" class="bg-white text-gray-900 py-4 sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/">
                    <img src="https://via.placeholder.com/100x40?text=TEC+Store" alt="IPN Store Logo" class="h-10">
                </a>
            </div>
    
            <!-- Barra de búsqueda -->
            <div class="flex-1 mx-6">
                <div class="relative">
                    <input type="text" placeholder="Buscar Sudadera..." class="w-full py-2 px-4 rounded-full border border-gray-300 text-black">
                    <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                </div>
            </div>
    
            <!-- Menú de escritorio -->
            <nav class="hidden md:flex space-x-4">
                <a href="#" class="hover:text-[#00AEEF]">Novedades</a>
                <a href="#" class="hover:text-[#00AEEF]">Ropa</a>
                <a href="#" class="hover:text-[#00AEEF]">Accesorios</a>
                <a href="#" class="hover:text-[#00AEEF]">Marketplace</a>
                <a href="#" class="hover:text-[#00AEEF]">Regalos</a>
                <a href="#" class="hover:text-[#00AEEF]">Marcas</a>
                <a href="#" class="hover:text-[#00AEEF]">Rebajas</a>
            </nav>
    
            <!-- Carrito y registro (solo escritorio) -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M7 7v10a2 2 0 002 2h6a2 2 0 002-2V7m-8 0h8M5 7h2m-2 0a1 1 0 011-1h12a1 1 0 011 1v10a1 1 0 01-1 1H6a1 1 0 01-1-1V7z"></path>
                    </svg>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                </a>
                <a href="#" class="hover:text-[#00AEEF]">Registrarse</a>
            </div>
    
            <!-- Botón hamburguesa para móviles -->
            <div class="md:hidden">
                <button @click="open = !open" class="focus:outline-none">
                    <div class="w-8 h-1 bg-black my-1"></div>
                    <div class="w-8 h-1 bg-black my-1"></div>
                    <div class="w-8 h-1 bg-black my-1"></div>
                </button>
            </div>
        </div>
    
        <!-- Menú móvil (se despliega al hacer clic en el botón) -->
        <div x-show="open" class="md:hidden absolute left-0 top-full w-full bg-white shadow-md">
            <nav class="flex flex-col space-y-2 p-4">
                <a href="#" class="hover:text-[#00AEEF]">Novedades</a>
                <a href="#" class="hover:text-[#00AEEF]">Ropa</a>
                <a href="#" class="hover:text-[#00AEEF]">Accesorios</a>
                <a href="#" class="hover:text-[#00AEEF]">Marketplace</a>
                <a href="#" class="hover:text-[#00AEEF]">Regalos</a>
                <a href="#" class="hover:text-[#00AEEF]">Marcas</a>
                <a href="#" class="hover:text-[#00AEEF]">Rebajas</a>
            </nav>
        </div>
    </header>
    

   
    <section class="relative mb-12">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&h=400&q=80" alt="Hero Image" class="w-full h-[400px] object-cover">
        <div class="absolute inset-0 bg-[#722F37] bg-opacity-50 flex items-center justify-center text-white text-center">
            <div>
                <h1 class="text-4xl font-bold mb-4">Chamarras Universitarias</h1>
                <p class="text-xl mb-6">Sudaderas PO - 15% OFF</p>
                <a href="#" class="px-6 py-3 bg-[#00AEEF] text-white rounded-full btn-tec hover:shadow-md transition-all">Compra aquí</a>
            </div>
        </div>
        <div class="absolute bottom-4 left-4 bg-white text-black px-4 py-2 rounded">
            Envío gratis en órdenes mayores a $1299
        </div>
    </section>

    
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <section class="mb-12">
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">Lo Más Buscado</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=300&q=80" alt="Sudadera" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-2">Sudadera Borregos Azul</h3>
                        <p class="text-sm text-gray-600 mb-2">$899.00</p>
                        <div class="flex justify-between items-center">
                            <select class="border p-1 rounded">
                                <option>CH</option>
                                <option>M</option>
                                <option>G</option>
                                <option>EG</option>
                            </select>
                            <div class="flex items-center">
                                <button class="px-2 py-1 bg-gray-200">-</button>
                                <span class="px-2">1</span>
                                <button class="px-2 py-1 bg-gray-200">+</button>
                            </div>
                            <button class="px-4 py-2 btn-add-cart rounded-full">Añadir al Carrito</button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=300&q=80" alt="Chamarra" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-2">Chamarra Universitaria</h3>
                        <p class="text-sm text-gray-600 mb-2">$1,104.15</p>
                        <button class="px-4 py-2 btn-add-cart rounded-full">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">Lanzamientos</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=300&q=80" alt="Sudadera" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-2">Sudadera Frida Kahlo</h3>
                        <p class="text-sm text-gray-600 mb-2">$999.00</p>
                        <button class="px-4 py-2 btn-add-cart rounded-full">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">Estilos para Ti</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=300&q=80" alt="Playera" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-2">Playera Borregos</h3>
                        <p class="text-sm text-gray-600 mb-2">$599.00</p>
                        <button class="px-4 py-2 btn-add-cart rounded-full">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-3xl font-semibold mb-6 text-gray-900">Productos Vistos Recientemente</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="product-card bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&h=300&q=80" alt="Chamarra" class="w-full h-48 object-cover rounded-t-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-medium mb-2">Chamarra Universitaria</h3>
                        <p class="text-sm text-gray-600 mb-2">$1,104.15</p>
                        <button class="px-4 py-2 btn-add-cart rounded-full">Añadir al Carrito</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

   
    <footer class="footer">
        <div class="footer-top"></div>
        <div class="footer-grid">
            <div class="footer-column">
                <img src="{{ asset('images/logo_ipn.webp') }}" alt="Logo IPN" class="footer-logo">
                <h3 class="text-lg font-semibold mb-4">Conoce Más de Nosotros</h3>
                <p class="text-sm text-gray-600">Compra segura | Envío gratis a partir de $1,299 | Recibo de 3 a 5 días hábiles | Cambio de talla gratis</p>
                <p class="text-sm text-gray-600 mt-2">"La Técnica al Servicio de la Patria"</p>
            </div>
            <div class="footer-column">
                <h3 class="text-lg font-semibold mb-4">Suscríbete a nuestro Newsletter</h3>
                <form action="#" method="POST">
                    <input type="email" class="footer-input" placeholder="Ingresa tu dirección Email">
                    <button type="submit" class="btn btn-maroon w-full">¡Suscríbete!</button>
                </form>
            </div>
            <div class="footer-column">
                <h3 class="text-lg font-semibold mb-4">Síguenos en...</h3>
                <div class="social-icons">
                    <a href="#" class="social-icon"><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a>
                    <a href="#" class="social-icon"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
                    <a href="#" class="social-icon"><img src="{{ asset('images/twitter.png') }}" alt="Twitter"></a>
                </div>
                <h3 class="text-lg font-semibold mt-4 mb-2">Información</h3>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Términos y condiciones</a></li>
                    <li><a href="#" class="footer-link">Aviso de privacidad</a></li>
                    <li><a href="#" class="footer-link">Política de cambios</a></li>
                    <li><a href="/contacto" class="footer-link">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-8 text-sm text-gray-600">
            © {{ date('Y') }} Instituto Politécnico Nacional, México.
        </div>
    </footer>

  
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
    <script>
    
    </script>
</body>
</html>