<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPN Store - Ropa y Accesorios</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" />

    <link rel="preconnect" href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Scripts (Flowbite, si estás usándolo) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</head>

<body class="bg-white text-gray-900 font-sans">

    @include('partials.navbar')
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @yield('seccion')

        @yield('content')

    </main>

    @include('partials.footer')

    <div id="carrito-modal" class="carrito-modal">
        <div class="carrito-modal-content">
            <span id="carrito-close" class="carrito-close">⬅️</span>
            <h2>Carrito de Compras</h2>
            <ul id="carrito-items" class="carrito-items"></ul>
            <div class="carrito-total">
                Total: $<span id="carrito-total">0.00</span>
            </div>
            <div class="carrito-actions">
                <button class="Ir-a-carrito" id="Ir-a-carrito">Ver Carrito</button>
                <button class="clear-carrito" id="clear-carrito">Vaciar Carrito</button>
            </div>
        </div>
    </div>

<div id="purchase-notification" class="fixed bottom-4 left-4 z-50 hidden">
    <div class="bg-white text-gray-800 p-4 rounded-xl shadow-2xl max-w-sm border border-gray-100 transform transition-all duration-300 hover:scale-105">
        <div class="flex items-center space-x-4">
           
            <div class="flex-shrink-0 w-16 h-16">
                <img id="product-image" class="w-full h-full object-cover rounded-lg" src="" alt="Producto comprado">
            </div>
         
            <div class="flex-1">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-semibold text-gray-900">
                        <span id="buyer-name" class="text-indigo-600"></span> compró:
                    </p>
                    <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <p class="text-base font-medium text-gray-700 mt-1" id="product-name"></p>
                <p class="text-xs text-gray-500 mt-1" id="time-ago">Hace unos segundos</p>
            </div>
        </div>
    </div>
</div>

<style>
    .animate-fade-in {
        animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
        0% { 
            opacity: 0; 
            transform: translateY(20px) scale(0.95); 
        }
        100% { 
            opacity: 1; 
            transform: translateY(0) scale(1); 
        }
    }

    #purchase-notification {
        transition: all 0.3s ease-in-out;
    }
</style>

<script>

    const names = ['María', 'Juan', 'Ana', 'Pedro', 'Sofía', 'Carlos', 'Laura'];
    const products = [
        { name: 'Playera Casual', image: 'https://http2.mlstatic.com/D_NQ_NP_737799-MLM31231032152_062019-O.webp' },
        { name: 'Jeans Slim', image: 'https://http2.mlstatic.com/D_NQ_NP_737799-MLM31231032152_062019-O.webp' },
        { name: 'Sudadera Oversized', image: 'https://http2.mlstatic.com/D_NQ_NP_737799-MLM31231032152_062019-O.webp' },
        { name: 'Vestido Elegante', image: 'https://http2.mlstatic.com/D_NQ_NP_737799-MLM31231032152_062019-O.webp' },
        { name: 'Chamarra de Cuero', image: 'https://http2.mlstatic.com/D_NQ_NP_737799-MLM31231032152_062019-O.webp' },
        { name: 'Accesorios Set', image: 'https://http2.mlstatic.com/D_NQ_NP_737799-MLM31231032152_062019-O.webp' },
        { name: 'Camisa Formal', image: 'https://http2.mlstatic.com/D_NQ_NP_737799-MLM31231032152_062019-O.webp' }
    ];

    function showPurchaseNotification() {
        const notification = document.getElementById('purchase-notification');
        const buyerName = document.getElementById('buyer-name');
        const productName = document.getElementById('product-name');
        const productImage = document.getElementById('product-image');

        const randomName = names[Math.floor(Math.random() * names.length)];
        const randomProduct = products[Math.floor(Math.random() * products.length)];

        
        buyerName.textContent = randomName;
        productName.textContent = randomProduct.name;
        productImage.src = randomProduct.image;

       
        notification.classList.remove('hidden');
        notification.classList.add('animate-fade-in');

     
        setTimeout(() => {
            notification.classList.remove('animate-fade-in');
            notification.classList.add('hidden');
        }, 5000);
    }

function startNotificationLoop() {
    showPurchaseNotification();
    setTimeout(startNotificationLoop, 10000);
}


document.addEventListener('DOMContentLoaded', () => {
    startNotificationLoop();
});

 
    document.addEventListener('DOMContentLoaded', () => {
        startNotificationLoop();
    });
</script>


<div class="fixed bottom-4 right-4 z-50">
    <a href="https://wa.me/1234567890?text=¡Hola! Quiero más información" 
       target="_blank" 
       class="flex items-center justify-center w-14 h-14 bg-white-500 rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 transform hover:scale-110">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" 
             alt="WhatsApp" 
             class="w-8 h-8">
    </a>
</div>


    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>

</html>
