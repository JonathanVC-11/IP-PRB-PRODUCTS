document.addEventListener("DOMContentLoaded", function () {
    const cartItemsContainer = document.getElementById("cart-items-container");
    const cartTotalElement = document.getElementById("cart-total");
    const cartCountElement = document.getElementById("cart-count");

    // Obtener carrito desde localStorage
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Verificar si hay productos en el carrito
    if (cart.length === 0) {
        cartItemsContainer.innerHTML = "<p>Tu carrito está vacío.</p>";
        cartTotalElement.innerHTML = "$0";
        cartCountElement.innerHTML = "0";
        return;
    }

    // Renderizar productos en el carrito
    let total = 0;
    cartItemsContainer.innerHTML = ""; // Limpiar contenido previo
    cart.forEach((item) => {
        total += item.price * item.quantity;
        const productHTML = `
            <div class="cart-item">
                <img src="${item.image}" alt="${item.title}" class="cart-item-image">
                <div class="cart-item-details">
                    <p class="cart-item-name">${item.title}</p>
                    <p class="cart-item-quantity">Cantidad: ${item.quantity}</p>
                    <p class="cart-item-price">Total: $${(item.price * item.quantity).toFixed(2)}</p>
                </div>
            </div>
        `;
        cartItemsContainer.innerHTML += productHTML;
    });

    // Actualizar el total y la cantidad de productos
    cartTotalElement.innerHTML = `$${total.toFixed(2)}`;
    cartCountElement.innerHTML = cart.length;
});
