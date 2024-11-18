
    document.addEventListener('DOMContentLoaded', () => {
        console.log('Script cargado correctamente');
        fetchCountries();
        fetchStates();
        fetchCities();
    });
    function fetchCountries() {
        fetch('https://apijusticelaw-production.up.railway.app/v1/countries')
            .then(response => response.json())
            .then(data => {
                console.log('Countries Data:', data);  // Verificar que los datos son correctos
                let countriesSelect = document.getElementById('pais');
                countriesSelect.innerHTML = '<option value="">Selecciona un país:</option>'; // Limpiar opciones
                if (Array.isArray(data)) {
                    data.forEach(country => {
                        let option = document.createElement('option');
                        option.value = country.id;
                        option.textContent = country.name;
                        countriesSelect.appendChild(option);
                    });
                } else {
                    console.error('Data format error: Expected array of countries');
                }
            })
            .catch(error => console.error('Error fetching countries:', error));
    }

    function fetchStates() {
        fetch('https://apijusticelaw-production.up.railway.app/v1/states')
            .then(response => response.json())
            .then(data => {
                console.log('States Data:', data);  // Verificar que los datos son correctos
                let statesSelect = document.getElementById('estado');
                statesSelect.innerHTML = '<option value="">Selecciona un estado:</option>';
                if (Array.isArray(data)) {
                    data.forEach(state => {
                        let option = document.createElement('option');
                        option.value = state.id;
                        option.textContent = state.name;
                        statesSelect.appendChild(option);
                    });
                } else {
                    console.error('Data format error: Expected array of states');
                }
            })
            .catch(error => console.error('Error fetching states:', error));
    }

    function fetchCities() {
        fetch('https://apijusticelaw-production.up.railway.app/v1/cities')
            .then(response => response.json())
            .then(data => {
                console.log('Cities Data:', data);  // Verificar que los datos son correctos
                let citiesSelect = document.getElementById('ciudad');
                citiesSelect.innerHTML = '<option value="">Selecciona una ciudad:</option>';
                if (Array.isArray(data)) {
                    data.forEach(city => {
                        let option = document.createElement('option');
                        option.value = city.id;
                        option.textContent = city.name;
                        citiesSelect.appendChild(option);
                    });
                } else {
                    console.error('Data format error: Expected array of cities');
                }
            })
            .catch(error => console.error('Error fetching cities:', error));
    }



const button = document.querySelector("#boton-guardar");
const toast = document.querySelector(".toast");
const progress = document.querySelector(".progress");

let timer1, timer2;

if (button && toast) {


button.addEventListener("click", () => {
    toast.classList.add("active");
    progress.classList.add("active");


    timer1 = setTimeout(() => {
        toast.classList.remove("active");

        window.location.href = window.routes.perfilCreado;


    }, 5000);

    timer2 = setTimeout(() => {
        progress.classList.remove("active");
    }, 5300);

});}

const buttonMovil = document.querySelector("#boton-movil");
const toastMovil = document.querySelector(".toast");
const progressMovil = document.querySelector(".progress");

let timerM1, timerM2;



if (buttonMovil && toastMovil) {


  buttonMovil.addEventListener("click", () => {
  toastMovil.classList.add("active");
  progressMovil.classList.add("active");


  timerM1 = setTimeout(() => {
      toastMovil.classList.remove("active");


      window.location.href = window.routes.perfilCreado;


    }, 5000);

    timerM2 = setTimeout(() => {
      progressMovil.classList.remove("active");
    }, 5300);

});}


document.addEventListener('DOMContentLoaded', function() {
    const btnActualizar = document.getElementById('boton-actualizar');
    if (btnActualizar) {
        btnActualizar.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = window.routes.editarPerfil;
        });
    }
});


document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a i.fa-pen-to-square');

    links.forEach(function(icon) {
        const parentLink = icon.parentElement;

        if (parentLink.tagName.toLowerCase() === 'a') {
            parentLink.addEventListener('click', function(event) {
                event.preventDefault();

                window.location.href = window.routes.editarPerfil;
            });
        }
    });
});


function handleFileSelection() {

  document.getElementById("modal-foto").style.display = "none";

  const toast = document.querySelector('.toast');
  toast.classList.add('active');

  setTimeout(() => {
    toast.classList.remove('active');
    window.location.hash = '';
    window.location.reload();
  }, 3000);

}

const navLinks = document.querySelectorAll('.nav-links a');

        navLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                window.location.href = this.href;
                event.preventDefault();
            });
        });





        // Lista de términos legales con sus rutas correspondientes
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
