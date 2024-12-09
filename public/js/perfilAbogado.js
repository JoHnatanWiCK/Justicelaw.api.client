document.getElementById('logoutButton')?.addEventListener('click', function (event) {
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

            const { name, last_names, email } = data;
            spanUserName.textContent = `${name} ${last_names}`;
            spanUserEmail.textContent = `${email}`;


            // Llamar a la función para cargar la foto de perfil
            //   await cargarFotoPerfil();
        }
    } catch (error) {
        console.error('Error:', error.message);
    }
});

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


document.addEventListener('DOMContentLoaded', function () {
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


document.addEventListener('DOMContentLoaded', function () {
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

    });
}

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

    });
}


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
// document.addEventListener('DOMContentLoaded', () => {
//     const continuarBtn = document.getElementById('continuarBtnWeb');
//     const atrasBtn = document.getElementById('atrasBtn');
//     const agregarBiografia = document.getElementById('agregarBiografia');
//     const fotoPerfilInput = document.getElementById('fotoPerfilInput');

//     const steps = ['step-1', 'step-2', 'step-3', 'step-4'];
//     let currentStep = 0;

//     const token = localStorage.getItem('token'); // Obtener token del localStorage

//     console.log('Token:', token); // Verificar si el token está disponible
//     console.log('Continuar button:', continuarBtn); // Verificar si el botón está disponible

//     continuarBtn.addEventListener('click', async () => {
//         console.log('Botón continuar presionado');

//         if (currentStep === 0) {
//             if (agregarBiografia.value.trim() === "") {
//                 alert("Por favor, agrega una biografía antes de continuar.");
//                 return;
//             }
//             currentStep++;
//             updateStep();
//         } else if (currentStep === 1) {
//             if (fotoPerfilInput.files.length === 0) {
//                 alert("Por favor, selecciona una foto de perfil antes de continuar.");
//                 return;
//             }

//             console.log("Estamos en el paso 2");

//             const bio = agregarBiografia.value;
//             const photoFile = fotoPerfilInput.files[0];

//             console.log("Biografía:", bio);
//             console.log("Foto seleccionada:", photoFile);

//             const formData = new FormData();
//             formData.append('biography', bio);
//             formData.append('profile_photo', photoFile);

//             try {
//                 const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/profileLawyer', {
//                     method: 'POST',
//                     headers: {
//                         'Authorization': `Bearer ${token}`,
//                     },
//                     body: formData,
//                 });

//                 const data = await response.json();
//                 console.log('Respuesta de la API:', data);

//                 if (response.ok) {
//                     console.log('Perfil actualizado:', data);
//                     currentStep++; // Avanzamos al siguiente paso solo si la respuesta es exitosa
//                     updateStep(); // Actualizamos la vista del paso
//                 } else {
//                     console.error('Error al actualizar perfil:', data.message);
//                 }
//             } catch (error) {
//                 console.error('Error en la solicitud:', error);
//             }
//         } else {
//             currentStep++;
//             updateStep();
//         }
//     });

//     atrasBtn.addEventListener('click', () => {
//         if (currentStep > 0) {
//             currentStep--;
//             updateStep();
//         }
//     });

//     function updateStep() {
//         steps.forEach((step, index) => {
//             const stepContent = document.getElementById(step);
//             stepContent.style.display = index === currentStep ? 'block' : 'none';
//         });

//         atrasBtn.style.display = currentStep > 0 ? 'inline-block' : 'none';
//         continuarBtn.textContent = currentStep === steps.length - 1 ? 'Finalizar' : 'Continuar';
//     }

