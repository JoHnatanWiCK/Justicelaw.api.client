



document.addEventListener('DOMContentLoaded', () => {
    const likeButtons = document.querySelectorAll('.like-btn');
    const dislikeButtons = document.querySelectorAll('.dislike-btn');

    const sendRequest = async (url, elementId) => {
        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
            });

            if (response.ok) {
                const data = await response.json();
                document.getElementById(elementId).textContent = data.likes ?? data.dislikes;
            } else {
                alert('Error al procesar la solicitud.');
            }
        } catch (error) {
            console.error('Error:', error);
            alert('Ocurrió un error.');
        }
    };

    likeButtons.forEach(button => {
        button.addEventListener('click', () => {
            const questionId = button.getAttribute('data-id');
            sendRequest(`/questions/${questionId}/like`, `likes-${questionId}`);
        });
    });

    dislikeButtons.forEach(button => {
        button.addEventListener('click', () => {
            const questionId = button.getAttribute('data-id');
            sendRequest(`/questions/${questionId}/dislike`, `dislikes-${questionId}`);
        });
    });
});
   
   
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



function showModal(id, title, content, date,user,last) {
    const modal = document.getElementById("answers");
    modal.style.display = "block";    

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




// Función para abrir el modal
function openModal() {
    document.getElementById('askModal').style.display = 'block';
  }
  



  


  // Función para cerrar el modal
  function closeModala() {
    document.getElementById('askModal').style.display = 'none';
  }
  
  // Cierra el modal al hacer clic fuera del contenido
  window.onclick = function(event) {
    const modal = document.getElementById('askModal');
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  };
  

  window.onclick = function(event) {
    const modal = document.getElementById('answers');
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  };


function closeModal() {
    console.log('Cerrando modal...');

    document.getElementById('answers').style.display = 'none';
}












const dateInput = document.getElementById('dateInput');

const today = new Date();
const formattedDate = today.toISOString().split('T')[0];

dateInput.value = formattedDate;

















document.getElementById('respuestas').addEventListener('click', function() {
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




    