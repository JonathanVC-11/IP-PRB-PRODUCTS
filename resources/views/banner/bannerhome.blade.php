@extends('layouts.app')
@section('seccion2')
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
@endsection