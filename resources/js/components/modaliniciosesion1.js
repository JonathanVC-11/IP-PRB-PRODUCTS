document.addEventListener("DOMContentLoaded", function () {
    const loginModal = document.getElementById("customLoginModal");
    const openLogin = document.getElementById("navbar-login"); // Botón de "Iniciar sesión" en el navbar
    const closeLogin = document.querySelector("#customLoginModal .custom-close");

    // Abrir modal de inicio de sesión
    openLogin.addEventListener("click", function (event) {
        event.preventDefault();
        loginModal.style.display = "flex"; // Lo mostramos con flex para centrarlo
    });

    // Cerrar modal de inicio de sesión
    closeLogin.addEventListener("click", function () {
        loginModal.style.display = "none";
    });

    // Cerrar modal si el usuario hace clic fuera del contenido
    window.addEventListener("click", function (event) {
        if (event.target === loginModal) {
            loginModal.style.display = "none";
        }
    });
});
