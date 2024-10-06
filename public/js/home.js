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

document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('btnDivorcio').addEventListener('click', function () {
      window.location.href = "/informacionDivorcio"
  });

  document.getElementById('btnDespido').addEventListener('click', function(){
    window.location.href="/informacionDespido"
  });

  document.getElementById('btnAccidente').addEventListener('click', function(){
    window.location.href="/informacionAccidente"
  });

  document.getElementById('btnTestamento').addEventListener('click', function(){
    window.location.href="/informacionTestamento"
  });
});


