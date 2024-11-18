let currentIndex = 0;
let trendingItems = [];

function fetchTrends() {
    fetch('/api/trends') // Asegúrate de que esta ruta sea correcta
        .then(response => response.json())
        .then(data => {
            trendingItems = data;
            displayTrends();
        })
        .catch(error => console.error('Error fetching trends:', error));
}

function displayTrends() {
    const trendingItemsContainer = document.getElementById('trending-items');
    trendingItemsContainer.innerHTML = ''; // Limpiar contenedor

    trendingItems.forEach(item => {
        const div = document.createElement('div');
        div.classList.add('trending-item');
        div.innerHTML = `
            <h3>${item.title}</h3>
            <p>${item.description}</p>
            <a href="${item.link}" class="btn">Ver Más</a>
        `;
        trendingItemsContainer.appendChild(div);
    });
}

// Inicializar Swiper
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1, // Muestra un solo slide
    spaceBetween: 0, // Espacio entre slides
    loop: true, // No se detiene el carousel
    autoplay: {
        delay: 3500, // Cambia de slide automáticamente
        disableOnInteraction: false, // Permite continuar el autoplay después de interacciones
    },
    navigation: {
        nextEl: '.btn-next',
        prevEl: '.btn-prev',
    },
    on: {
        init: function () {
            updateNavigationThumbnails(this); // Actualiza las miniaturas al inicializar
        },
        slideChange: function () {
            updateNavigationThumbnails(this); // Actualiza las miniaturas al cambiar de slide
        }
    }
});

// Función para actualizar las miniaturas en los botones de navegación
function updateNavigationThumbnails(swiper) {
    const totalSlides = swiper.slides.length;
    const currentSlideIndex = swiper.activeIndex;

    // Calcula los índices de los slides siguiente y anterior
    const nextSlideIndex = (currentSlideIndex + 1) % totalSlides;
    const prevSlideIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;

    // Asigna las imágenes a los botones de navegación
    const nextSlideBackground = swiper.slides[nextSlideIndex].style.backgroundImage;
    const prevSlideBackground = swiper.slides[prevSlideIndex].style.backgroundImage;

    document.querySelector('.btn-next').style.backgroundImage = nextSlideBackground;
    document.querySelector('.btn-prev').style.backgroundImage = prevSlideBackground;
}

// Llama a fetchTrends al cargar la página
window.onload = fetchTrends;
