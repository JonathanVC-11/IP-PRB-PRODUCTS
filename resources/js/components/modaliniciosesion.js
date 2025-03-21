document.addEventListener("DOMContentLoaded", function () {
    const loginModal = document.getElementById("customLoginModal");
    const registerModal = document.getElementById("customRegisterModal");
    const openLogin = document.querySelector(".profile-icon");
    const openRegister = document.getElementById("open-register-modal");
    const navbarRegister = document.getElementById("navbar-register"); 
    const closeLogin = document.querySelector(".custom-close");
    const closeRegister = document.querySelector(".close-register");
    const backToLogin = document.getElementById("back-to-login");

    // 🔹 Función para abrir modal con animación rápida
    function openModal(modal) {
        modal.style.display = "flex";  // Muestra el modal
        setTimeout(() => {
            modal.style.opacity = "1";
            modal.style.transform = "scale(1)";
        }, 10); // Breve delay para la transición
    }

    // 🔹 Función para cerrar modal con animación suave
    function closeModal(modal) {
        modal.style.opacity = "0";
        modal.style.transform = "scale(0.95)"; // Pequeño zoom out
        setTimeout(() => {
            modal.style.display = "none";
        }, 200); // Esconde el modal después de la animación
    }

    // 🔹 Abrir modal de registro desde el navbar
    navbarRegister.addEventListener("click", function (event) {
        event.preventDefault();
        openModal(registerModal);
    });

    // 🔹 Abrir modal de login (si el botón existe)
    if (openLogin) {
        openLogin.addEventListener("click", function (event) {
            event.preventDefault();
            openModal(loginModal);
        });
    }

    // 🔹 Cerrar modal de login
    if (closeLogin) {
        closeLogin.addEventListener("click", function () {
            closeModal(loginModal);
        });
    }

    // 🔹 Abrir modal de registro desde el login
    if (openRegister) {
        openRegister.addEventListener("click", function (event) {
            event.preventDefault();
            closeModal(loginModal);
            setTimeout(() => openModal(registerModal), 200); // Cambio suave
        });
    }

    // 🔹 Cerrar modal de registro
    if (closeRegister) {
        closeRegister.addEventListener("click", function () {
            closeModal(registerModal);
        });
    }

    // 🔹 Regresar al modal de login desde el modal de registro
    if (backToLogin) {
        backToLogin.addEventListener("click", function (event) {
            event.preventDefault();
            closeModal(registerModal);
            setTimeout(() => openModal(loginModal), 200);
        });
    }

    // 🔹 Cerrar modal si se hace clic fuera del contenido
    window.addEventListener("click", function (event) {
        if (event.target === loginModal) {
            closeModal(loginModal);
        }
        if (event.target === registerModal) {
            closeModal(registerModal);
        }
    });

    // 🔹 Cerrar modales si se hace clic fuera de ellos, en cualquier parte de la vista
    loginModal.addEventListener("click", function (event) {
        if (event.target === loginModal) {
            closeModal(loginModal);
        }
    });
    registerModal.addEventListener("click", function (event) {
        if (event.target === registerModal) {
            closeModal(registerModal);
        }
    });
});
