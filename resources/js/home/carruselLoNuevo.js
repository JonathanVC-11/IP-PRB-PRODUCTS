// carrusel banner home
document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.swiper', {
      direction: 'horizontal',
      loop: true,
      parallax: true,
      speed: 1000,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    });
  });


// carrucel lo nuevo
document.addEventListener('DOMContentLoaded', function () {
  var swiper = new Swiper('.swiper-container-LoNuevo', {
    spaceBetween: 10,
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      pagination: {
      el: ".swiper-pagination",
      },
      loop: true,
      breakpoints: {
          320: {
              slidesPerView: 2.3,
          },
          480: {
              slidesPerView: 2.5,
          },
          667: {
              slidesPerView: 2.8,
          },
          920: {
              slidesPerView: 3.2,
          },
          1200: {
              slidesPerView: 4,
          }
      }
  });
});