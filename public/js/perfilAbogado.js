document.addEventListener('DOMContentLoaded', async () => {

  console.log('Script cargado y DOM completamente cargado'); 

  const userMenu = document.querySelector('.content-abogado');
  const spanUserName = userMenu.querySelector('h3');

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

          const { name, last_names } = data;
          spanUserName.textContent = `${name} ${last_names}`;

          // Llamar a la función para cargar la foto de perfil
          // await cargarFotoPerfil();
      }
  } catch (error) {
      console.error('Error:', error.message);
  }
});


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
let currentStep = 0;
document.addEventListener("DOMContentLoaded", function () {
    const continuarBtn = document.getElementById("continuarBtn");
    const atrasBtn = document.getElementById("atrasBtn");
    const agregarBiografia = document.getElementById("agregarBiografia");
    const practiceTitle = document.getElementById("practice-title");
    const practiceDescription = document.getElementById("practice-description");
    updateStep();
    continuarBtn.addEventListener("click", function () {
        if (currentStep < 4 && agregarBiografia.value) {
            currentStep++;
            updateStep();
        }
    });
    atrasBtn.addEventListener("click", function () {
        if (currentStep > 1) {
            currentStep--;
            updateStep();
        }
    });
    function updateStep() {
        const steps = document.querySelectorAll(".step");
        steps.forEach((step, index) => {
            step.classList.remove("completed", "current");
            if (index < currentStep) {
                step.classList.add("completed");
            }
            else if (index === currentStep) {
                step.classList.add("current");
            }
        });
        changeContent(currentStep);
        continuarBtn.disabled = !(currentStep === 1 ? agregarBiografia.value : true);
        atrasBtn.style.display = currentStep > 0 ? "inline-block" : "none";
    }
    function changeContent(step) {
        switch (step) {
            case 0:
                practiceTitle.textContent = "Agrega tu biografía personal";
                practiceDescription.textContent = "Asegúrate de incluir una breve biografía que destaque tu experiencia, áreas de especialización y filosofía profesional.";
                agregarBiografia.placeholder = "Escribe tu biografía aquí...";
                agregarBiografia.value = "";
                break;
            case 1:
                practiceTitle.textContent = "Completa tu información de contacto";
                practiceDescription.textContent = "Por favor, asegúrate de que tu información de contacto esté actualizada.";
                agregarBiografia.placeholder = "Ejemplo: tu correo electrónico...";
                agregarBiografia.value = "";
                break;
            case 2:
                practiceTitle.textContent = "Agrega tus habilidades";
                practiceDescription.textContent = "Selecciona tus habilidades y áreas de especialización.";
                agregarBiografia.placeholder = "Ejemplo: Derecho Penal, Derecho Civil...";
                agregarBiografia.value = "";
                break;
            case 3:
                practiceTitle.textContent = "Revisa y completa tu perfil";
                practiceDescription.textContent = "Asegúrate de que toda tu información esté correcta antes de finalizar.";
                agregarBiografia.placeholder = "Revisa tu información aquí...";
                agregarBiografia.style.display = "none";
                setTimeout(() => {
                    window.location.href = "/perfilAbogadoCreado"
                }, 2000);
                break;
        }
    }
    agregarBiografia.addEventListener("input", function () {
        continuarBtn.disabled = !agregarBiografia.value;
    });
    steps[0].classList.add("current");
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
editLink.onclick = function(event) {
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
spanEditClose.onclick = function() {
    modalEdit.style.display = "none";
}
// Cuando el usuario hace clic en cualquier parte fuera del modal, se cierra
window.onclick = function(event) {
    if (event.target == modalEdit) {
        modalEdit.style.display = "none";
    }
}
// Manejo del formulario de edición
document.getElementById('editForm').addEventListener('submit', function(event) {
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
window.onload = function() {
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