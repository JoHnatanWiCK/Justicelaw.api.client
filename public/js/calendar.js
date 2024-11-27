let currentStartDay = 1;
let currentMonthIndex = 0;
let currentYear = 2024;
let selectedDate = null; // Variable para almacenar la fecha seleccionada

// Función para guardar en localStorage
function saveToLocalStorage(key, value) {
    localStorage.setItem(key, JSON.stringify(value));
}

// Función para obtener datos de localStorage
function getFromLocalStorage(key) {
    return JSON.parse(localStorage.getItem(key)) || {}; // Si no hay datos, retornar un objeto vacío
}

// Función para mostrar la fecha seleccionada
function formatSelectedDate(day, monthIndex, year) {
    const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    return `${day} de ${months[monthIndex]} de ${year}`;
}

// Función para renderizar los días
function renderDays() {
    const daysContainer = document.querySelector('.days');
    const monthNameElement = document.getElementById('monthName');
    daysContainer.innerHTML = '';

    const daysInMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();
    monthNameElement.innerText = getMonthName(currentMonthIndex);

    // Recuperar el estado de ocupación de localStorage
    const occupiedDays = getFromLocalStorage('occupiedDays'); // Recuperamos los días ocupados

    const prevButton = document.createElement('button');
    prevButton.id = 'prevDayBtn';
    prevButton.classList.add('prevBtn');
    prevButton.innerHTML = '&lt;';
    prevButton.onclick = () => adjustStartDay('prev');
    daysContainer.appendChild(prevButton);

    for (let i = currentStartDay; i < currentStartDay + 7; i++) {
        if (i > daysInMonth) break;

        const dayDiv = document.createElement('div');
        dayDiv.classList.add('day');

        const currentDate = `${currentYear}-${String(currentMonthIndex + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;

        // Si el día está ocupado, añadir la clase 'ocupado'
        if (occupiedDays[currentDate]) {
            dayDiv.classList.add('ocupado');
            dayDiv.onclick = null; // Deshabilitar clic para los días ocupados
        } else {
            // Si el día no está ocupado, permitir la selección
            dayDiv.onclick = () => {
                document.querySelectorAll('.day').forEach(day => day.classList.remove('selected'));
                dayDiv.classList.add('selected');
                updateSelectedDate(i, currentMonthIndex, currentYear);
            };
        }

        dayDiv.innerHTML = `<span class="date">${i}</span><span class="day-name">${getDayName(i)}</span>`;
        daysContainer.appendChild(dayDiv);
    }

    const nextButton = document.createElement('button');
    nextButton.id = 'nextDayBtn';
    nextButton.classList.add('nextBtn');
    nextButton.innerHTML = '&gt;';
    nextButton.onclick = () => adjustStartDay('next');
    daysContainer.appendChild(nextButton);
}

// Función para actualizar la fecha seleccionada
function updateSelectedDate(day, monthIndex, year) {
    selectedDate = `${year}-${String(monthIndex + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
    const formattedDate = formatSelectedDate(day, monthIndex, year);
    document.getElementById("dateDisplay").innerText = formattedDate;
}

// Función para ajustar el inicio del mes cuando se navega
function adjustStartDay(direction) {
    const daysInMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();
    if (direction === "prev") {
        currentStartDay -= 7;
        if (currentStartDay < 1) {
            currentMonthIndex = (currentMonthIndex - 1 + 12) % 12;
            if (currentMonthIndex === 11) currentYear--;
            const daysInPrevMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();
            currentStartDay = daysInPrevMonth + currentStartDay;
        }
    } else {
        if (currentStartDay + 7 <= daysInMonth) {
            currentStartDay += 7;
        } else {
            currentMonthIndex = (currentMonthIndex + 1) % 12;
            if (currentMonthIndex === 0) currentYear++;
            currentStartDay = (currentStartDay + 7) - daysInMonth;
        }
    }
    renderDays();
}

// Función para renderizar los meses
function renderMonths() {
    const monthsContainer = document.querySelector('.months');
    monthsContainer.innerHTML = '';

    const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
                    "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    for (let i = 0; i <= 6; i++) {
        const monthDiv = document.createElement('div');
        monthDiv.id = `month${i}`;
        monthDiv.innerText = months[(currentMonthIndex + i) % 12];
        monthsContainer.appendChild(monthDiv);
    }

    const prevMonthButton = document.createElement('button');
    prevMonthButton.innerHTML = '&lt;';
    prevMonthButton.onclick = () => {
        currentMonthIndex = (currentMonthIndex - 1 + 12) % 12;
        renderMonths();
        renderDays();
    };
    monthsContainer.prepend(prevMonthButton);

    const nextMonthButton = document.createElement('button');
    nextMonthButton.innerHTML = '&gt;';
    nextMonthButton.onclick = () => {
        currentMonthIndex = (currentMonthIndex + 1) % 12;
        renderMonths();
        renderDays();
    };
    monthsContainer.appendChild(nextMonthButton);
}

// Función para obtener el nombre del día
function getDayName(day) {
    const date = new Date(currentYear, currentMonthIndex, day);
    return ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"][date.getDay()];
}

// Función para obtener el nombre del mes
function getMonthName(monthIndex) {
    const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    return months[monthIndex];
}

// Función para cargar el estado de los eventos ocupados
function loadEventState() {
    const eventStates = JSON.parse(localStorage.getItem('eventStates')) || [];
    eventStates.forEach(state => {
        const event = document.getElementById(state.id);
        if (event) {
            if (state.isOccupied) {
                event.classList.add('ocupado');
                event.classList.remove('vacio');
                event.onclick = null; // Deshabilitar clic para los eventos ocupados
            }
        }
    });
}

// Guardar el estado de los eventos
function saveEventState() {
    const events = Array.from(document.querySelectorAll(".event"));
    const eventStates = events.map(event => ({
        id: event.id,
        isOccupied: event.classList.contains("ocupado")
    }));
    localStorage.setItem('eventStates', JSON.stringify(eventStates));
}

document.addEventListener("DOMContentLoaded", function () {
    renderDays();
    renderMonths();
    loadEventState(); // Cargar los eventos ocupados desde el localStorage

    const modal = document.getElementById("availabilityModal");
    const closeModalBtn = document.querySelector(".close");
    const saveBtn = document.querySelector(".save");

    let currentSelectedEvent = null; // Variable para almacenar el evento seleccionado

    // Mostrar el modal cuando un evento vacío se selecciona
    document.querySelectorAll(".event.vacio").forEach(event => {
        event.onclick = function () {
            currentSelectedEvent = event;
            modal.style.display = "block";
        };
    });

    closeModalBtn.onclick = function () {
        modal.style.display = "none";
    };

    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };

    saveBtn.onclick = function () {
        const selectedTime = document.getElementById("timePicker")?.value;

        if (!selectedTime) {
            alert("Por favor, selecciona una hora.");
            return;
        }

        if (currentSelectedEvent) {
            currentSelectedEvent.classList.remove("vacio");
            currentSelectedEvent.classList.add("ocupado"); // Cambiar a 'ocupado'
            currentSelectedEvent.onclick = null;
        }

        saveEventState(); // Guardar el estado de los eventos en Local Storage
        modal.style.display = "none"; // Cerrar el modal
    };
});
