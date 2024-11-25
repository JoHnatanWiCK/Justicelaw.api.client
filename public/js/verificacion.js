document.addEventListener('DOMContentLoaded', () => {
    fetchCountries();  // Cargar los países cuando la página se carga
});

// Función para obtener países
async function fetchCountries() {
    const countriesSelect = document.getElementById('pais');
    countriesSelect.innerHTML = '<option value="">Selecciona un país:</option>'; // Resetea las opciones

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

// Función para obtener estados según el país seleccionado
async function fetchStates(countryId) {
    const statesSelect = document.getElementById('estado');
    statesSelect.innerHTML = '<option value="">Selecciona un estado:</option>'; // Resetea las opciones

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

// Función para obtener ciudades según el estado seleccionado
async function fetchCities(stateId) {
    const citiesSelect = document.getElementById('ciudad');
    citiesSelect.innerHTML = '<option value="">Selecciona una ciudad:</option>'; // Resetea las opciones

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

// Evento cuando el usuario selecciona un país
document.getElementById('pais').addEventListener('change', function () {
    const countryId = this.value;
    if (countryId) {
        fetchStates(countryId);  // Llamar a fetchStates para obtener los estados del país seleccionado
    } else {
        document.getElementById('estado').innerHTML = '<option value="">Selecciona un estado:</option>';
        document.getElementById('ciudad').innerHTML = '<option value="">Selecciona una ciudad:</option>';
    }
});

// Evento cuando el usuario selecciona un estado
document.getElementById('estado').addEventListener('change', function () {
    const stateId = this.value;
    if (stateId) {
        fetchCities(stateId);  // Llamar a fetchCities para obtener las ciudades del estado seleccionado
    } else {
        document.getElementById('ciudad').innerHTML = '<option value="">Selecciona una ciudad:</option>';
    }
});


document.getElementById('btnVerificarUno').addEventListener('click', function (e) {
    e.preventDefault();  // Prevenir el comportamiento por defecto del formulario

    // Obtener los valores de los campos
    const telefono = document.getElementById('telefono').value;
    const pais = document.getElementById('pais').value;
    const estado = document.getElementById('estado').value;
    const ciudad = document.getElementById('ciudad').value;

    // Limpiar mensajes de error previos
    document.getElementById('errorTelefono').textContent = '';
    document.getElementById('errorPais').textContent = '';
    document.getElementById('errorEstado').textContent = '';
    document.getElementById('errorCiudad').textContent = '';

    let valid = true;  // Variable para verificar si todos los campos son válidos

    // Validar campos
    if (!telefono) {
        document.getElementById('errorTelefono').textContent = 'Este campo es obligatorio.';
        valid = false;
    }

    if (!pais) {
        document.getElementById('errorPais').textContent = 'Este campo es obligatorio.';
        valid = false;
    }

    if (!estado) {
        document.getElementById('errorEstado').textContent = 'Este campo es obligatorio.';
        valid = false;
    }

    if (!ciudad) {
        document.getElementById('errorCiudad').textContent = 'Este campo es obligatorio.';
        valid = false;
    }

    // Si todos los campos son válidos, guardar y redirigir
    if (valid) {
        // Guardar los datos en localStorage
        localStorage.setItem('telefono', telefono);
        localStorage.setItem('pais', pais);
        localStorage.setItem('estado', estado);
        localStorage.setItem('ciudad', ciudad);

        // Redirigir al siguiente paso
        window.location.href = '/verificarAbogadoDos';  // Cambiar la URL según sea necesario
    }
});


const lawyerId = localStorage.getItem('lawyerId');

// Mostrar el lawyerId en la consola
console.log('Lawyer ID desde localStorage:', lawyerId);

// Guardar el lawyerId en el localStorage también (si es necesario)
localStorage.setItem('lawyerId', lawyerId);

// Función para obtener los valores de nivel educativo y llenar el select
