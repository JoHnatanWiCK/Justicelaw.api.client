document.addEventListener('DOMContentLoaded', function() {
    // Obtener el lawyerId desde la URL
    const urlParams = new URLSearchParams(window.location.search);
    const lawyerId = window.location.pathname.split('/').pop();

    // Hacer la solicitud a la API para obtener los datos del abogado
    fetch(`https://apijusticelaw-production.up.railway.app/v1/verPerfilAbogado/${lawyerId}`)
        .then(response => response.json())
        .then(data => {
            if (data && data.lawyer) {
                // Asignar los datos en la sección de Información Personal
                document.querySelector('.telefonoWeb p').textContent = data.verification.cell_phone || 'No disponible';
                document.querySelector('.correoWeb p').textContent = data.lawyer.email || 'No disponible';
                document.querySelector('.paisWeb p').textContent = data.verification.country || 'No disponible';
                document.querySelector('.ciudadWeb p').textContent = data.verification.city || 'No disponible';

                // Asignar la biografía en la sección de Presentación
                document.getElementById('biografiaUsuario').textContent = data.profile.biography || 'No disponible';

                // Asignar las áreas de práctica
                const areasList = document.querySelector('.civ');
                areasList.innerHTML = ''; // Limpiar las áreas previas
                data.areas.forEach(area => {
                    const listItem = document.createElement('p');
                    listItem.textContent = area;
                    areasList.appendChild(listItem);
                });

            } else {
                console.log('No se encontró el abogado.');
            }
        })
        .catch(error => {
            console.error('Error al obtener los detalles del abogado:', error);
        });
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


