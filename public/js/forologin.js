document.addEventListener('DOMContentLoaded', () => {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Manejar clic en "Me gusta"
    document.querySelectorAll('.btn-like').forEach(button => {
        button.addEventListener('click', () => {
            const questionId = button.dataset.id;

            fetch(`/questions/${questionId}/like`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
            })
                .then(response => response.json())
                .then(data => {
                    document.querySelector(`#likes-${questionId}`).textContent = data.likes; // Actualiza contador
                })
                .catch(error => console.error('Error:', error));
        });
    });

    // Manejar clic en "No me gusta"
    document.querySelectorAll('.btn-dislike').forEach(button => {
        button.addEventListener('click', () => {
            const questionId = button.dataset.id;

            fetch(`/questions/${questionId}/dislike`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
            })
                .then(response => response.json())
                .then(data => {
                    document.querySelector(`#dislikes-${questionId}`).textContent = data.dislikes; // Actualiza contador
                })
                .catch(error => console.error('Error:', error));
        });
    });
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






const dateInput = document.getElementById('dateInput');

const today = new Date();
const formattedDate = today.toISOString().split('T')[0];

dateInput.value = formattedDate;




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



