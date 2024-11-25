const confirmLogoutButton = document.getElementById('confirmLogout');
const cancelLogoutButton = document.getElementById('cancelLogout');
const logoutModal = document.getElementById('logoutModal');

async function logout() {
    const token = localStorage.getItem('token');

    if (!token) {
        alert('No estás autenticado.');
        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/logoutPrueba', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            }
        });

        if (response.ok) {
            localStorage.removeItem('token');
            localStorage.removeItem('role');

            closeModal();
            window.location.href = '/login';
        } else {
            const errorData = await response.json();
            console.error('Error:', errorData);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

function closeModal() {
    logoutModal.style.display = 'none'; 
}

if (confirmLogoutButton) {
    confirmLogoutButton.addEventListener('click', logout);
}

if (cancelLogoutButton) {
    cancelLogoutButton.addEventListener('click', closeModal);
}