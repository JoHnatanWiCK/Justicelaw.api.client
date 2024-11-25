const protectedRoutes = ['/homeLogin', '/crearPerfil'];

function isAuthenticated() {
    const token = localStorage.getItem('token');
    return !!token;
}

window.isAuthenticated = isAuthenticated;
window.protectedRoutes = protectedRoutes;
document.addEventListener('DOMContentLoaded', () => {
    const currentPath = window.location.pathname;

    if (window.protectedRoutes.includes(currentPath) && !window.isAuthenticated()) {
        showAuthModal();
    }
});


function showAuthModal() {
    const modal = document.getElementById('authModal');
    modal.style.display = 'flex';

    const loginBtn = document.getElementById('loginBtn');
    loginBtn.addEventListener('click', () => {
        window.location.href = '/login';
    });
}
