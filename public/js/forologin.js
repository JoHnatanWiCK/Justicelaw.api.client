document.addEventListener('DOMContentLoaded', async () => {
    console.log('Script cargado y DOM completamente cargado');

    const userMenu = document.querySelector('.content-abogado');
    const spanUserName = userMenu.querySelector('h3');

    const userEmail = document.querySelector('.correoWeb');
    const spanUserEmail = userEmail.querySelector('p');

    const lawyerIdElement = document.getElementById('lawyerid'); // Elemento para mostrar el ID del abogado

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

            const { id, name, last_names, email } = data;

            // Actualizar elementos del DOM con los datos obtenidos
            spanUserName.textContent = `${name} ${last_names}`;
            spanUserEmail.textContent = email;

            if (lawyerIdElement) {
                lawyerIdElement.textContent = id; // Mostrar el ID del abogado en el elemento correspondiente
            }
        }
    } catch (error) {
        console.error('Error:', error.message);
    }
});

function closeModala() {
    console.log('Cerrando modal...');

    document.getElementById('respuestas').style.display = 'none';
}


document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('questionForm');
    const userInput = document.getElementById('userInput');

    form.addEventListener('submit', function (e) {
        if (!userInput.value) {
            e.preventDefault(); // Evita el envío del formulario
            alert('Es necesario iniciar sesión para acceder a esta función.');
        }
    });
});

function openTaskModal() {
    document.getElementById('askTaskModal').style.display = 'block';
}
function closeTaskModal() {
    document.getElementById('askTaskModal').style.display = 'none';
}


document.querySelectorAll('.avatar-link, .name-link').forEach(link => {
    link.addEventListener('click', function(event) {
        const lawyerId = this.getAttribute('data-lawyer-id');

        localStorage.setItem('selectedLawyerId', lawyerId);

        console.log('ID del abogado seleccionado:', lawyerId);

        window.location.href = `/perfilabogado/${lawyerId}`;

    });
});


document.addEventListener('DOMContentLoaded', async () => {




    console.log('Script cargado y DOM completamente cargado');

    const userNameElement = document.getElementById('userid');

    const token = localStorage.getItem('token');

    if (!token) {
        console.error('Token no encontrado. Asegúrate de que el usuario esté autenticado.');
        return;
    }

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/auth/me', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        });




        if (!response.ok) {
            if (response.status === 401) {

                console.error('Tu sesión ha expirado. Debes iniciar sesión nuevamente.');
                return;
            } else {
                throw new Error('Error al obtener datos del usuario');
            }
        } else {
            const data = await response.json();
            console.log('Datos del usuario:', data);


            const { id,name, last_name, rol, email } = data;


                userNameElement.textContent = `${id} `;
                const userInput = document.getElementById('userInput');
                userInput.value = userNameElement.textContent.trim();
                userRolElement.textContent = rol || 'Usuario';
                userNameInput.value = `${name}`;
                lastNameInput.value = `${last_name}`;
                emailInput.value = `${email}`;


        }
    } catch (error) {
        console.error('Error:', error.message);
    }
});


document.getElementById('category-filter').addEventListener('change', function () {
    const selectedCategory = this.value;
    const cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        const categoryId = card.getAttribute('data-category-id');
        if (selectedCategory === '' || categoryId === selectedCategory) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
});


function showModal(id, title, content, date,user,last) {
    document.getElementById('respuestas').style.display = 'flex';


    document.getElementById('modal-user').innerText = user+" "+last;
    document.getElementById('modal-title').innerText = title;
    document.getElementById('modal-content').innerText = content;
    document.getElementById('modal-date').innerText = date;

    document.querySelectorAll('.post').forEach(post => {
        if (post.getAttribute('data-question-id') === id.toString()) {
            post.style.display = 'block';
        } else {
            post.style.display = 'none';
        }
    });

}


document.getElementById('show-more').addEventListener('click', function() {
    const extraCategories = document.querySelectorAll('.extra-category');
    const isHidden = extraCategories[0].style.display === 'none';

    extraCategories.forEach(function(category) {
        category.style.display = isHidden ? 'list-item' : 'none';
    });

    this.textContent = isHidden ? 'Ocultar' : 'Ver más';
});


        //cambiar a home
document.getElementById('home').addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = '../home/home.html';
});



document.getElementById('show-more').addEventListener('click', function() {
    document.querySelectorAll('.extra-category').forEach(function(category) {
        category.style.display = 'list-item';
    });
    this.style.display = 'none';
});






document.addEventListener('DOMContentLoaded', async () => {
    console.log('Script cargado y DOM completamente cargado');

    // Función para manejar los clicks en botones de like/dislike
    document.querySelectorAll('.like-button, .dislike-button').forEach(button => {
        button.addEventListener('click', async function (event) {
            event.preventDefault();

            const questionId = this.getAttribute('data-post-id'); // ID de la publicación
            const isLike = this.classList.contains('like-button'); // Determina si es like o dislike
            const token = localStorage.getItem('token'); // Token del usuario

            if (!token) {
                alert('Debes iniciar sesión para dar like o dislike.');
                return;
            }

            try {
                // Enviar la interacción al backend
                const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/likes/lk', {
                    method: 'POST',
                    headers: {
                        'Authorization': `Bearer ${token}`,
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        question_id: questionId,
                        is_like: isLike, // true para like, false para dislike
                    }),
                });

                if (!response.ok) {
                    throw new Error('Error al procesar tu interacción.');
                }

                const data = await response.json();
                console.log('Respuesta del servidor:', data);

                // Actualizar la interfaz de usuario con los nuevos valores
                const likesCountElement = document.querySelector(`#likes-count-${questionId}`);
                const dislikesCountElement = document.querySelector(`#dislikes-count-${questionId}`);

                likesCountElement.textContent = data.likes_count; // Actualizar número de likes
                dislikesCountElement.textContent = data.dislikes_count; // Actualizar número de dislikes

                // Cambiar estilos de los botones para reflejar el estado actual
                if (isLike) {
                    this.classList.add('active');
                    document.querySelector(`#dislike-button-${questionId}`).classList.remove('active');
                } else {
                    this.classList.add('active');
                    document.querySelector(`#like-button-${questionId}`).classList.remove('active');
                }
            } catch (error) {
                console.error('Error al enviar el like/dislike:', error.message);
            }
        });
    });
});