//     updateStep();
// });
document.addEventListener('DOMContentLoaded', () => {
    const continuarBtn = document.getElementById('continuarBtnWeb');
    const atrasBtn = document.getElementById('atrasBtn');
    const agregarBiografia = document.getElementById('agregarBiografia');
    const fotoPerfilInput = document.getElementById('fotoPerfilInput');
    const areasContainer = document.getElementById('areasContainer');
    const steps = ['step-1', 'step-2', 'step-3', 'step-4'];
    let currentStep = 0;
    let selectedAreas = [];

    const token = localStorage.getItem('token'); // Obtener token del localStorage

    // Llamamos a la API para obtener las áreas
    const fetchAreas = async () => {
        try {
            const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/areas');
            const areas = await response.json();

            areas.forEach(area => {
                const button = document.createElement('button');
                button.textContent = area.name;
                button.type = 'button'; // Evitar comportamiento por defecto de submit
                button.classList.add('area-button'); // Agregar clase para estilos por defecto
                button.onclick = (event) => {
                    event.preventDefault(); // Evitar comportamiento por defecto
                    toggleAreaSelection(area.id, button);
                };
                areasContainer.appendChild(button);
            });

        } catch (error) {
            console.error('Error al cargar las áreas:', error);
        }
    };

    // Cambiar el estado de selección de un área
    const toggleAreaSelection = (areaId, button) => {
        if (selectedAreas.includes(areaId)) {
            selectedAreas = selectedAreas.filter(id => id !== areaId);
            button.classList.remove('selected'); // Remover estilo seleccionado
        } else {
            selectedAreas.push(areaId);
            button.classList.add('selected'); // Agregar estilo seleccionado
        }
    };

    // Validar formato y tamaño de imagen
    const validateImage = (file) => {
        const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        const maxSize = 2 * 1024 * 1024; // 2MB

        if (!allowedTypes.includes(file.type)) {
            return 'Solo se permiten imágenes en formato JPG, PNG o JPEG.';
        }

        if (file.size > maxSize) {
            return 'La imagen debe ser de 2MB o menos.';
        }

        return null;
    };

    // Enviar las áreas seleccionadas
    const saveSelectedAreas = async () => {
        if (selectedAreas.length === 0) {
            document.getElementById('habilidadesError').textContent = 'Por favor, selecciona al menos una área.';
            document.getElementById('habilidadesError').style.display = 'block';
            return;
        }

        const requestBody = {
            areas: selectedAreas
        };

        try {
            const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/saveAreas', {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${token}`,
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(requestBody)
            });

            if (response.ok) {
                currentStep++;
                updateStep();
            } else {
                const data = await response.json();
            }
        } catch (error) {
            console.error('Error al guardar las áreas:', error);
        }
    };


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


    // Continuar con el siguiente paso
    continuarBtn.addEventListener('click', async () => {
        if (currentStep === 0) {
            if (agregarBiografia.value.trim() === "") {
                document.getElementById('biografiaError').textContent = 'Este campo es obligatorio.';
                document.getElementById('biografiaError').style.display = 'block';
                return;
            }
            currentStep++;
            updateStep();
        } else if (currentStep === 1) {
            if (fotoPerfilInput.files.length === 0) {
                document.getElementById('fotoPerfilError').textContent = 'Este campo es obligatorio.';
                document.getElementById('fotoPerfilError').style.display = 'block';
                return;
            }

            const photoFile = fotoPerfilInput.files[0];
            const imageError = validateImage(photoFile);

            if (imageError) {
                document.getElementById('fotoPerfilError').textContent = imageError;
                document.getElementById('fotoPerfilError').style.display = 'block';
                return;
            }

            const bio = agregarBiografia.value;
            const formData = new FormData();
            formData.append('biography', bio);
            formData.append('profile_photo', photoFile);

            console.log(...formData.entries());
            try {
                const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/profileLawyer', {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                    },
                    body: formData,
                });

                if (response.ok) {
                    currentStep++;
                    updateStep();
                } else {
                    const data = await response.json();
                    console.error('Error al actualizar perfil:', data.message);
                }
            } catch (error) {
                console.error('Error en la solicitud:', error);
            }
        } else if (currentStep === 2) {
            await saveSelectedAreas(); // Guardar las áreas seleccionadas en el paso 3
        } else if (currentStep === steps.length - 1) { // Último paso
            window.location.href = '/perfilAbogadoCreado'; // Redirigir a la vista final
        } else {
            currentStep++;
            updateStep();
        }
    });

    // Navegar hacia atrás
    atrasBtn.addEventListener('click', () => {
        if (currentStep > 0) {
            currentStep--;
            updateStep();
        }
    });

    function updateStep() {
        const stepElements = document.querySelectorAll('.progress-bar .step');

        stepElements.forEach((step, index) => {
            if (index < currentStep) {
                // Pasos completados
                step.classList.add('completed');
                step.classList.remove('current');
            } else if (index === currentStep) {
                // Paso actual
                step.classList.add('current');
                step.classList.remove('completed');
            } else {
                // Pasos pendientes
                step.classList.remove('completed', 'current');
            }
        });

        // Mostrar u ocultar pasos correspondientes
        steps.forEach((stepId, index) => {
            const stepContent = document.getElementById(stepId);
            stepContent.style.display = index === currentStep ? 'block' : 'none';
        });

        if (currentStep === steps.length - 1) {
            continuarBtn.textContent = 'Finalizar'; // Cambiar el texto del botón al final
        } else {
            continuarBtn.textContent = 'Continuar'; // Cambiar el texto del botón
        }

        atrasBtn.style.display = currentStep > 0 ? 'inline-block' : 'none'; // Mostrar el botón de atrás
    }

    fetchAreas(); // Cargar las áreas al inicio
    updateStep(); // Inicializar el paso actual
});


