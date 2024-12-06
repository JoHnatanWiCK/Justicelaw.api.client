document.addEventListener("DOMContentLoaded", () => {
    const filterDropdown = document.getElementById("category-filter");
    const cards = document.querySelectorAll(".card");

    filterDropdown.addEventListener("change", () => {
        const selectedCategory = filterDropdown.value.toLowerCase();

        // Iterar sobre todas las tarjetas
        cards.forEach((card) => {
            const categorySpan = card.querySelector(".category");

            // Comprobar si la tarjeta contiene la categoría seleccionada
            if (categorySpan && (categorySpan.textContent.toLowerCase().includes(selectedCategory) || selectedCategory === "")) {
                card.style.display = "block"; // Mostrar si coincide
            } else {
                card.style.display = "none"; // Ocultar si no coincide
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.getElementById("search-input");
    const cards = document.querySelectorAll(".card");

    searchInput.addEventListener("input", () => {
        const searchTerm = searchInput.value.toLowerCase();

        cards.forEach((card) => {
            const title = card.querySelector(".title")?.textContent.toLowerCase() || "";
            const description = card.querySelector(".description")?.textContent.toLowerCase() || "";
            const category = card.querySelector(".category")?.textContent.toLowerCase() || "";

            // Verificar si la búsqueda coincide con el título, descripción o categoría
            if (title.includes(searchTerm) || description.includes(searchTerm) || category.includes(searchTerm)) {
                card.style.display = "block"; // Mostrar tarjeta
            } else {
                card.style.display = "none"; // Ocultar tarjeta
            }
        });
    });
});
