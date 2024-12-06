

document.addEventListener("DOMContentLoaded", async function () {
    // Obtener el lawyerId desde la URL
    const urlParams = new URLSearchParams(window.location.search);
    const lawyerId = window.location.pathname.split("/").pop();

    try {
        const response = await fetch(
            `https://apijusticelaw-production.up.railway.app/v1/verPerfilAbogado/${lawyerId}`
        );
        const data = await response.json();

        if (data && data.lawyer) {

            document.getElementById('nombreAbogado').textContent = data.lawyer.name + ' ' + data.lawyer.last_names;


            // Asignar los datos en la sección de Información Personal
            document.querySelector(".telefonoWeb p").textContent =
                data.verification.cell_phone || "No disponible";
            document.querySelector(".correoWeb p").textContent =
                data.lawyer.email || "No disponible";
            document.querySelector(".paisWeb p").textContent =
                data.verification.country || "No disponible";
            document.querySelector(".ciudadWeb p").textContent =
                data.verification.city || "No disponible";


                document.getElementById('fotoPerfilVer').src = data.profile ? data.profile.photo : '../../img/defaultPhoto.jpg';


            // Asignar la biografía en la sección de Presentación
            document.getElementById("biografiaUsuario").textContent =
                data.profile.biography || "No disponible";

            // Asignar las áreas de práctica
            const areasList = document.querySelector(".civ");
            areasList.innerHTML = ""; // Limpiar las áreas previas
            data.areas.forEach((area) => {
                const boxPractice = document.createElement("div");
                boxPractice.classList.add("box-practice");

                const practiceItem = document.createElement("div");
                practiceItem.classList.add("practice-item");
                practiceItem.classList.add(
                    area.toLowerCase().replace(/\s/g, "")
                ); // Convierte el nombre del área en un clase en minúsculas

                const practiceText = document.createElement("p");
                practiceText.classList.add("practice-text");
                practiceText.textContent = area;

                practiceItem.appendChild(practiceText);
                boxPractice.appendChild(practiceItem);
                areasList.appendChild(boxPractice);
            });

            // Ahora cargamos la hoja de vida (resume) desde la propiedad verification
            const resumeUrl = data.verification.resume;
            const hojaDeVidaSection = document.getElementById("hoja-de-vida");
            hojaDeVidaSection.innerHTML = ""; // Limpiar el contenido previo

            if (resumeUrl.endsWith(".pdf")) {
                const googleDocsUrl = `https://docs.google.com/viewer?url=${resumeUrl}&embedded=true`;
                const iframe = document.createElement("iframe");
                iframe.classList.add("iframeLarge");
                iframe.src = googleDocsUrl;
                iframe.frameBorder = "0";
                hojaDeVidaSection.appendChild(iframe);
            } else if (
                resumeUrl.endsWith(".docx") ||
                resumeUrl.endsWith(".doc")
            ) {
                const googleDocsUrl = `https://docs.google.com/viewer?url=${resumeUrl}&embedded=true`;
                const iframe = document.createElement("iframe");
                iframe.src = googleDocsUrl;
                iframe.classList.add("iframeLarge");
                iframe.frameBorder = "0";
                hojaDeVidaSection.appendChild(iframe);
            } else {
                const downloadLink = document.createElement("a");
                downloadLink.href = resumeUrl;
                downloadLink.download = true;
                downloadLink.textContent = "Descargar hoja de vida";
                hojaDeVidaSection.appendChild(downloadLink);
            }
        } else {
            console.log("No se encontró el abogado.");
        }
    } catch (error) {
        console.error("Error al obtener los detalles del abogado:", error);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".profile-nav ul li a");
    const indicator = document.querySelector(".profile-nav .indicator");
    const sections = document.querySelectorAll(".section");

    function setIndicatorPosition(link) {
        const rect = link.getBoundingClientRect();
        const navRect = link.closest(".profile-nav").getBoundingClientRect();
        indicator.style.left = `${rect.left - navRect.left}px`;
        indicator.style.width = `${rect.width}px`;
    }

    function showSection(targetId) {
        sections.forEach((section) => {
            if (section.id === targetId) {
                section.classList.add("active");
            } else {
                section.classList.remove("active");
            }
        });
    }

    navLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            navLinks.forEach((link) => link.classList.remove("active"));
            link.classList.add("active");
            setIndicatorPosition(link);
            const targetId = link.getAttribute("data-target");
            showSection(targetId);
        });
    });

    const activeLink = document.querySelector(".profile-nav ul li a.active");
    if (activeLink) {
        setIndicatorPosition(activeLink);
        const targetId = activeLink.getAttribute("data-target");
        showSection(targetId);
    }
});

