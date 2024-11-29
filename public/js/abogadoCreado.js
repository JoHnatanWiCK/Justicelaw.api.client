document.getElementById('logoutButton')?.addEventListener('click', function(event) {
    event.preventDefault();  
    document.getElementById('logoutModal').style.display = 'block';  
});

document.addEventListener('DOMContentLoaded', async () => {

    console.log('Script cargado y DOM completamente cargado');

    const userMenu = document.querySelector('.content-abogado');
    const spanUserName = userMenu.querySelector('h3');

    const userEmail = document.querySelector('.correoWeb');
    const spanUserEmail = userEmail.querySelector('p');

    const token = localStorage.getItem('token');
    const role = localStorage.getItem('role');

    console.log('Token actual:', token);
    console.log('Rol actual:', role);

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/auth/meLawyer', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        });

        if (!response.ok) {
            if (response.status === 401) {
                alert('Tu sesión ha expirado. Serás redirigido a la página de inicio de sesión.');
                localStorage.removeItem('token');
                setTimeout(() => {
                    window.location.href = '/login';
                }, 3000);
            } else {
                throw new Error('Error al obtener datos del usuario');
            }
        } else {
            const data = await response.json();
            console.log('Datos del usuario:', data);

            const { name, last_names, email,id  } = data;
            spanUserName.textContent = `${name} ${last_names}`;
            spanUserEmail.textContent = `${email}`;

            const lawyerId = id;
            // Llamar a la función para cargar la foto de perfil
            // await cargarFotoPerfil();
            await cargarReseñas(lawyerId);
        }
    } catch (error) {
        console.error('Error:', error.message);
    }
  });

  async function cargarReseñas(lawyerId) {
    const token = localStorage.getItem("token");

    if (!token) {
        console.log("No estás autenticado.");
        return;
    }

    try {
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

            const reseñasPublicadas = document.getElementById("reseñasPublicadas");
            reseñasPublicadas.innerHTML = "";

            data.reviews.forEach((review) => {
                const nuevaReseña = document.createElement("div");
                nuevaReseña.className = "reseña";

                nuevaReseña.innerHTML = `
                   <div class="reseña-content">
                       <img src="${review.user.profile?.profile_photo || '../../img/fotoPerfil.png'}" alt="Foto de perfil" class="profile-photo">
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


  async function cargarDatosVerificacion() {
      const token = localStorage.getItem('token');

      if (!token) {
          console.log('No estás autenticado.');
          return;
      }

      try {
          const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/getVerificationLawyer', {
              method: 'GET',
              headers: {
                  'Authorization': `Bearer ${token}`
              }
          });

          if (response.ok) {
              const data = await response.json();
              console.log('Datos de verificación del abogado:', data);

              const telefono = data.cell_phone || 'No disponible';
              document.querySelector('.telefonoWeb p').textContent = telefono;

              const pais = data.country || 'No disponible';
              document.querySelector('.paisWeb p').textContent = pais;

              const ciudad = data.city || 'No disponible';
              document.querySelector('.ciudadWeb p').textContent = ciudad;

          } else {
              const errorData = await response.json();
              console.error('Error al cargar los datos de verificación:', errorData);
          }
      } catch (error) {
          console.error('Error:', error);
      }
  }

  document.addEventListener('DOMContentLoaded', cargarDatosVerificacion);

  
  document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.profile-nav ul li a');
    const indicator = document.querySelector('.profile-nav .indicator');
    const sections = document.querySelectorAll('.section');

    function setIndicatorPosition(link) {
      const rect = link.getBoundingClientRect();
      const navRect = link.closest('.profile-nav').getBoundingClientRect();
      indicator.style.left = `${rect.left - navRect.left}px`;
      indicator.style.width = `${rect.width}px`;
    }

    function showSection(targetId) {
      sections.forEach(section => {
        if (section.id === targetId) {
          section.classList.add('active');
        } else {
          section.classList.remove('active');
        }
      });
    }

    navLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        navLinks.forEach(link => link.classList.remove('active'));
        link.classList.add('active');
        setIndicatorPosition(link);
        const targetId = link.getAttribute('data-target');
        showSection(targetId);
      });
    });

    const activeLink = document.querySelector('.profile-nav ul li a.active');
    if (activeLink) {
      setIndicatorPosition(activeLink);
      const targetId = activeLink.getAttribute('data-target');
      showSection(targetId);
    }
  });


  document.querySelectorAll('.star').forEach(star => {
    star.addEventListener('click', () => {
        const value = parseInt(star.getAttribute('data-value'));
        document.querySelectorAll('.star').forEach(s => {
            s.classList.remove('filled');
            if (parseInt(s.getAttribute('data-value')) <= value) {
                s.classList.add('filled');
            }
        });
    });
  });


  document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.profile-nav-sm ul li a');
    const indicator = document.querySelector('.profile-nav-sm .indicator');
    const sections = document.querySelectorAll('.section-mov');

    function setIndicatorPosition(link) {
      const rect = link.getBoundingClientRect();
      const navRect = link.closest('.profile-nav-sm').getBoundingClientRect();
      indicator.style.left = `${rect.left - navRect.left}px`;
      indicator.style.width = `${rect.width}px`;
    }

    function showSection(targetId) {
      sections.forEach(section => {
        if (section.id === targetId) {
          section.classList.add('active');
        } else {
          section.classList.remove('active');
        }
      });
    }

    navLinks.forEach(link => {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        navLinks.forEach(link => link.classList.remove('active'));
        link.classList.add('active');
        setIndicatorPosition(link);
        const targetId = link.getAttribute('data-target');
        showSection(targetId);
      });
    });

    const activeLink = document.querySelector('.profile-nav-sm ul li a.active');
    if (activeLink) {
      setIndicatorPosition(activeLink);
      const targetId = activeLink.getAttribute('data-target');
      showSection(targetId);
    }
  });



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

        window.location.href = '../perfil_usuario/perfil_creado.html';
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

        window.location.href = '../perfil_usuario/perfil_creado.html';
    }, 5000);

    timerM2 = setTimeout(() => {
      progressMovil.classList.remove("active");
    }, 5300);

});}


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



function handleFileSelection() {

  document.getElementById("modal-movil").style.display = "none";

  const toast = document.querySelector('.toast');
  toast.classList.add('active');

  setTimeout(() => {
    toast.classList.remove('active');
    window.location.hash = '';
    window.location.reload();
  }, 3000);

}

async function cargarDatosPerfil() {
    const token = localStorage.getItem('token');

    if (!token) {
        console.log('No estás autenticado.');
        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/getProfileLawyer', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Datos del perfil:', data);

            const fotoPerfil = document.getElementById('fotoPerfilAbogado');
            if (fotoPerfil) {
                const photoUrl = data.photo ? `${data.photo}?timestamp=${new Date().getTime()}` : '../../img/fotoPerfil.png';
                fotoPerfil.src = photoUrl;
                console.log('Imagen de perfil cargada:', photoUrl);
            } else {
                console.error('Elemento con id "fotoPerfil" no encontrado.');
            }

            const biografia = data.biography || 'Biografía no disponible';
            document.querySelector('#biografiaUsuario').textContent = biografia;

        } else {
            const errorData = await response.json();
            console.error('Error al cargar los datos del perfil:', errorData);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

document.addEventListener('DOMContentLoaded', cargarDatosPerfil);


async function cargarDatosAreas() {
    const token = localStorage.getItem('token');

    if (!token) {
        console.log('No estás autenticado.');
        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/getAreasLawyer', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
            },
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Áreas del abogado:', data);

            const areasContainer = document.querySelector('.civ');  // Usamos el contenedor donde se deben mostrar las áreas
            if (areasContainer) {
                // Vaciar cualquier contenido previo
                areasContainer.innerHTML = '';

                // Recorrer las áreas y agregarlas en el formato adecuado
                data.areas.forEach(area => {
                    const boxPractice = document.createElement('div');
                    boxPractice.classList.add('box-practice');

                    const practiceItem = document.createElement('div');
                    practiceItem.classList.add('practice-item');
                    practiceItem.classList.add(area.toLowerCase().replace(/\s/g, '')); // Convierte el nombre del área en un clase en minúsculas

                    const practiceText = document.createElement('p');
                    practiceText.classList.add('practice-text');
                    practiceText.textContent = area;

                    practiceItem.appendChild(practiceText);
                    boxPractice.appendChild(practiceItem);
                    areasContainer.appendChild(boxPractice);
                });
            } else {
                console.error('Elemento con clase "civ" no encontrado.');
            }

        } else {
            const errorData = await response.json();
            console.error('Error al cargar las áreas:', errorData);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

document.addEventListener('DOMContentLoaded', cargarDatosAreas);

async function cargarHojaDeVida() {
    const token = localStorage.getItem('token');

    if (!token) {
        console.log('No estás autenticado.');
        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/getVerificationLawyer', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Datos de la verificación:', data);

            const resumeUrl = data.resume;
            const hojaDeVidaSection = document.getElementById('hoja-de-vida');
            hojaDeVidaSection.innerHTML = '';

            if (resumeUrl.endsWith('.pdf')) {
                const googleDocsUrl = `https://docs.google.com/viewer?url=${resumeUrl}&embedded=true`;
                const iframe = document.createElement('iframe');
                iframe.classList.add('iframeLarge');
                iframe.src = googleDocsUrl;
                iframe.frameBorder = "0";
                hojaDeVidaSection.appendChild(iframe);
            } else if (resumeUrl.endsWith('.docx') || resumeUrl.endsWith('.doc')) {
                const googleDocsUrl = `https://docs.google.com/viewer?url=${resumeUrl}&embedded=true`;
                const viewerLink = document.createElement('iframe');
                viewerLink.src = googleDocsUrl;
                viewerLink.classList.add('iframeLarge');
                viewerLink.frameBorder = "0";
                hojaDeVidaSection.appendChild(viewerLink);
            } else {
                const downloadLink = document.createElement('a');
                downloadLink.href = resumeUrl;
                downloadLink.download = true;
                downloadLink.textContent = 'Descargar hoja de vida';
                hojaDeVidaSection.appendChild(downloadLink);
            }

        } else {
            const errorData = await response.json();
            console.error('Error al cargar los datos de la verificación:', errorData);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

document.addEventListener('DOMContentLoaded', cargarHojaDeVida);


// document.addEventListener('DOMContentLoaded', () => {
//     fetchCountries();

// });


// async function fetchCountries() {
//     const countriesSelect = document.getElementById('pais');
//     countriesSelect.innerHTML = '<option value="">Selecciona un país:</option>';

//     try {
//         const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/countries');
//         const data = await response.json();

//         console.log('Countries Data:', data);

//         if (Array.isArray(data)) {
//             data.forEach(country => {
//                 const option = document.createElement('option');
//                 option.value = country.id;
//                 option.textContent = country.name;
//                 countriesSelect.appendChild(option);
//             });
//         } else {
//             console.error('Data format error: Expected array of countries');
//         }
//     } catch (error) {
//         console.error('Error fetching countries:', error);
//     }
// }

// async function fetchStates(countryId) {
//     const statesSelect = document.getElementById('estado');
//     statesSelect.innerHTML = '<option value="">Selecciona un estado:</option>';

//     try {
//         const response = await fetch(`https://apijusticelaw-production.up.railway.app/v1/states/${countryId}`);
//         const data = await response.json();

//         console.log('States Data:', data);

//         if (Array.isArray(data)) {
//             data.forEach(state => {
//                 const option = document.createElement('option');
//                 option.value = state.id;
//                 option.textContent = state.name;
//                 statesSelect.appendChild(option);
//             });
//         } else {
//             console.error('Data format error: Expected array of states');
//         }
//     } catch (error) {
//         console.error('Error fetching states:', error);
//     }
// }



// async function fetchCities(stateId) {
//     const citiesSelect = document.getElementById('ciudad');
//     citiesSelect.innerHTML = '<option value="">Selecciona una ciudad:</option>';

//     try {
//         const response = await fetch(`https://apijusticelaw-production.up.railway.app/v1/cities/${stateId}`);
//         const data = await response.json();

//         console.log('Cities Data:', data);

//         if (Array.isArray(data)) {
//             data.forEach(city => {
//                 const option = document.createElement('option');
//                 option.value = city.id;
//                 option.textContent = city.name;
//                 citiesSelect.appendChild(option);
//             });
//         } else {
//             console.error('Data format error: Expected array of cities');
//         }
//     } catch (error) {
//         console.error('Error fetching cities:', error);
//     }
// }

// document.getElementById('pais').addEventListener('change', function () {
//     const countryId = this.value;
//     if (countryId) {
//         fetchStates(countryId);
//     } else {
//         document.getElementById('estado').innerHTML = '<option value="">Selecciona un estado:</option>';
//         document.getElementById('ciudad').innerHTML = '<option value="">Selecciona una ciudad:</option>';
//     }
// });

// document.getElementById('estado').addEventListener('change', function () {
//     const stateId = this.value;
//     if (stateId) {
//         fetchCities(stateId);
//     } else {
//         document.getElementById('ciudad').innerHTML = '<option value="">Selecciona una ciudad:</option>';
//     }
// });



async function cargarDatosVerificacionEditar() {
    const token = localStorage.getItem('token');

    if (!token) {
        console.log('No estás autenticado.');
        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/getVerificationLawyer', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Datos de verificación del abogado:', data);

            // Actualizar teléfono
            const telefonoInput = document.getElementById('telefonoEdit');
            telefonoInput.value = data.cell_phone || '';

            setSelectOptionById('pais', data.country_id, data.country);
            setSelectOptionById('estado', data.state_id, data.state);
            setSelectOptionById('ciudad', data.city_id, data.city);

            window.verificationData = { level: data.level, training_place: data.training_place, resume: data.resume };

        } else {
            const errorData = await response.json();
            console.error('Error al cargar los datos de verificación:', errorData);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

// document.addEventListener('DOMContentLoaded', cargarDatosVerificacionEditar);

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


async function cargarDatosPerfilEditar() {
    const token = localStorage.getItem('token');

    if (!token) {
        console.log('No estás autenticado.');
        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/getProfileLawyer', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`
            }
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Datos del perfil uno dos tres:', data);

            const fotoPerfil = document.getElementById('fotoPreview');
            if (fotoPerfil) {
                const photoUrl = data.photo ? `${data.photo}?timestamp=${new Date().getTime()}` : '../../img/fotoPerfil.png';
                fotoPerfil.src = photoUrl;
                console.log('Imagen de perfil cargada:', photoUrl);
            } else {
                console.error('Elemento con id "fotoPerfil" no encontrado.');
            }

            const biografiaTextarea = document.getElementById('biografia');
            biografiaTextarea.value = data.biography || '';

        } else {
            const errorData = await response.json();
            console.error('Error al cargar los datos del perfil:', errorData);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

document.addEventListener('DOMContentLoaded', cargarDatosPerfilEditar);

async function cargarAreasModal() {
    const token = localStorage.getItem('token');

    if (!token) {
        console.log('No estás autenticado.');
        return;
    }

    const areasContainer = document.getElementById('areasContainer');
    areasContainer.innerHTML = ''; // Limpiar el contenedor antes de cargar las áreas

    try {
        // Fetch para todas las áreas
        const allAreasResponse = await fetch('https://apijusticelaw-production.up.railway.app/v1/areas');
        if (!allAreasResponse.ok) {
            throw new Error(`Error al obtener todas las áreas: ${allAreasResponse.status}`);
        }
        const allAreas = await allAreasResponse.json();

        // Fetch para las áreas seleccionadas por el abogado
        const lawyerAreasResponse = await fetch('https://apijusticelaw-production.up.railway.app/v1/getAreasLawyer', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
            },
        });
        if (!lawyerAreasResponse.ok) {
            throw new Error(`Error al obtener las áreas del abogado: ${lawyerAreasResponse.status}`);
        }
        const lawyerAreasData = await lawyerAreasResponse.json();
        const lawyerAreas = new Set(lawyerAreasData.areas); // Convertir a Set para facilitar la comparación

        // Crear un contenedor flex para organizar en columnas
        const columnsContainer = document.createElement('div');
        columnsContainer.classList.add('columns-container');

        allAreas.forEach(area => {
            const checkboxWrapper = document.createElement('div');
            checkboxWrapper.classList.add('checkbox-wrapper');

            const checkbox = document.createElement('input');
            checkbox.type = 'checkbox';
            checkbox.id = `area-${area.id}`;
            checkbox.value = area.id;
            checkbox.name = 'areas';

            // Marcar el checkbox si el área está en las áreas del abogado
            if (lawyerAreas.has(area.name)) {
                checkbox.checked = true;
            }

            const label = document.createElement('label');
            label.htmlFor = `area-${area.id}`;
            label.textContent = area.name;

            checkboxWrapper.appendChild(checkbox);
            checkboxWrapper.appendChild(label);
            columnsContainer.appendChild(checkboxWrapper);
        });

        areasContainer.appendChild(columnsContainer);

    } catch (error) {
        console.error('Error al cargar las áreas:', error);
    }
}

document.addEventListener('DOMContentLoaded', cargarAreasModal);

document.getElementById('editForm').addEventListener('submit', async function (event) {
    event.preventDefault(); // Evitar que el formulario se envíe normalmente

    const token = localStorage.getItem('token');
    if (!token) {
        console.log('No estás autenticado.');
        return;
    }

    // Recoger los valores de los campos del formulario
    // const telefonoEdit = document.getElementById('telefonoEdit').value;
    const biografia = document.getElementById('biografia').value;
    const fotoPerfil = document.getElementById('fotoPerfilEdit').files[0]; // Foto seleccionada (si existe)

    // Recoger los valores de los select (país, estado, ciudad)
    // const pais = document.getElementById('pais').value;
    // const estado = document.getElementById('estado').value;
    // const ciudad = document.getElementById('ciudad').value;

    // Recoger las áreas seleccionadas
    const areasSeleccionadas = [];
    const checkboxes = document.querySelectorAll('input[name="areas"]:checked');
    checkboxes.forEach(checkbox => areasSeleccionadas.push(checkbox.value));

    try {
        // Preparar los datos para el perfil (biografía y foto)
        const perfilData = new FormData();
        if (fotoPerfil) {
            perfilData.append('profile_photo', fotoPerfil);
        }
        perfilData.append('biography', biografia);

        // Preparar los datos de verificación (teléfono, país, estado, ciudad)
        // const verificationData = {
        //     'cell_phone': telefonoEdit,
        //     'country_id': pais,
        //     'state_id': estado,
        //     'city_id': ciudad,
        //     'level': window.verificationData.level, // Usar la variable global para obtener el valor de level
        //     'training_place': window.verificationData.training_place, // Usar la variable global para obtener el valor de training_place
        //     'resume': window.verificationData.resume // Usar la variable global para obtener el valor de resume
        // };


        // console.log(verificationData);
        // Llamada a la API para actualizar el perfil
        const perfilResponse = await fetch('https://apijusticelaw-production.up.railway.app/v1/profileLawyer', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`,
            },
            body: perfilData, // Enviar FormData (para la foto)
        });

        if (!perfilResponse.ok) {
            throw new Error('Error al actualizar el perfil');
        }

        // Llamada a la API para actualizar los datos de verificación
        // const verificationResponse = await fetch('https://apijusticelaw-production.up.railway.app/v1/verificationLawyerPerfil', {
        //     method: 'POST',
        //     headers: {
        //         'Authorization': `Bearer ${token}`,
        //         'Content-Type': 'application/json',
        //     },
        //     body: JSON.stringify(verificationData), // Enviar los datos en formato JSON
        // });

        // if (!verificationResponse.ok) {
        //     throw new Error('Error al actualizar los datos de verificación');
        // }

        // Llamada a la API para guardar las áreas seleccionadas
        const areasResponse = await fetch('https://apijusticelaw-production.up.railway.app/v1/saveAreas', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ areas: areasSeleccionadas }), // Enviar las áreas seleccionadas
        });

        if (!areasResponse.ok) {
            throw new Error('Error al guardar las áreas');
        }

        document.getElementById('editModal').style.display = 'none';

        // Recarga la página
        window.location.reload(); // Esto recargará la página

    } catch (error) {
        console.error('Error al actualizar:', error);
    }
});


document.getElementById('fotoPerfilEdit').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('fotoPreview');
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
        };
        reader.readAsDataURL(file);
    } else {
        preview.src = '';
    }
});


var modalEdit = document.getElementById("editModal");
var editLink = document.getElementById("editLink");
var spanEditClose = document.getElementsByClassName("modal-edit-close")[0];

document.addEventListener("DOMContentLoaded", () => {
    modalEdit.style.display = "none"; // Asegúrate de que el modal esté oculto al cargar la página

    // Muestra el modal cuando el enlace se hace clic
    if (editLink) {
        editLink.onclick = function (event) {
            event.preventDefault(); // Evitar la acción predeterminada del enlace
            modalEdit.style.display = "flex"; // Mostrar el modal (usamos flex para el centrado)
        };
    }

    // Cierra el modal cuando se hace clic en la "X"
    if (spanEditClose) {
        spanEditClose.onclick = function () {
            modalEdit.style.display = "none";
        };
    }

    // Cierra el modal si el usuario hace clic fuera del modal
    window.onclick = function (event) {
        if (event.target == modalEdit) {
            modalEdit.style.display = "none";
        }
    };
});
