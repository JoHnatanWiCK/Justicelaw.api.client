document.addEventListener("DOMContentLoaded", async () => {
    const apiUrl =
        "https://apijusticelaw-production.up.railway.app/v1/informations";
    const categoriesUrl =
        "https://apijusticelaw-production.up.railway.app/v1/forumCategories"; // URL de categorías
    const container = document.getElementById("informationContainer");
    const errorMessage = document.getElementById("errorMessage");
    const modal = document.getElementById("informationDetail"); // Modal
    const closeModal = document.getElementById("closeModal"); // Botón de cerrar
    const maxLength = 150; // Máximo número de caracteres para mostrar en el resumen

    try {
        // Obtener las informaciones desde la API
        const response = await fetch(apiUrl);
        if (!response.ok) {
            throw new Error("Error al obtener los datos del servidor.");
        }
        const informations = await response.json();

        if (!informations.length) {
            throw new Error("No se encontraron datos.");
        }

        // Obtener las categorías desde la API
        const categoriesResponse = await fetch(categoriesUrl);
        if (!categoriesResponse.ok) {
            throw new Error("Error al obtener las categorías.");
        }
        const categories = await categoriesResponse.json();

        // Iterar sobre cada información para mostrar sus detalles
        informations.forEach((info) => {
            let categoryName = "Sin categoría"; // Valor por defecto
            if (info.category) {
                const categoryId = parseInt(info.category, 10);
                const category = categories.find(
                    (category) => category.id === categoryId
                );
                if (category) {
                    categoryName = category.name;
                }
            }

            // Crear contenedor de información
            const infoElement = document.createElement("div");
            infoElement.classList.add("info-informacion");

            // Truncar el texto para mostrar un resumen
            const fullText = info.body || "Sin contenido disponible.";
            const shortText =
                fullText.length > maxLength
                    ? fullText.slice(0, maxLength) + "..."
                    : fullText;

            infoElement.innerHTML = `
                <div class="imagen-container">
                    <img src="${
                        info.cover_photo
                            ? info.cover_photo
                            : "../../img/placeholder.png"
                    }" 
                         alt="${
                             info.name || "Imagen no disponible"
                         }" class="informacion-imagen" 
                         onerror="this.onerror=null;this.src='../../img/placeholder.png';">
                </div>
                <div class="informacion-texto">
                    <h3>${info.name || "Sin nombre"}</h3>
                    <p>${shortText}</p>
                    <p><strong>Categoría:</strong> ${categoryName}</p>
                    <a href="#" class="leer-mas-btn" data-id="${
                        info.id
                    }">Leer más</a>
                </div>
            `;

            container.appendChild(infoElement);

            // Asignar el evento al hacer clic en el enlace "Leer más"
            const readMoreButton = infoElement.querySelector(".leer-mas-btn");

            readMoreButton.addEventListener("click", async (event) => {
                event.preventDefault(); // Evitar la redirección del enlace

                const infoId = readMoreButton.getAttribute("data-id"); // Obtener el ID de la información
                try {
                    // Obtener los detalles de la información por ID
                    const infoResponse = await fetch(`${apiUrl}/${infoId}`);
                    if (!infoResponse.ok) {
                        throw new Error(
                            "No se pudo obtener los detalles de la información."
                        );
                    }

                    const fullInfo = await infoResponse.json();
                    const data = fullInfo.information;

                    // Registrar la vista en la base de datos
                    await registrarVista(infoId); // Llamar a la función para registrar la vista

                    const modalImage = document.getElementById("infoImage");

                    const imageHTML = `
                        <img src="${
                            info.cover_photo
                                ? info.cover_photo
                                : "../../img/placeholder.png"
                        }" 
                             alt="${
                                 info.name || "Imagen no disponible"
                             }" class="informacion-imagen" 
                             onerror="this.onerror=null;this.src='../../img/placeholder.png';">
                    `;

                    // Insertar la imagen en el contenedor del modal
                    modalImage.innerHTML = imageHTML;

                    // Configurar el resto de los detalles del modal
                    document.getElementById("infoTitle").textContent =
                        data.name || "Sin título";
                    document.getElementById("infoBody").textContent =
                        data.body || "No hay contenido disponible.";

                    // Mostrar el modal
                    modal.style.display = "flex";
                    errorMessage.style.display = "none";
                } catch (error) {
                    console.error("Error al obtener los detalles:", error);
                    errorMessage.textContent = error.message;
                    errorMessage.style.display = "block";
                }
            });
        });

        errorMessage.style.display = "none";
    } catch (error) {
        console.error("Error al cargar la información:", error);
        errorMessage.textContent = error.message;
        errorMessage.style.display = "block";
    }

    // Cerrar el modal al hacer clic en el botón de cerrar
    closeModal.addEventListener("click", () => {
        modal.style.display = "none"; // Ocultar el modal
    });

    // Cerrar el modal si se hace clic fuera del contenido del modal
    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none"; // Ocultar el modal
        }
    });

    // Función para registrar la vista en la tabla searches
    async function registrarVista(informacionId) {
        try {
            const response = await fetch(
                "https://apijusticelaw-production.up.railway.app/v1/searches",
                {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify({
                        informacion_id: informacionId,
                        action: "view", // Ejemplo: para identificar que es una vista
                    }),
                }
            );

            if (!response.ok) {
                throw new Error("No se pudo registrar la vista.");
            }
            const data = await response.json();
            console.log(data.message); // Mensaje de éxito en consola
        } catch (error) {
            console.error("Error al registrar la vista:", error);
        }
    }
});
