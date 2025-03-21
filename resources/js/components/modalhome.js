
    document.addEventListener("DOMContentLoaded", function () {
        const eyeIcon = document.getElementById('eyeIcon');

        eyeIcon.addEventListener('click', function () {
            const modal = document.querySelector('.fixed');
            modal.style.display = 'flex'; // Mostrar modal
        });

        window.closeModal = function () {
            const modal = document.querySelector('.fixed');
            modal.style.display = 'none'; // Ocultar modal
        };
    });

