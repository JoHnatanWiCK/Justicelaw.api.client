window.protectedRoutes = window.protectedRoutes || [];

document.addEventListener('DOMContentLoaded', () => {

    
    const currentPath = window.location.pathname;
    const userRole = window.getRole();

    // Verificar si la ruta es protegida
    const protectedRoute = window.protectedRoutes.find(route => route.path === currentPath);
    
    if (protectedRoute) {
        // Verificar si la vista/layout coincide con el rol
        const pageLayout = document.querySelector('body').getAttribute('data-layout'); // Obtener el atributo 'data-layout'

        console.log(pageLayout);
        // Verificar autenticación
        if (!window.isAuthenticated()) {
            showAuthModal();
            return;
        }

        // Verificar si el rol del usuario coincide con el layout
        if (pageLayout === 'layoutAbogado' && userRole !== 'lawyer') {
            showAccessDeniedModal();
            return;
        } 

        if (pageLayout === 'layoutLogin' && userRole !== 'user') {
            showAccessDeniedModal();
            return;
        }

        if (pageLayout === 'layoutAdmin' && userRole !== 'admin') {
            showAccessDeniedModal();
            return;
        }

        if (pageLayout === 'layout' && userRole) {
            // Si estás logueado y llegaste a la vista pública, puedes redirigir a la página correspondiente
            window.location.href = '/home';
            return;
        }
    }
});

function isAuthenticated() {
    const token = localStorage.getItem('token');
    return !!token;
}

function getRole() {
    return localStorage.getItem('role');
}

window.isAuthenticated = isAuthenticated;
window.getRole = getRole;
window.protectedRoutes = protectedRoutes;

function showAuthModal() {
    const modal = document.getElementById('authModal');
    modal.style.display = 'flex';

    const loginBtn = document.getElementById('loginBtn');
    loginBtn.addEventListener('click', () => {
        window.location.href = '/login';
    });
}

function showAccessDeniedModal() {
    // Crear el overlay con fondo blanco
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');
    document.body.appendChild(overlay);

    // Crear el modal
    const modal = document.createElement('div');
    modal.classList.add('access-denied-modal');
    modal.innerHTML = `
        <h2>No tienes acceso a esta ruta</h2>
        <p>Lo sentimos, pero no tienes permisos para acceder a esta página.</p>
        <button id="closeModalBtn">Cerrar</button>
    `;
    document.body.appendChild(modal);

    const closeModalBtn = document.getElementById('closeModalBtn');
    closeModalBtn.addEventListener('click', () => {
        window.history.back(); 
    });
}