document.querySelectorAll(".star").forEach((star) => {
    star.addEventListener("click", () => {
        const value = parseInt(star.getAttribute("data-value"));
        document.querySelectorAll(".star").forEach((s) => {
            s.classList.remove("filled");
            if (parseInt(s.getAttribute("data-value")) <= value) {
                s.classList.add("filled");
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".profile-nav-sm ul li a");
    const indicator = document.querySelector(".profile-nav-sm .indicator");
    const sections = document.querySelectorAll(".section-mov");

    function setIndicatorPosition(link) {
        const rect = link.getBoundingClientRect();
        const navRect = link.closest(".profile-nav-sm").getBoundingClientRect();
        indicator.style.left = `${rect.left - navRect.left}px`;
        indicator.style.width = `${rect.width}px`;
    }

    function showSection(targetId) {
        sections.forEach((section) => {
            if (section.id === targetId) {
                section.classList.add("active");
            } else {
                section.classList.remove("active");
            }
        });
    }

    navLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();
            navLinks.forEach((link) => link.classList.remove("active"));
            link.classList.add("active");
            setIndicatorPosition(link);
            const targetId = link.getAttribute("data-target");
            showSection(targetId);
        });
    });

    const activeLink = document.querySelector(".profile-nav-sm ul li a.active");
    if (activeLink) {
        setIndicatorPosition(activeLink);
        const targetId = activeLink.getAttribute("data-target");
        showSection(targetId);
    }
});
//eder cargar
async function cargarReseñas() {
    const token = localStorage.getItem("token");

    if (!token) {
        console.log("No estás autenticado.");
        return;
    }

    try {
        const lawyerId = window.location.pathname.split("/").pop();

        const response = await fetch(
            `https://apijusticelaw-production.up.railway.app/v1/reseñaAbogado/${lawyerId}`,
            {
                method: "GET",
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            }
        );

        if (response.ok) {
            const data = await response.json();
            console.log("Reseñas obtenidas:", data);

            const reseñasPublicadas =
                document.getElementById("reseñasPublicadas");

            reseñasPublicadas.innerHTML = "";

            data.reviews.forEach((review) => {
                const nuevaReseña = document.createElement("div");
                nuevaReseña.className = "reseña";

                nuevaReseña.innerHTML = `
                   <div class="reseña-content">
            <img src="${
                review.user.profile?.profile_photo || "../../img/fotoPerfil.png"
            }" alt="Foto de perfil" class="profile-photo">
            <div class="reseña-info">
                <p class="reseña-autor"><strong>${review.user.name} ${review.user.last_name}</strong></p>
                <p class="reseña-texto">${review.content}</p>
                <p class="reseña-fecha">${review.date}</p>
            </div>
        </div>
              `;

                reseñasPublicadas.appendChild(nuevaReseña);
            });
        } else {
            const errorData = await response.json();
            console.error("Error al cargar las reseñas:", errorData);
        }
    } catch (error) {
        console.error("Error:", error);
    }
}

document.addEventListener("DOMContentLoaded", cargarReseñas);
// parte de santiago enviar reseña
document.addEventListener('DOMContentLoaded', () => {

  const lawyerId = window.location.pathname.split('/').pop();

  document.getElementById('boton-publicar').addEventListener('click', async () => {
    const reseñaInput = document.getElementById('inputReseña');
    const textoReseña = reseñaInput.value.trim();

    if (!textoReseña) {
      alert('Por favor, escribe tu reseña.');
      return;
    }

    const reviewData = {
      content: textoReseña,
      lawyer_id: lawyerId
    };

    try {
      const token = localStorage.getItem('token');

      const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/enviarReviews', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Authorization': `Bearer ${token}`
        },
        body: JSON.stringify(reviewData)
      });

      if (response.ok) {
        const data = await response.json();


        location.reload();

        reseñaInput.value = '';
      } else if (response.status === 403) {
        const error = await response.json();
      } else {
      }
    } catch (error) {
      console.error('Error al enviar la reseña:', error);
    }
  });
});


const inputReseña = document.getElementById('inputReseña');
    const charCounter = document.getElementById('charCounter');
    const maxChars = 250;

    inputReseña.addEventListener('input', () => {
        const currentLength = inputReseña.value.length;

        charCounter.textContent = `${currentLength}/${maxChars} caracteres`;

        if (currentLength >= maxChars) {
            charCounter.style.color = 'red';
        } else {
            charCounter.style.color = 'black';
        }
    });


    document.addEventListener('DOMContentLoaded', () => {
        const button = document.getElementById('verCalendarioBtn');

        // Obtener la URL actual
        const currentUrl = window.location.href;

        // Extraer el `lawyerId` de la URL (asumiendo formato /perfilabogado/{lawyerId})
        const lawyerId = currentUrl.split('/').pop();

        // Asegurar que el botón redirija a la vista del calendario
        button.addEventListener('click', () => {
            if (lawyerId) {
                window.location.href = `/calendarioAbogado/${lawyerId}`;
            } else {
                alert('No se encontró el ID del abogado.');
            }
        });
    });
