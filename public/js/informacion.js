document.addEventListener("DOMContentLoaded", async () => {
    const apiUrl =
        "https://apijusticelaw-production.up.railway.app/v1/informations";
    const searchesUrl =
        "https://apijusticelaw-production.up.railway.app/v1/searches";
    const categoriesUrl =
        "https://apijusticelaw-production.up.railway.app/v1/forumCategories";
    const container = document.getElementById("informationContainer");
    const errorMessage = document.getElementById("errorMessage");
    const modal = document.getElementById("informationDetail");
    const closeModal = document.getElementById("closeModal");
    const maxLength = 150;

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

        // Iterar sobre cada información
        informations.forEach((info) => {
            let categoryName = "Sin categoría";
            if (info.category) {
                const categoryId = parseInt(info.category, 10);
                const category = categories.find(
                    (category) => category.id === categoryId
                );
                if (category) {
                    categoryName = category.name;
                }
            }

            const infoElement = document.createElement("div");
            infoElement.classList.add("info-informacion");

            const fullText = info.body || "Sin contenido disponible.";
            const shortText =
                fullText.length > maxLength
                    ? fullText.slice(0, maxLength) + "..."
                    : fullText;

            infoElement.innerHTML = `
                <div class="imagen-container">
                    <img src="${
                        info.cover_photo || "../../img/placeholder.png"
                    }" alt="${info.name || "Imagen no disponible"}"
                         class="informacion-imagen" 
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

            const readMoreButton = infoElement.querySelector(".leer-mas-btn");
            readMoreButton.addEventListener("click", async (event) => {
                event.preventDefault();

                const infoId = readMoreButton.getAttribute("data-id");

                try {
                    // Registrar la vista
                    await registrarVista(infoId);

                    // Obtener los detalles de la información por ID
                    const infoResponse = await fetch(`${apiUrl}/${infoId}`);
                    if (!infoResponse.ok) {
                        throw new Error(
                            "No se pudo obtener los detalles de la información."
                        );
                    }

                    const fullInfo = await infoResponse.json();
                    const data = fullInfo.information;

                    const modalImage = document.getElementById("infoImage");
                    modalImage.innerHTML = `
                        <img src="${
                            data.cover_photo || "../../img/placeholder.png"
                        }" alt="${data.name || "Imagen no disponible"}"
                             class="informacion-imagen" 
                             onerror="this.onerror=null;this.src='../../img/placeholder.png';">
                    `;

                    document.getElementById("infoTitle").textContent =
                        data.name || "Sin título";
                    document.getElementById("infoBody").textContent =
                        data.body || "No hay contenido disponible.";

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

    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (event) => {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });

    async function registrarVista(informacionId) {
        try {
            const response = await fetch(searchesUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({
                    informacion_id: informacionId,
                }),
            });

            const data = await response.json();

            if (!response.ok) {
                throw new Error(`Error del servidor: ${data.message}`);
            }

            console.log("Vista registrada exitosamente:", data.message);
        } catch (error) {
            console.error("Error al registrar la vista:", error);
            alert(`Error al registrar visita: ${error.message}`);
        }
    }
});
