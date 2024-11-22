document.addEventListener('DOMContentLoaded', () => {
    fetchCountries();
    fetchStates();
    fetchCities();
});

document.addEventListener('DOMContentLoaded', async () => {

    console.log('Script cargado y DOM completamente cargado');

    const userNameElement = document.getElementById('userName');
    const userRolElement = document.getElementById('userRol');
    const userNameInput =  document.getElementById('nombre');
    const lastNameInput =  document.getElementById('apellidos');
    const emailInput = document.getElementById('email');

    const token = localStorage.getItem('token');

    if (!token) {
        console.error('Token no encontrado. Asegúrate de que el usuario esté autenticado.');
        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/auth/me', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        });

        if (!response.ok) {
            if (response.status === 401) {

                console.error('Tu sesión ha expirado. Debes iniciar sesión nuevamente.');
                return;
            } else {
                throw new Error('Error al obtener datos del usuario');
            }
        } else {
            const data = await response.json();
            console.log('Datos del usuario:', data);

            const { name, last_name, rol, email } = data;
            userNameElement.textContent = `${name} ${last_name}`;
            userRolElement.textContent = rol || 'Usuario';
            userNameInput.value = `${name}`;
            lastNameInput.value = `${last_name}`;
            emailInput.value = `${email}`;
        }
    } catch (error) {
        console.error('Error:', error.message);
    }
});

async function fetchCountries() {
    const countriesSelect = document.getElementById('pais');
    countriesSelect.innerHTML = '<option value="">Selecciona un país:</option>';

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/countries');
        const data = await response.json();

        console.log('Countries Data:', data);

        if (Array.isArray(data)) {
            data.forEach(country => {
                const option = document.createElement('option');
                option.value = country.id;
                option.textContent = country.name;
                countriesSelect.appendChild(option);
            });
        } else {
            console.error('Data format error: Expected array of countries');
        }
    } catch (error) {
        console.error('Error fetching countries:', error);
    }
}


async function fetchStates() {
    const statesSelect = document.getElementById('estado');
    statesSelect.innerHTML = '<option value="">Selecciona un estado:</option>';

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/states');
        const data = await response.json();

        console.log('States Data:', data);

        if (Array.isArray(data)) {
            data.forEach(state => {
                const option = document.createElement('option');
                option.value = state.id;
                option.textContent = state.name;
                statesSelect.appendChild(option);
            });
        } else {
            console.error('Data format error: Expected array of states');
        }
    } catch (error) {
        console.error('Error fetching states:', error);
    }
}

async function fetchCities() {
    const citiesSelect = document.getElementById('ciudad');
    citiesSelect.innerHTML = '<option value="">Selecciona una ciudad:</option>';

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/cities');
        const data = await response.json();

        console.log('Cities Data:', data);

        if (Array.isArray(data)) {
            data.forEach(city => {
                const option = document.createElement('option');
                option.value = city.id;
                option.textContent = city.name;
                citiesSelect.appendChild(option);
            });
        } else {
            console.error('Data format error: Expected array of cities');
        }
    } catch (error) {
        console.error('Error fetching cities:', error);
    }
}
async function guardarDatos() {
    const token = localStorage.getItem('token');

    if (!token) {
        alert('No estás autenticado.');
        return;
    }

    const formData = new FormData();
    formData.append('cell_phone', document.getElementById('telefono').value);
    formData.append('country_id', document.getElementById('pais').value);
    formData.append('state_id', document.getElementById('estado').value);
    formData.append('city_id', document.getElementById('ciudad').value);

    const photoInput = document.querySelector('input[type="file"][name="seleccionarFoto"]');
    if (photoInput.files.length > 0) {
        formData.append('photo', photoInput.files[0]);
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/profile', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`
            },
            body: formData
        });

        if (response.ok) {
            // Mostrar el mensaje de éxito en el modal
            const modalTitle = document.querySelector('#modal-foto h2');
            const modalMessage = document.querySelector('#modal-foto p');
            modalTitle.textContent = '¡Foto subida exitosamente!';
            modalMessage.textContent = '¿Deseas actualizarla?';

            // Mostrar el toast de éxito
            const toast = document.querySelector('.toast');
            toast.classList.add('active');
            setTimeout(() => {
                toast.classList.remove('active');
            }, 3000);

            // Actualizar la imagen de perfil en la página
            const photo = photoInput.files[0];
            const reader = new FileReader();
            reader.onloadend = function () {
                document.getElementById('fotoPerfil').src = reader.result;
            }
            reader.readAsDataURL(photo);
        } else {
            const errorData = await response.json();
            console.error('Error:', errorData);
            alert('Hubo un error al actualizar el perfil.');
        }
    } catch (error) {
        console.error('Error:', error);
        alert('No se pudo actualizar el perfil.');
    }
}

