document.addEventListener('DOMContentLoaded', async () => {
    console.log('Script cargado y DOM completamente cargado');

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

         

            if (lawyerIdElement) {
                lawyerIdElement.textContent = id; 
                
                const spanValue = document.getElementById('lawyerid').innerText.trim();

                // Asignar el valor al input
                const questionInput = document.getElementById('lawyerInput');
                questionInput.value = spanValue;// Mostrar el ID del abogado en el elemento correspondiente
            }
        }
    } catch (error) {
        console.error('Error:', error.message);
    }
});




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






document.addEventListener('DOMContentLoaded', () => {
    // Obtener el input de fecha
    const dateInput = document.getElementById('dateInput');

    const today = new Date();
    const formattedDate = today.toISOString().split('T')[0];
    
    dateInput.value = formattedDate;
    
});


document.addEventListener('DOMContentLoaded', () => {
    // Obtener el input de fecha
    const dateInput = document.getElementById('dateput');

    const today = new Date();
    const formattedDate = today.toISOString().split('T')[0];
    
    dateInput.value = formattedDate;
    
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

    document.getElementById('questionid').innerText = id;

    const spanValue = document.getElementById('questionid').innerText.trim();

    // Asignar el valor al input
    const questionInput = document.getElementById('questionInput');
    questionInput.value = spanValue;


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




