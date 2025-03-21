@extends('layouts.app')
@section('content')
<section class="py-24 relative xl:mr-0 lg:mr-5 mr-0">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-center items-start gap-8 flex">
                    <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                        <h6 class="text-gray-400 text-base font-normal leading-relaxed">Sobre Nosotros</h6>
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                            <h2
                            class="text-[#840026] text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                IPNSTORE</h2>
                            <p
                                class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                Es la tienda oficial del Instituto Politécnico Nacional, donde encontrarás productos con identidad Politécnica, 
                                incluyendo la emblemática mascota: el Burro Blanco. Desde sudaderas, chamarras, y playeras, hasta mochilas, envases para bebidas, 
                                gorras y peluches, mostramos con orgullo lo que significa ser parte de esta gran comunidad.

                                Cada compra no solo apoya la mejora de los campus y becas, sino que también fomenta el sentido de pertenencia a una institución con una historia llena de logros. 
                                Transformamos nuestro merchandising para destacar, no solo por su valor, sino por el impacto que tiene en la familia Politécnica.</p>
                        </div>
                    </div>
                    <div class="w-full flex-col justify-center items-start gap-6 flex">
                        <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                            <div
                                class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">Sudaderas  Chamarras</h4>
                                <p class="text-gray-500 text-base font-normal leading-relaxed"></p>
                            </div>
                            <div
                                class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">Accesorios
                                </h4>
                                <p class="text-gray-500 text-base font-normal leading-relaxed"></p>
                            </div>
                        </div>
                        <div class="w-full h-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                            <div
                                class="w-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">Playeras deportivas Playeras casuales</h4>
                                <p class="text-gray-500 text-base font-normal leading-relaxed"></p>
                            </div>
                            <div
                                class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                <h4 class="text-gray-900 text-2xl font-bold font-manrope leading-9">Todo en un mismo lugar
                                    </h4>
                                <p class="text-gray-500 text-base font-normal leading-relaxed"></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="w-full lg:justify-start justify-center items-start flex">
                <div
                    class="sm:w-[564px] w-full sm:h-[646px] h-full sm:bg-gray-100 rounded-3xl sm:border border-gray-200 relative">
                    <img src="{{ asset('images/logo_ipn.webp') }}" alt="" class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover">
                   
                </div>
            </div>
        </div>
    </div>
    
</section>
                                        
@endsection