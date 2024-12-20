document.addEventListener('DOMContentLoaded', () => {
    fetchCountries();

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

async function fetchStates(countryId) {
    const statesSelect = document.getElementById('estado');
    statesSelect.innerHTML = '<option value="">Selecciona un estado:</option>';

    try {
        const response = await fetch(`https://apijusticelaw-production.up.railway.app/v1/states/${countryId}`);
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



async function fetchCities(stateId) {
    const citiesSelect = document.getElementById('ciudad');
    citiesSelect.innerHTML = '<option value="">Selecciona una ciudad:</option>';

    try {
        const response = await fetch(`https://apijusticelaw-production.up.railway.app/v1/cities/${stateId}`);
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

document.getElementById('pais').addEventListener('change', function () {
    const countryId = this.value;
    if (countryId) {
        fetchStates(countryId);
    } else {
        document.getElementById('estado').innerHTML = '<option value="">Selecciona un estado:</option>';
        document.getElementById('ciudad').innerHTML = '<option value="">Selecciona una ciudad:</option>';
    }
});

document.getElementById('estado').addEventListener('change', function () {
    const stateId = this.value;
    if (stateId) {
        fetchCities(stateId);
    } else {
        document.getElementById('ciudad').innerHTML = '<option value="">Selecciona una ciudad:</option>';
    }
});

async function cargarDatos() {
    const token = localStorage.getItem('token');

    if (!token) {
        console.log('No estás autenticado.');
        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/getprofile', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Datos del perfil:', data);

            document.getElementById('telefono').value = data.cell_phone || '';

            setSelectOptionById('pais', data.country_id, data.country);
            setSelectOptionById('estado', data.state_id, data.state);
            setSelectOptionById('ciudad', data.city_id, data.city);

            const fotoPerfil = document.getElementById('fotoPerfilActu');
            if (fotoPerfil) {
                const photoUrl = data.photo ? `${data.photo}?timestamp=${new Date().getTime()}` : '../../img/fotoPerfil.png';
                fotoPerfil.src = photoUrl;
                console.log('Imagen de perfil cargada:', photoUrl);
            } else {
                console.error('Elemento con id "fotoPerfil" no encontrado.');
            }

        } else {
            const errorData = await response.json();
            console.error('Error al cargar los datos del perfil:', errorData);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

function setSelectOptionById(selectId, optionValue, optionText) {
    const selectElement = document.getElementById(selectId);
    if (selectElement) {
        let optionExists = false;
        for (let i = 0; i < selectElement.options.length; i++) {
            if (selectElement.options[i].value == optionValue) {
                selectElement.options[i].selected = true;
                optionExists = true;
                break;
            }
        }
        if (!optionExists) {
            const newOption = new Option(optionText, optionValue, true, true);
            selectElement.add(newOption, undefined);
        }
    }
}

document.addEventListener('DOMContentLoaded', cargarDatos);

async function guardarDatos() {
    const token = localStorage.getItem('token');

    if (!token) {
        console.log('No estás autenticado.');
        return;
    }

    const formData = new FormData();
    formData.append('cell_phone', document.getElementById('telefono').value);
    formData.append('country_id', document.getElementById('pais').value);
    formData.append('state_id', document.getElementById('estado').value);
    formData.append('city_id', document.getElementById('ciudad').value);

    const photoInput = document.querySelector('input[type="file"][name="seleccionarFoto"]');
    if (photoInput.files.length > 0) {
        formData.append('profile_photo', photoInput.files[0]);
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
            const data = await response.json();
            console.log('Respuesta del servidor:', data);

            const photoName = data.photo;
            let photoUrl = '../img/fotoPerfil.png';

            if (photoName) {
                photoUrl = `https://apijusticelaw-production.up.railway.app${photoName}?t=${new Date().getTime()}`;
            }

            console.log('URL de la foto:', photoUrl);

            const fotoPerfil = document.getElementById('fotoPerfil');
            if (fotoPerfil) {
                fotoPerfil.src = photoUrl;
            }

            const modalTitle = document.getElementById('modal-title');
            const modalMessage = document.getElementById('modal-message');
            modalTitle.textContent = '¡Perfil actualizado!';
            modalMessage.textContent = 'Tu foto de perfil se ha actualizado con éxito.';

            toast.classList.add("active");

            setTimeout(() => {
                toast.classList.remove("active");
            }, 3000);

            setTimeout(() => {
                closeModal();
                window.location.reload();
            }, 4000);


        } else {
            const errorData = await response.json();
            console.error('Error:', errorData);
            console.log('Hubo un error al actualizar el perfil.');
        }
    } catch (error) {
        console.error('Error:', error);
        console.log('No se pudo actualizar el perfil.');
    }
}

function handleFileSelection() {
    const photoInput = document.querySelector('input[type="file"][name="seleccionarFoto"]');
    const file = photoInput.files[0];

    if (file) {
        const fileExtension = file.name.split('.').pop().toLowerCase();
        if (['png', 'jpg', 'jpeg'].includes(fileExtension)) {
            const reader = new FileReader();
            reader.onloadend = function () {
                document.getElementById('photo-preview').src = reader.result;
                document.getElementById('photo-preview-container').style.display = 'block';

                document.getElementById('avatars-container').style.display = 'none';
            };
            reader.readAsDataURL(file);

            const modalTitle = document.getElementById('modal-title');
            const modalMessage = document.getElementById('modal-message');
            modalTitle.textContent = 'Foto seleccionada';
            modalMessage.textContent = '¿Quieres actualizar tu foto de perfil?';

            document.getElementById('seleccionarFoto').style.display = 'none';
            document.getElementById('confirmation-buttons').style.display = 'block';
        } else {
            console.log('Solo se permiten archivos PNG, JPG o JPEG.');
        }
    }
}

function confirmarFoto() {
    guardarDatos();
}

function cancelarFoto() {
    document.getElementById('confirmation-buttons').style.display = 'none';
    document.getElementById('seleccionarFoto').style.display = 'block';
    document.getElementById('avatars-container').style.display = 'flex';

    document.getElementById('photo-preview-container').style.display = 'none';
    const photoInput = document.querySelector('input[type="file"][name="seleccionarFoto"]');
    photoInput.value = '';
}

function closeModal() {
    window.location.href = '#close';
}

const button = document.querySelector("#boton-guardar");
const toast = document.querySelector(".toast");
const progress = document.querySelector(".progress");

let timer1, timer2;

if (button && toast) {
    button.addEventListener("click", () => {
        // Mostrar el progreso y el toast
        toast.classList.add("active");
        progress.classList.add("active");

        timer1 = setTimeout(() => {
            toast.classList.remove("active");
        }, 5000);

        timer2 = setTimeout(() => {
            progress.classList.remove("active");
        }, 5300);
    });
}

