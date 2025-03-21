<footer class="footer">
    <div class="footer-top"></div>
    <div class="footer-grid">
        <div class="footer-column">
            <img src="{{ asset('images/logo_ipn.webp') }}" alt="Logo IPN" class="footer-logo">
            <h3 class="text-lg font-semibold mb-4">Conoce Más de Nosotros</h3>
            <p class="text-sm text-gray-600">Compra segura | Envío gratis a partir de $1,299 | Recibo de 3 a 5 días
                hábiles | Cambio de talla gratis</p>
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
            {{-- <div class="social-icons">
                <a href="#" class="social-icon"><img src="{{ asset('images/facebook.png') }}" alt="Facebook"></a>
                <a href="#" class="social-icon"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
                <a href="#" class="social-icon"><img src="{{ asset('images/twitter.png') }}" alt="Twitter"></a>
            </div> --}}
            <div class="social-icons">
                <li class="icon facebook">
                    <a href="https://www.facebook.com/share/1562qnrfdi/">
                        <span class="tooltip">Facebook</span>
                        <span><i class="fab fa-facebook-f"></i></span>
                    </a>
                </li>
                <li class="icon twitter">
                    <a href="https://x.com/IPN_MX?t=8F7J_3iVKMQ7f65j5xNQAw&s=09">
                        <span class="tooltipT">Twitter</span>
                        <span><i class="fab fa-twitter"></i></span>
                    </a>
                </li>
                <li class="icon instagram">
                    <a href="https://www.instagram.com/ipn_oficial?igsh=MTJhdHRxcXFxcXZ4bA==">
                        <span class="tooltip">Instagram</span>
                        <span><i class="fab fa-instagram"></i></span>
                    </a>
                </li>
            </div>
            <h3 class="text-lg font-semibold mt-4 mb-2">Información</h3>
            <ul class="list-unstyled">
                <li><a href="#" class="footer-link">Términos y condiciones</a></li>
                <li><a href="#" class="footer-link">Aviso de privacidad</a></li>
                <li><a href="#" class="footer-link">Política de cambios</a></li>
                <li><a href="/contacto" class="footer-link">Contacto</a></li>
                <li><a href="/sobrenosotros" class="footer-link">Sobre Nosotros</a></li>
            </ul>
        </div>
    </div>
    <div class="text-center mt-8 text-sm text-gray-600">
        © {{ date('Y') }} Instituto Politécnico Nacional, México.
    </div>
</footer>