// Manejo de selección de archivo y validación de extensión
// Mostrar botones de confirmación y ocultar botón de subir foto
function handleFileSelection() {
    const photoInput = document.querySelector('input[type="file"][name="seleccionarFoto"]');
    const file = photoInput.files[0];

    if (file) {
        const fileExtension = file.name.split('.').pop().toLowerCase();
        if (['png', 'jpg', 'jpeg'].includes(fileExtension)) {
            // Mostrar vista previa de la imagen seleccionada
            const reader = new FileReader();
            reader.onloadend = function () {
                document.getElementById('avatarUno').src = reader.result;
                document.getElementById('avatarDos').src = reader.result;
                document.getElementById('avatarTres').src = reader.result;
            };
            reader.readAsDataURL(file);

            // Mostrar los botones de confirmación
            const confirmationButtons = document.getElementById('confirmation-buttons');
            confirmationButtons.style.display = 'block';
        } else {
            alert('Solo se permiten archivos de tipo PNG, JPG o JPEG.');
        }
    }
}

function confirmarFoto() {
    const photoInput = document.querySelector('input[type="file"][name="seleccionarFoto"]');
    const file = photoInput.files[0];
    const token = localStorage.getItem('token');

    if (!file || !token) {
        alert('No hay ninguna foto seleccionada o no estás autenticado.');
        return;
    }

    const formData = new FormData();
    formData.append('photo', file);

    // Llamada a la API para subir la foto
    fetch('https://apijusticelaw-production.up.railway.app/v1/profile', {
        method: 'POST',
        headers: {
            'Authorization': `Bearer ${token}`
        },
        body: formData
    })
    .then(response => {
        if (response.ok) {
            return response.json();
        } else {
            throw new Error('Error al subir la foto');
        }
    })
    .then(data => {
        console.log('Foto actualizada:', data);

        // Actualizar la foto de perfil
        const reader = new FileReader();
        reader.onloadend = function () {
            document.getElementById('fotoPerfil').src = reader.result;
        };
        reader.readAsDataURL(file);

        // Mostrar toast de éxito
        const toast = document.querySelector('.toast');
        toast.classList.add('active');
        setTimeout(() => {
            toast.classList.remove('active');
        }, 3000);

        // Ocultar el modal y los botones de confirmación
        document.getElementById('confirmation-buttons').style.display = 'none';
        closeModal();
    })
    .catch(error => {
        console.error('Error:', error);
        alert('No se pudo actualizar la foto.');
    });
}

function cancelarFoto() {
    // Ocultar los botones de confirmación y limpiar la selección del archivo
    const confirmationButtons = document.getElementById('confirmation-buttons');
    confirmationButtons.style.display = 'none';
    const photoInput = document.querySelector('input[type="file"][name="seleccionarFoto"]');
    photoInput.value = ''; // Limpia el input de archivo
}

function closeModal() {
    const modal = document.getElementById('modal-foto');
    if (modal) {
        modal.style.display = 'none'; // Cierra el modal después de la actualización
    }
}

// const button = document.querySelector("#boton-guardar");
// const toast = document.querySelector(".toast");
// const progress = document.querySelector(".progress");

// let timer1, timer2;

// if (button && toast) {


// button.addEventListener("click", () => {
//     toast.classList.add("active");
//     progress.classList.add("active");


//     timer1 = setTimeout(() => {
//         toast.classList.remove("active");

//         window.location.href = window.routes.perfilCreado;


