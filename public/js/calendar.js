// Variables globales
let currentDate = new Date();
const url = window.location.pathname; // Obtiene la parte de la URL después del dominio
const lawyerId = url.split('/calendarioAbogado/')[1]; // Divide y toma lo que está después de /calendarioAbogado/
console.log(lawyerId); // Aquí estará el ID
let token = localStorage.getItem('token'); // Obtén el token del almacenamiento local o cualquier otro lugar

let events = [];


// Función para obtener las preguntas y respuestas
async function loadQuestionsAndAnswers() {
    try {


      const response = await fetch(`https://apijusticelaw-production.up.railway.app/v1/user-questions-with-answers?lawyer_id=${lawyerId}`, {
        method: 'GET',
        headers: {
          'Authorization': `Bearer ${token}`, // Enviar el token en la cabecera Authorization
          'Content-Type': 'application/json',  // Asegura que el servidor reciba los datos en formato JSON
        },
      });

      if (response.ok) {
        const data = await response.json();
        console.log('Preguntas y respuestas obtenidas:', data);

        const modalQuestionSelect = document.getElementById('modalQuestion');
        const modalAnswerSelect = document.getElementById('modalAnswer');

        // Limpiar el select de respuestas
        modalAnswerSelect.innerHTML = '<option value="">Selecciona una pregunta primero</option>';

        // Llenar el select de preguntas
        modalQuestionSelect.innerHTML = '<option value="">Selecciona una pregunta...</option>';
        data.forEach(question => {
          const option = document.createElement('option');
          option.value = question.id;
          option.textContent = question.affair;  // Muestra el asunto de la pregunta
          modalQuestionSelect.appendChild(option);
        });

        // Manejar el cambio de selección en las preguntas
        // Manejar el cambio de selección en las preguntas
modalQuestionSelect.addEventListener('change', function() {
    const selectedQuestionId = modalQuestionSelect.value;

    // Limpiar el select de respuestas
    modalAnswerSelect.innerHTML = '<option value="">Selecciona una respuesta...</option>';

    if (selectedQuestionId) {
      // Buscar la pregunta seleccionada en los datos
      const selectedQuestion = data.find(question => question.id === parseInt(selectedQuestionId));

      // Verificar que la pregunta y sus respuestas existen
      if (selectedQuestion && selectedQuestion.answers && selectedQuestion.answers.length > 0) {
        // Llenar el select de respuestas con las respuestas de la pregunta seleccionada
        selectedQuestion.answers.forEach(answer => {
          const option = document.createElement('option');
          option.value = answer.id;
          option.textContent = answer.content;  // Asegúrate de que 'content' es el texto correcto para la opción
          modalAnswerSelect.appendChild(option);
        });
      } else {
        // Si no hay respuestas disponibles
        modalAnswerSelect.innerHTML = '<option value="">No hay respuestas disponibles</option>';
      }
    }
  });

      } else {
        const data = await response.json();
        console.error('Error al obtener las preguntas:', data.message);
      }
    } catch (error) {
      console.error('Error en la solicitud:', error);
    }
  }

  // Llamada a la función para cargar las preguntas y respuestas
  loadQuestionsAndAnswers();


  async function getAvailabilities() {
    try {
        const response = await fetch(`https://apijusticelaw-production.up.railway.app/v1/calendarioAbogado/${lawyerId}`, {
            method: 'GET',
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Disponibilidades obtenidas:', data); // Console log para verificar datos
            events = data.disponibilities.map(avail => ({
                date: avail.date,
                startTime: avail.startTime, // Solo se toma el 'startTime'
                endTime: avail.endTime,     // También se guarda el 'endTime' para mostrar el rango
                status: avail.state.toLowerCase(),
                person: "Hora disponible para asesoría"
            }));
            generateCalendar();
        } else {
            const data = await response.json();
            console.error('Error al obtener disponibilidades:', data.message);
        }
    } catch (error) {
        console.error('Error en la solicitud:', error);
    }
}
// Generar el calendario con los días del mes
function generateCalendar() {
    const title = document.getElementById("calendarTitle");
    const calendarGrid = document.querySelector(".calendar-grid");

    // Mostrar el mes y año
    const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    const currentMonth = currentDate.getMonth();
    const currentYear = currentDate.getFullYear();
    title.textContent = `${monthNames[currentMonth]} ${currentYear}`;

    // Limpiar el calendario anterior
    calendarGrid.innerHTML = "";

    // Fecha actual
    const firstDay = new Date(currentYear, currentMonth, 1);
    const lastDay = new Date(currentYear, currentMonth + 1, 0);

    // Calcular el día de la semana en que comienza el mes (0 = Domingo, 1 = Lunes, ..., 6 = Sábado)
    const firstDayIndex = (firstDay.getDay() + 6) % 7; // Ajustar para que Lunes sea 0

    // Crear los días del calendario
    for (let i = 0; i < firstDayIndex; i++) {
        const emptyCell = document.createElement("div");
        calendarGrid.appendChild(emptyCell);
    }

    for (let day = 1; day <= lastDay.getDate(); day++) {
        const dayCell = document.createElement("div");
        dayCell.classList.add("day");
        dayCell.textContent = day;
        calendarGrid.appendChild(dayCell);

        const currentFormattedDate = `${currentYear}-${(currentMonth + 1).toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;

        // Marcar la fecha actual como seleccionada solo al cargar la página inicialmente
        if (day === currentDate.getDate() && currentMonth === new Date().getMonth() && currentYear === new Date().getFullYear()) {
            dayCell.classList.add("selected");
            loadAvailableHours(currentFormattedDate);
        }

        dayCell.addEventListener("click", function () {
            // Quitar la clase 'selected' de todos los días
            document.querySelectorAll('.day').forEach(d => d.classList.remove('selected'));
            // Añadir la clase 'selected' al día clicado
            dayCell.classList.add('selected');
            loadAvailableHours(currentFormattedDate);
        });
    }
}


function loadAvailableHours(date) {
    const availableHoursList = document.getElementById("availableHoursList");
    availableHoursList.innerHTML = ""; // Limpiar horas anteriores

    const dayEvents = events.filter(event => event.date === date);
    console.log('Eventos para la fecha seleccionada:', dayEvents); // Console log para verificar eventos del día

    for (let i = 9; i < 18; i++) { // Horario de 9 AM a 5 PM
        const hour = `${i.toString().padStart(2, '0')}:00`; // Solo hora de inicio (no rango)
        const hourItem = document.createElement("li");
        hourItem.classList.add("hour");
        hourItem.textContent = `${hour} - ${hour}`;  // Muestra el rango completo de hora (de inicio a fin)

        const event = dayEvents.find(event => event.startTime === hour); // Filtrar solo por 'startTime'

        if (event) {
            if (event.status === 'disponible') {
                // Si el evento está disponible
                hourItem.classList.add('available');
                hourItem.style.backgroundColor = '#E7F1F6'; // Color de disponibilidad
                hourItem.textContent = `${hour} - ${event.endTime} - ${event.person}`;

                hourItem.addEventListener("click", function () {
                    // Mostrar el modal y cargar la fecha y hora en el formulario
                    openModal(date, hour, hourItem);
                });
            } else if (event.status === 'agendada') {
                // Si el evento está agendado
                hourItem.classList.add('unavailable');
                hourItem.style.backgroundColor = '#F3E6CD'; // Color para eventos agendados
                hourItem.textContent = `${hour} - ${event.endTime} - Agendado`;
            }
        } else {
            // Si no hay evento para esa hora, marcar como no disponible
            hourItem.classList.add("unavailable");
            hourItem.textContent = `${hour} - ${hour} - No disponible`; // O algún texto que indique que no hay evento
        }

        availableHoursList.appendChild(hourItem);
    }

}
// Función para abrir el modal y cargar la fecha y hora seleccionadas
function openModal(date, hour, element) {
    const modal = document.getElementById("availabilityModal");
    const modalDateInput = document.getElementById("modalDate");
    const modalTimeInput = document.getElementById("modalTime");

    modalDateInput.value = date;
    modalTimeInput.value = hour;

    const rect = element.getBoundingClientRect();
    modal.style.top = `${rect.top + window.scrollY - modal.offsetHeight}px`;
    modal.style.left = `${rect.left}px`;
    modal.style.display = "block";

    // Cargar las preguntas y respuestas
    loadQuestionsAndAnswers();
}
// Cerrar el modal cuando se hace clic en la X
document.getElementById("closeModal").addEventListener("click", function () {
    const modal = document.getElementById("availabilityModal");
    modal.style.display = "none";
});

// Función para reservar una cita
function bookAppointment(date, hour) {
    alert(`Reservaste la cita para el ${date} a las ${hour}.`);
    // Aquí puedes añadir la lógica para confirmar la cita mediante la API
}

// Navegar al mes anterior
document.getElementById("prevMonth").addEventListener("click", function () {
    currentDate.setMonth(currentDate.getMonth() - 1);
    generateCalendar();
});

// Navegar al mes siguiente
document.getElementById("nextMonth").addEventListener("click", function () {
    currentDate.setMonth(currentDate.getMonth() + 1);
    generateCalendar();
});

// Obtener las disponibilidades del abogado y generar el calendario inicial
getAvailabilities();


// Función para enviar los datos a la API cuando se confirma la reserva
document.getElementById("confirmBookingButton").addEventListener("click", async function () {
    const modalDate = document.getElementById("modalDate").value;
    const modalTime = document.getElementById("modalTime").value;
    const modalQuestion = document.getElementById("modalQuestion").value;
    const modalAnswer = document.getElementById("modalAnswer").value;

    // Verifica si todos los campos están completos
    if (!modalDate || !modalTime || !modalQuestion || !modalAnswer) {
        alert("Por favor, complete todos los campos.");
        return;
    }

    // Datos que se van a enviar a la API
    const formData = {
        date: modalDate,
        time: modalTime, // Solo enviamos el 'startTime'
        question_id: modalQuestion,
        answer_id: modalAnswer,
    };

    console.log("Datos enviados para la asesoría:", formData);

    try {
        // Enviar los datos para guardar la asesoría
        const response = await fetch("https://apijusticelaw-production.up.railway.app/v1/guardarAsesoria", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Authorization": `Bearer ${token}`, // Asegúrate de enviar el token
            },
            body: JSON.stringify(formData),
        });

        if (response.ok) {
            const data = await response.json();
            console.log("Respuesta de guardarAsesoria:", data);

            // Mostrar el enlace de Zoom si está disponible
            if (data.consulting && data.consulting.zoom_url) {
                const zoomLinkContainer = document.getElementById("zoomLinkContainer");
                zoomLinkContainer.innerHTML = `<a href="${data.consulting.zoom_url}" target="_blank">Unirse a la reunión de Zoom</a>`;
                alert(`Asesoría reservada exitosamente. Enlace de la reunión: ${data.consulting.zoom_url}`);
            } else {
                alert("Asesoría reservada, pero no se generó un enlace de Zoom.");
            }

            // Recargar la página para actualizar datos
            location.reload();
        } else {
            const errorData = await response.json();
            console.error("Error al guardar la asesoría:", errorData);
            alert("Hubo un error al guardar la asesoría.");
        }
    } catch (error) {
        console.error("Error en la solicitud:", error);
        alert("Hubo un error al intentar enviar la solicitud.");
    }
});

