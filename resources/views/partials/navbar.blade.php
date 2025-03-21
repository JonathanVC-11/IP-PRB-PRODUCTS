<header x-data="{ open: false, showLoginModal: false, showRegisterModal: false }" class="bg-white text-gray-900 py-4 sticky top-0 z-50 shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
        <!-- Logo -->
        <div class="flex items-center">
            <a href="/">
                <img src="{{ asset('images/logo_ipn.webp') }}" alt="IPN Logo" class="h-10">
            </a>
        </div>

        <!-- Barra de búsqueda -->
        <div class="flex-1 mx-6">
            <div class="relative">
                <input type="text" placeholder="Buscar Sudadera..."
                    class="w-full py-2 px-4 rounded-full border border-gray-300 text-black">
                <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Menú de escritorio -->
        <nav class="hidden md:flex space-x-4">
            <a href="/proximamente" class="hover:text-[#722F37]">Novedades</a>
            <a href="/ropa" class="hover:text-[#722F37]">Ropa</a>
            <a href="/lomascomprado" class="hover:text-[#722F37]">Accesorios</a>
            <a href="#" class="hover:text-[#722F37]">Marketplace</a>
            <a href="#" class="hover:text-[#722F37]">Regalos</a>
            <a href="#" class="hover:text-[#722F37]">Marcas</a>
            <a href="descuentos" class="hover:text-[#722F37]">Rebajas</a>
            <a class="carrito-icon">
                <i class="fa-solid fa-cart-shopping"></i>
                <span id="cart-count">0</span>
            </a>
        </nav>

        <!-- Carrito y registro (solo escritorio) -->
        <div class="hidden md:flex items-center space-x-4">
            <a href="#" class="relative">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 3h18M7 7v10a2 2 0 002 2h6a2 2 0 002-2V7m-8 0h8M5 7h2m-2 0a1 1 0 011-1h12a1 1 0 011 1v10a1 1 0 01-1 1H6a1 1 0 01-1-1V7z">
                    </path>
                </svg>
                <span
                    class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
            </a>
            <a href="#" @click="showLoginModal = true" class="hover:text-[#722F37]">Ingresar</a>
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
            <a href="/proximamente" class="hover:text-[#722F37]">Novedades</a>
            <a href="/ropa" class="hover:text-[#722F37]">Ropa</a>
            <a href="/lomascomprado" class="hover:text-[#722F37]">Accesorios</a>
            <a href="#" class="hover:text-[#722F37]">Marketplace</a>
            <a href="#" class="hover:text-[#722F37]">Regalos</a>
            <a href="#" class="hover:text-[#722F37]">Marcas</a>
            <a href="/descuentos" class="hover:text-[#722F37]">Rebajas</a>
            <a href="#" @click="showLoginModal = true" class="hover:text-[#722F37]">Ingresar</a>
            <a class="carrito-icon">Carrito</i>
                <span id="cart-count"></span>
            </a>
        </nav>
    </div>

    <!-- Modal de inicio de sesión -->
    <div x-show="showLoginModal"
        class="custom-modal fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center"
        @click.outside="showLoginModal = false" style="display: block;">
        <div class="custom-modal-content bg-white p-5 rounded-lg shadow-lg">
            <span class="custom-close cursor-pointer" @click="showLoginModal = false">&times;</span>
            <div class="container py-5">
                <div class="modal-logo">
                    <img src="{{ asset('images/logo_ipn.webp') }}" alt="Logo IPN">
                </div>
                <div class="login">
                    <header class="login__header">
                        <h2>Inicio de sesión</h2>
                    </header>
                    <form action="#" class="login__form" method="POST">
                        <div>
                            <label for="email">Correo</label>
                            <input type="email" id="email" name="email" placeholder="mail@address.com">
                        </div>
                        <div>
                            <label for="password">Contraseña</label>
                            <input type="password" id="password" name="password" placeholder="Contraseña">
                        </div>
                        <div>
                            <input class="button" type="submit" value="Iniciar">
                            <p class="text-center">
                                ¿No tienes una cuenta? <a href="#"
                                    @click="showLoginModal = false; showRegisterModal = true"
                                    class="register-link">Registrar</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Registro -->
    <div x-show="showRegisterModal"
        class="custom-modal fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center"
        @click.outside="showRegisterModal = false" style="display: block;">
        <div class="custom-modal-content bg-white p-5 rounded-lg shadow-lg">
            <span class="custom-close cursor-pointer" @click="showRegisterModal = false">&times;</span>
            <div class="container py-5">
                <div class="modal-logo">
                    <img src="{{ asset('images/logo_ipn.webp') }}" alt="IPN Logo">
                </div>
                <header class="login__header">
                    <h2>Registrar</h2>
                </header>
                <form action="#" class="login__form" method="POST">
                    <div>
                        <label for="name">Nombre Completo</label>
                        <input type="text" id="name" name="name" placeholder="Nombre Completo">
                    </div>
                    <div>
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="register-email" name="email" placeholder="mail@address.com">
                    </div>
                    <div>
                        <label for="password">Contraseña</label>
                        <input type="password" id="register-password" name="password" placeholder="Contraseña">
                    </div>
                    <div>
                        <label for="confirm-password">Confirmar Contraseña</label>
                        <input type="password" id="confirm-password" name="confirm-password"
                            placeholder="Confirmar Contraseña">
                    </div>
                    <div>
                        <input class="button" type="submit" value="Registrar">
                    </div>
                    <p class="text-center">
                        <a href="#" @click="showRegisterModal = false; showLoginModal = true"
                            class="register-link">Regresar</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    

</header>
