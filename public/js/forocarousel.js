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
            <img src="${item.image_url}" alt="${item.title}" />
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
    spaceBetween: 30, // Espacio entre slides
    loop: true, //No se detiene el carousel
    autoplay: {
        delay: 3000, // Cambia de slide automáticamente cada 3 segundos
        disableOnInteraction: false, // Permite continuar el autoplay después de interacciones
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
// Llama a fetchTrends al cargar la página
window.onload = fetchTrends;
