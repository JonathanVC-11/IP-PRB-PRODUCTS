document.addEventListener('DOMContentLoaded', () => {
    const cartModal = document.getElementById('carrito-modal');
    const closeModalButton = document.getElementById('carrito-close');
    const cartItemsList = document.getElementById('carrito-items');
    const cartTotal = document.getElementById('carrito-total');
    const clearCartButton = document.getElementById('clear-carrito');
    const cartCount = document.getElementById('cart-count');
    const irACarritoButton = document.getElementById('Ir-a-carrito');

    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function openCart() {
        cartModal.classList.add('show');
    }

    function closeCart() {
        cartModal.classList.remove('show');
    }

    function updateCartUI() {
        cartItemsList.innerHTML = '';
        if (cart.length === 0) {
            cartItemsList.innerHTML = '<li>No hay productos en el carrito.</li>';
            cartTotal.textContent = '0.00';
            cartCount.textContent = '0';
            return;
        }

        let total = 0;
        cart.forEach((item, index) => {
            const li = document.createElement('li');
            li.innerHTML = `
                <div style="display: flex; align-items: center; gap: 10px;">
                    <img src="${item.imagen}" alt="${item.nombre}" style="width: 50px; height: 50px; object-fit: cover;">
                    <div>
                        <span>${item.nombre}<br>
                        Precio: $${item.precio.toFixed(2)}<br>
                        Cantidad: ${item.cantidad || 1}<br>
                        ${item.talla ? `Talla: ${item.talla}` : ''}
                        </span>
                    </div>
                    <button class="carrito-remove" data-index="${index}">×</button>
                </div>
            `;
            cartItemsList.appendChild(li);
            total += item.precio * (item.cantidad || 1);
        });

        cartTotal.textContent = total.toFixed(2);
        cartCount.textContent = cart.length;
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    document.querySelectorAll('.carrito-icon').forEach(icon => {
        icon.addEventListener('click', openCart);
    });

    irACarritoButton.addEventListener('click', () => {
        window.location.href = '/carrito';
    });

    function addToCart(product) {
        const selectTalla = product.element.closest('.product-grid, .product-grid-Home-Recomendados, .product-grid-Vista-Ropa-Cards, .product-grid-Vista-LoMasComprado-Card')
            ?.querySelector('.Tallas-LoNuevo, .Tallas-Home-Recomendados, .Tallas-Vista-Ropa-Cards, .Tallas-Vista-LoMasComprado-Card');
        const talla = selectTalla ? selectTalla.value : null;

        const cantidadSpan = product.element.closest('.product-grid, .product-grid-Home-Recomendados, .product-grid-Vista-Ropa-Cards, .product-grid-Vista-LoMasComprado-Card')
            ?.querySelector('.MasMenos span, .MasMenos-Home-Recomendados span, .MasMenos-Vista-Ropa-Cards span, .MasMenos-Vista-LoMasComprado-Card span');
        const cantidad = cantidadSpan ? parseInt(cantidadSpan.textContent) : 1;

        cart.push({
            id: product.id,
            nombre: product.nombre,
            precio: product.precio,
            talla,
            cantidad,
            imagen: product.imagen
        });
        updateCartUI();
        openCart();
    }

    cartItemsList.addEventListener('click', (e) => {
        if (e.target.classList.contains('carrito-remove')) {
            const index = parseInt(e.target.getAttribute('data-index'));
            cart.splice(index, 1);
            updateCartUI();
        }
    });

    document.querySelectorAll('.social li a[data-tip="Add to Cart"], .social-Home-Recomendados li a[data-tip="Add to Cart"], .social-Vista-Ropa-Cards li a[data-tip="Add to Cart"], .social-Vista-LoMasComprado-Card li a[data-tip="Add to Cart"]').forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const productData = button.getAttribute('data-product');
            if (productData) {
                const product = JSON.parse(productData);
                product.element = button;
                addToCart(product);
            }
        });
    });

    closeModalButton.addEventListener('click', closeCart);

    clearCartButton.addEventListener('click', () => {
        cart = [];
        localStorage.removeItem('cart');
        updateCartUI();
    });

    document.querySelectorAll('.MasMenos button, .MasMenos-Home-Recomendados button, .MasMenos-Vista-Ropa-Cards button, .MasMenos-Vista-LoMasComprado-Card button').forEach(button => {
        button.addEventListener('click', (e) => {
            const span = e.target.parentElement.querySelector('span');
            let cantidad = parseInt(span.textContent);
            if (e.target.textContent === '+') {
                cantidad++;
            } else if (e.target.textContent === '-' && cantidad > 1) {
                cantidad--;
            }
            span.textContent = cantidad;
        });
    });

    updateCartUI();
});