// Obtener el modal
var modalEdit = document.getElementById("editModal");
// Obtener el enlace que abre el modal
var editLink = document.getElementById("editLink");
// Obtener el elemento <span> que cierra el modal
var spanEditClose = document.getElementsByClassName("modal-edit-close")[0];
// Obtener los elementos donde se mostrará la información del usuario
var nombreUsuario = document.getElementById("nombreUsuario");
var contactoUsuario = document.getElementById("contactoUsuario");
var dniUsuario = document.getElementById("dniUsuario");
var paisUsuario = document.getElementById("paisUsuario");
var ciudadUsuario = document.getElementById("ciudadUsuario");
var consultorioUsuario = document.getElementById("consultorioUsuario");
var biografiaUsuario = document.getElementById("biografiaUsuario");

// Cuando el usuario hace clic en el enlace, se abre el modal
editLink.onclick = function (event) {
    event.preventDefault(); // Evitar la acción predeterminada del enlace
    modalEdit.style.display = "block"; // Mostrar el modal
    // Cargar los datos actuales en los campos del formulario
    nombre.value = nombreUsuario.textContent;
    contacto.value = contactoUsuario.textContent;
    dni.value = dniUsuario.textContent;
    consultorio.value = consultorioUsuario.textContent;
    ciudad.value = ciudadUsuario.textContent;
    pais.value = paisUsuario.textContent;
    biografia.value = biografiaUsuario.textContent;
}
// Cuando el usuario hace clic en <span> (x), se cierra el modal
spanEditClose.onclick = function () {
    modalEdit.style.display = "none";
}
// Cuando el usuario hace clic en cualquier parte fuera del modal, se cierra
window.onclick = function (event) {
    if (event.target == modalEdit) {
        modalEdit.style.display = "none";
    }
}
// Manejo del formulario de edición
document.getElementById('editForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Evitar el envío del formulario
    // Obtener los nuevos valores de los inputs
    var nombre = document.getElementById('nombre').value;
    var contacto = document.getElementById('contacto').value;
    var dni = document.getElementById('dni').value;
    var consultorio = document.getElementById('consultorio').value;
    var ciudad = document.getElementById('ciudad').value;
    var pais = document.getElementById('pais').value;
    var biografia = document.getElementById('biografia').value;
    // Actualizar los elementos de perfil con los nuevos valores
    nombreUsuario.textContent = nombre;
    contactoUsuario.textContent = contacto;
    dniUsuario.textContent = dni;
    consultorioUsuario.textContent = consultorio;
    ciudadUsuario.textContent = ciudad;
    paisUsuario.textContent = pais;
    biografiaUsuario.textContent = biografia;
    // Guardar los nuevos valores en localStorage
    localStorage.setItem('nombreUsuario', nombre);
    localStorage.setItem('contactoUsuario', contacto);
    localStorage.setItem('dniUsuario', dni);
    localStorage.setItem('consultorioUsuario', consultorio);
    localStorage.setItem('ciudadUsuario', ciudad);
    localStorage.setItem('paisUsuario', pais);
    localStorage.setItem('biografiaUsuario', biografia);
    // Cierra el modal después de guardar los cambios
    modalEdit.style.display = "none";
});
// Al cargar la página, verifica si hay datos guardados
window.onload = function () {
    var nombreGuardado = localStorage.getItem('nombreUsuario');
    var contactoGuardado = localStorage.getItem('contactoUsuario');
    var dniGuardado = localStorage.getItem('dniUsuario');
    var consultorioGuardado = localStorage.getItem('consultorioUsuario');
    var ciudadGuardada = localStorage.getItem('ciudadUsuario');
    var paisGuardado = localStorage.getItem('paisUsuario');
    var biografiaGuardada = localStorage.getItem('biografiaUsuario');
    if (nombreGuardado) {
        nombreUsuario.textContent = nombreGuardado; // Cargar el nombre guardado
    }
    if (contactoGuardado) {
        contactoUsuario.textContent = contactoGuardado; // Cargar el contacto guardado
    }
    if (dniGuardado) {
        dniUsuario.textContent = dniGuardado; // Cargar el DNI guardado
    }
    if (consultorioGuardado) {
        consultorioUsuario.textContent = consultorioGuardado; // Cargar el consultorio guardado
    }
    if (ciudadGuardada) {
        ciudadUsuario.textContent = ciudadGuardada; // Cargar la ciudad guardada
    }
    if (paisGuardado) {
        paisUsuario.textContent = paisGuardado; // Cargar el país guardado
    }
    if (biografiaGuardada) {
        biografiaUsuario.textContent = biografiaGuardada; // Cargar la biografía guardada
    }
}
