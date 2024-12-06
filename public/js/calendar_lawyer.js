// Variables globales
let currentDate = new Date();
let token = localStorage.getItem('token'); // Obtén el token del almacenamiento local o cualquier otro lugar
let events = [];

// Obtener las disponibilidades del abogado
async function getAvailabilities() {
    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/disponibilidadesAbogado', {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`,
            },
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Disponibilidades obtenidas:', data); // Console log para verificar datos
            events = data.disponibilities.map(avail => ({
                date: avail.date,
                time: `${avail.startTime} - ${avail.endTime}`,
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
if (day === currentDate.getDate() && currentMonth === new Date().getMonth() && currentYear === new Date().getFullYear()) {            dayCell.classList.add("selected");
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

    // Solo cargar las horas disponibles para el día actual al generar el calendario
    const currentFormattedDate = `${currentYear}-${(currentMonth + 1).toString().padStart(2, '0')}-${currentDate.getDate().toString().padStart(2, '0')}`;
    loadAvailableHours(currentFormattedDate);
}

// Función para cargar las horas disponibles solo para el día seleccionado
function loadAvailableHours(date) {
    const availableHoursList = document.getElementById("availableHoursList");
    availableHoursList.innerHTML = ""; // Limpiar horas anteriores

    const dayEvents = events.filter(event => event.date === date);
    console.log('Eventos para la fecha seleccionada:', dayEvents); // Console log para verificar eventos del día

    // Solo cargar las horas del día seleccionado (de 9 AM a 5 PM)
    for (let i = 9; i < 18; i++) { // Asumimos un horario de 9 AM a 5 PM
        const hour = `${i.toString().padStart(2, '0')}:00 - ${(i + 1).toString().padStart(2, '0')}:00`;
        const hourItem = document.createElement("li");
        hourItem.classList.add("hour");
        hourItem.textContent = hour; // Mostrar el rango de horas

        const event = dayEvents.find(event => event.time === hour);

        if (event) {
            if (event.status === 'disponible') {
                // Si el evento está disponible
                hourItem.classList.add('available');
                hourItem.style.backgroundColor = '#E7F1F6'; // Color de disponibilidad
                hourItem.textContent = `${hour} - ${event.person}`;

                hourItem.addEventListener("click", function () {
                    // Mostrar el modal y cargar la fecha y hora en el formulario
                    openModal(date, hour, hourItem);
                });
            } else if (event.status === 'agendada') {
                // Si el evento está agendado
                hourItem.classList.add('unavailable');
                hourItem.style.backgroundColor = '#F3E6CD'; // Color para eventos agendados
                hourItem.textContent = `${hour} - Agendado`;
            }
        }  else {
            hourItem.classList.add("available");
            hourItem.addEventListener("click", function() {
                selectHour(hourItem, date, hour);
            });
        }

        availableHoursList.appendChild(hourItem);
    }
}


// Cargar las horas disponibles para todo el mes
function loadAvailableHoursForMonth() {
    // Recorrer todos los días del mes y cargar las horas disponibles
    const days = document.querySelectorAll('.day');
    days.forEach(day => {
        const date = `${currentDate.getFullYear()}-${(currentDate.getMonth() + 1).toString().padStart(2, '0')}-${day.textContent.padStart(2, '0')}`;
        loadAvailableHours(date);
    });
}

// Seleccionar una hora y abrir el modal
function selectHour(element, date, hour) {
    // Quitar la clase 'selected' de todas las horas
    document.querySelectorAll('.hour').forEach(h => h.classList.remove('selected'));
    // Añadir la clase 'selected' al elemento clicado
    element.classList.add('selected');

    openModal(date, hour, element);
}

// Abre el modal para añadir disponibilidad
function openModal(date, hour, element) {
    const modal = document.getElementById("availabilityModal");
    const modalDate = document.getElementById("modalDate");
    const modalStartTime = document.getElementById("modalStartTime");
    const modalEndTime = document.getElementById("modalEndTime");

    modalDate.value = date;
    const [start, end] = hour.split(" - ");
    modalStartTime.value = start;
    modalEndTime.value = end;

    // Posicionar el modal justo encima del área seleccionada
    const rect = element.getBoundingClientRect();
    modal.style.top = `${rect.top + window.scrollY - modal.offsetHeight}px`;
    modal.style.left = `${rect.left}px`;
    modal.style.display = "block";

    // Añadir evento de guardar al formulario del modal
    const form = document.getElementById("availabilityForm");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        saveAvailability(date, modalStartTime.value, modalEndTime.value, element);
    });
}

// Guardar disponibilidad
async function saveAvailability(date, startTime, endTime, element) {
    const formData = new FormData();
    formData.append('date', date);
    formData.append('state', 'Disponible'); // Estado fijo según la lógica dada
    formData.append('startTime', startTime);
    formData.append('endTime', endTime);

    try {
        const response = await fetch('https://apijusticelaw-production.up.railway.app/v1/guardarDisponibilidad', {
            method: 'POST',
            headers: {
                'Authorization': `Bearer ${token}`, // Asegúrate de tener el token adecuado
            },
            body: formData,
        });

        if (response.ok) {
            const data = await response.json();
            console.log('Disponibilidad creada con éxito:', data);
            // Actualizar la interfaz de usuario
            element.classList.remove('available');
            element.classList.add('selected');
            element.style.backgroundColor = '#E7F1F6';
            element.textContent = `${startTime} - ${endTime} - Hora disponible para asesoría`;

            // Cerrar el modal
            document.getElementById("availabilityModal").style.display = "none";
        } else {
            const data = await response.json();
            console.error('Error al guardar disponibilidad:', data.message);
        }
    } catch (error) {
        console.error('Error en la solicitud:', error);
    }
}

// Cerrar el modal
document.querySelector(".close").addEventListener("click", function () {
    document.getElementById("availabilityModal").style.display = "none";
});

// Navegar al mes anterior
document.getElementById("prevMonth").addEventListener("click", function () {
    currentDate.setMonth(currentDate.getMonth() - 1);
    generateCalendar();
    document.querySelectorAll('.day').forEach(d => d.classList.remove('selected'));
    loadAvailableHoursForMonth(); // Recargar las horas disponibles
});

// Navegar al mes siguiente
document.getElementById("nextMonth").addEventListener("click", function () {
    currentDate.setMonth(currentDate.getMonth() + 1);
    generateCalendar();
    document.querySelectorAll('.day').forEach(d => d.classList.remove('selected'));
    loadAvailableHoursForMonth(); // Recargar las horas disponibles
});


// Obtener las disponibilidades del abogado y generar el calendario inicial
getAvailabilities();
