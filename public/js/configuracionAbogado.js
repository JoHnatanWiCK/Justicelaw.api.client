async function validarPerfil() {
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

            const perfilCreado = data && (data.photo || data.biography || data.name);

            if (perfilCreado) {
                window.location.href = '/perfilAbogadoCreado';
            } else {
                window.location.href = '/crearPerfilAbogado';
            }
        } else {
            const errorData = await response.json();
            console.error('Error al cargar los datos del perfil:', errorData);
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

document.getElementById('perfilSidebar').addEventListener('click', function (e) {
    e.preventDefault(); 
    validarPerfil(); 
});


document.getElementById('logoutButton')?.addEventListener('click', function(event) {
    event.preventDefault();  
    document.getElementById('logoutModal').style.display = 'block';  
});
