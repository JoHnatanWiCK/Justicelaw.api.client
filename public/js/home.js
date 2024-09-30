var TrandingSlider = new Swiper('.tranding-slider', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: 2,

    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 110,
      modifier: 2,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });




  document.getElementById('btnRegistro').addEventListener('click', function(e) {
    window.location.href = this.href;
});


document.getElementById('btnInformacion').addEventListener('click', function(e) {
  window.location.href = '/informacionesAccidente';
});