//     }, 5000);

//     timer2 = setTimeout(() => {
//         progress.classList.remove("active");
//     }, 5300);

// });}

// const buttonMovil = document.querySelector("#boton-movil");
// const toastMovil = document.querySelector(".toast");
// const progressMovil = document.querySelector(".progress");

// let timerM1, timerM2;



// if (buttonMovil && toastMovil) {


//   buttonMovil.addEventListener("click", () => {
//   toastMovil.classList.add("active");
//   progressMovil.classList.add("active");


//   timerM1 = setTimeout(() => {
//       toastMovil.classList.remove("active");


//       window.location.href = window.routes.perfilCreado;


//     }, 5000);

//     timerM2 = setTimeout(() => {
//       progressMovil.classList.remove("active");
//     }, 5300);

// });}


// document.addEventListener('DOMContentLoaded', function() {
//     const btnActualizar = document.getElementById('boton-actualizar');
//     if (btnActualizar) {
//         btnActualizar.addEventListener('click', function(event) {
//             event.preventDefault();
//             window.location.href = window.routes.editarPerfil;
//         });
//     }
// });


// document.addEventListener('DOMContentLoaded', function() {
//     const links = document.querySelectorAll('a i.fa-pen-to-square');

//     links.forEach(function(icon) {
//         const parentLink = icon.parentElement;

//         if (parentLink.tagName.toLowerCase() === 'a') {
//             parentLink.addEventListener('click', function(event) {
//                 event.preventDefault();

//                 window.location.href = window.routes.editarPerfil;
//             });
//         }
//     });
// });


// function handleFileSelection() {

//   document.getElementById("modal-foto").style.display = "none";

//   const toast = document.querySelector('.toast');
//   toast.classList.add('active');

//   setTimeout(() => {
//     toast.classList.remove('active');
//     window.location.hash = '';
//     window.location.reload();
//   }, 3000);

// }

// const navLinks = document.querySelectorAll('.nav-links a');

//         navLinks.forEach(link => {
//             link.addEventListener('click', function(event) {
//                 window.location.href = this.href;
//                 event.preventDefault();
//             });
//         });



const legalFiles = {
    'informacion': '/informaciones',
    'laboral': '/informacionesLaboral',
    'trabajadores': '/derechosTrabajadores',
    'arrendamiento': '/informacionArrendamiento',
    'despido': '/informacionDespido',
    'divorcio': '/informacionDivorcio',
    'negocio': '/informacionNegocio',
    'pension': '/informacionPension',
    'testamento': '/informacionTestamento',
    'accidente': '/informacionAccidente',
    'consumidor': '/informacionConsumidor',
    'seguridad social': '/informacionSeguridadSocial',
    'sst': '/informacionSST',
    'internacional laboral': '/informacionIntLab',
    'educacion': '/informacionEducacion',
    'vida familiar': '/informacionVidaFamiliar',
    'trabajo infantil': '/informacionTrabajoInfantil',
    'contrato': '/informacionContrato',
    'salud': '/informacionSalud',
    'participacion': '/informacionParticipacion',
    'voto': '/informacionVoto',
    'cargo': '/informacionCargo',
    'consulta': '/informacionConsulta',
    'peticiones': '/informacionPeticiones',
    'plebiscito': '/informacionPlebiscito',
    'autor': '/informacionAutor'
};

// Escucha el evento de clic en el botón de búsqueda
document.getElementById('buscarBtn').addEventListener('click', function(e) {
    e.preventDefault(); // Prevenir el comportamiento por defecto si es un formulario

    // Obtener el valor del campo de búsqueda y transformarlo a minúsculas
    var searchQuery = document.querySelector('.search-bar input').value.trim().toLowerCase();

    // Buscar la ruta correspondiente en la lista de archivos legales
    const ruta = legalFiles[searchQuery];

    if (ruta) {
        // Si se encuentra la palabra clave, redirige a la ruta correspondiente
        window.location.href = ruta;
    } else {
        // Mostrar un mensaje si la búsqueda no tiene coincidencias
        alert("No se encontró información con esa búsqueda.");
    }
});
