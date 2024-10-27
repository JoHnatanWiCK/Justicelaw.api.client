

var container = document.getElementById('container')
var slider = document.getElementById('slider');
var slides = document.getElementsByClassName('slide').length;
var buttons = document.getElementsByClassName('btn');


var currentPosition = 0;
var currentMargin = 0;
var slidesPerPage = 0;
var slidesCount = slides - slidesPerPage;
var containerWidth = container.offsetWidth;
var prevKeyActive = false;
var nextKeyActive = true;


window.addEventListener("resize", checkWidth);


function checkWidth() {
	containerWidth = container.offsetWidth;
	setParams(containerWidth);
}


function setParams(w) {
	if (w < 551) {
		slidesPerPage = 1;
	} else {
		if (w < 901) {
			slidesPerPage = 2;
		} else {
			if (w < 1101) {
				slidesPerPage = 3;
			} else {
				slidesPerPage = 4;
			}
		}
	}
	slidesCount = slides - slidesPerPage;
	if (currentPosition > slidesCount) {
		currentPosition -= slidesPerPage;
	};
	currentMargin = - currentPosition * (100 / slidesPerPage);
	slider.style.marginLeft = currentMargin + '%';
	if (currentPosition > 0) {
		buttons[0].classList.remove('inactive');
	}
	if (currentPosition < slidesCount) {
		buttons[1].classList.remove('inactive');
	}
	if (currentPosition >= slidesCount) {
		buttons[1].classList.add('inactive');
	}
}


setParams();


function slideRight() {
	if (currentPosition != 0) {
		slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
		currentMargin += (100 / slidesPerPage);
		currentPosition--;
	};
	if (currentPosition === 0) {
		buttons[0].classList.add('inactive');
	}
	if (currentPosition < slidesCount) {
		buttons[1].classList.remove('inactive');
	}
};


function slideLeft() {
	if (currentPosition != slidesCount) {
		slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
		currentMargin -= (100 / slidesPerPage);
		currentPosition++;
	};
	if (currentPosition == slidesCount) {
		buttons[1].classList.add('inactive');
	}
	if (currentPosition > 0) {
		buttons[0].classList.remove('inactive');
	}
};


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

  document.addEventListener('DOMContentLoaded', function () {


    document.getElementById('infoImp').addEventListener('click', function(){
      window.location.href="/informacionAutor"
      });

      document.getElementById('infoIm').addEventListener('click', function(){
        window.location.href="/informacionContrato"
        });

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

    document.getElementById('btnConsumidor').addEventListener('click', function(){
      window.location.href="/informacionConsumidor"
    });

    document.getElementById('btnAlimenticia').addEventListener('click', function(){
      window.location.href="/informacionPension"
    });

    document.getElementById('btnArrendamiento').addEventListener('click', function(){
      window.location.href="/informacionArrendamiento"
    });

    document.getElementById('btnNegocio').addEventListener('click', function(){
      window.location.href="/informacionNegocio"
    });

    document.getElementById('btnLaboral').addEventListener('click', function(){
      window.location.href="/derechosTrabajadores"
    });
  });


  document.getElementById('divorcio').addEventListener('click', function(){
	window.location.href="/informacionDivorcio"
  });



  document.getElementById('despido').addEventListener('click', function(){
	window.location.href="/informacionDespido"
  });

  document.getElementById('accidente').addEventListener('click', function(){
	window.location.href="/informacionAccidente"
  });

  document.getElementById('testamento').addEventListener('click', function(){
	window.location.href="/informacionTestamento"
  });


  document.getElementById('alimentp').addEventListener('click', function(){
	window.location.href="/informacionPension"
  });


  document.getElementById('arrendamiento').addEventListener('click', function(){
	window.location.href="/informacionArrendamiento"
  });


  document.getElementById('arrendamiento').addEventListener('click', function(){
	window.location.href="/informacionArrendamiento"
  });

  document.getElementById('btnRegistro').addEventListener('click', function(e) {
    window.location.href = this.href;
});



