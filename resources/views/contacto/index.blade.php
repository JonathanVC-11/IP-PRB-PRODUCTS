@extends('layouts.app')

@section('content')
<div class="contact-form max-w-5xl mx-auto px-4 py-8">
    <div class="text-center mb-6">
        <h2 class="text-2xl font-semibold">Envíanos un mensaje</h2>
        <p class="text-gray-600">¡Nos encantaría ayudarte! Completa el formulario a continuación con tus datos y estaremos encantados de responder a tus preguntas.</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Mapa -->
        <div>
            <section>
                <div id="map" class="map-container"></div>
            </section>
        </div>
        
        <!-- Formulario -->
        <div>
            <form action="/action_page.php" class="bg-white p-6 rounded-lg shadow-md">
                <label for="fname" class="block text-gray-700 font-medium">NOMBRE (Requerido)</label>
                <input type="text" id="fname" name="firstname" placeholder="Nombre.." 
                    class="w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-300">
                
                <label for="lname" class="block text-gray-700 font-medium mt-4">APELLIDOS (Requerido)</label>
                <input type="text" id="lname" name="lastname" placeholder="Apellidos.." 
                    class="w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-300">
                
                <label for="country" class="block text-gray-700 font-medium mt-4">Estado</label>
                <select id="country" name="Estado" 
                    class="w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-300">
                    <option value="mexico">Estado de México</option>
                    <option value="guadalajara">Guadalajara</option>
                    <option value="monterrey">Monterrey</option>
                </select>
                
                <label for="subject" class="block text-gray-700 font-medium mt-4">Mensaje</label>
                <textarea id="subject" name="subject" placeholder="Escribe tu mensaje.." 
                    class="w-full mt-1 p-2 border rounded-md focus:ring focus:ring-blue-300 h-32"></textarea>
                
                <input type="submit" value="Enviar" 
                    class="w-full mt-4 bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
            </form>
            
            <!-- Ubicación -->
            <div class="mt-4 text-gray-700 text-center md:text-left">
                <p><span class="font-semibold">Ubicación:</span> Av. Instituto Politécnico Nacional, Ciudad de México, México</p>
            </div>
        </div>
    </div>
</div>

@endsection