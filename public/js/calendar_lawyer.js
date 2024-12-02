let currentStartDay = 1;
let currentMonthIndex = 0;
let currentYear = 2024;
let selectedDate = null; // Variable para almacenar la fecha seleccionada

// Función para renderizar los días del mes
function renderDays() {
    const daysContainer = document.querySelector('.days');
    const monthNameElement = document.getElementById('monthName');
    daysContainer.innerHTML = '';

    const daysInMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();
    monthNameElement.innerText = getMonthName(currentMonthIndex);

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

        if (currentDate === selectedDate) {
            dayDiv.classList.add('selected');
        }

        dayDiv.innerHTML = `<span class="date">${i}</span><span class="day-name">${getDayName(i)}</span>`;
        
        dayDiv.onclick = () => {
            document.querySelectorAll('.day').forEach(day => day.classList.remove('selected'));
            dayDiv.classList.add('selected');
            
            // Corregimos aquí la creación de selectedDate
            selectedDate = new Date(currentYear, currentMonthIndex, i);  // Aseguramos de usar el índice correcto del mes
            selectedDate.setHours(0, 0, 0, 0);  // Aseguramos que la hora sea 00:00:00 para evitar desajustes

            // Mostrar la fecha seleccionada en el formato "5 de enero de 2024"
            document.getElementById("dateDisplay").innerText = ` ${formatSelectedDate(selectedDate)}`;
            
            // Mostrar la fecha seleccionada en el modal si está abierto
            const modalDateDisplay = document.getElementById("modalDateDisplay");
            if (modalDateDisplay) {
                modalDateDisplay.innerText = ` ${formatSelectedDate(selectedDate)}`;
            }
        };

        daysContainer.appendChild(dayDiv);
    }

    const nextButton = document.createElement('button');
    nextButton.id = 'nextDayBtn';
    nextButton.classList.add('nextBtn');
    nextButton.innerHTML = '&gt;';
    nextButton.onclick = () => adjustStartDay('next');
    daysContainer.appendChild(nextButton);
}

// Función para ajustar el primer día de la semana al navegar entre los días
function adjustStartDay(direction) {
    const daysInMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();
    if (direction === "prev") {
        currentStartDay -= 7;
        if (currentStartDay < 1) {
            currentMonthIndex = (currentMonthIndex - 1 + 12) % 12;
            if (currentMonthIndex === 11) currentYear--;
            const daysInPrevMonth = new Date(currentYear, currentMonthIndex + 1).getDate();
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

// Función para obtener el nombre del día de la semana
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

// Función para formatear la fecha al formato "5 de enero de 2024"
function formatSelectedDate(date) {
    const dateObject = new Date(date);
    const day = dateObject.getDate();
    const month = getMonthName(dateObject.getMonth());
    const year = dateObject.getFullYear();
    return `${day} de ${month} de ${year}`;
}

document.addEventListener("DOMContentLoaded", function () {
    renderDays();
    renderMonths();

    const modal = document.getElementById("availabilityModal");
    const closeModalBtn = document.querySelector(".close");
    const saveBtn = document.querySelector(".save");

    // Mostrar el modal al hacer clic en "Editar disponibilidad asesoría"
    document.querySelectorAll(".edit-availability-option").forEach(button => {
        button.onclick = function () {
            modal.style.display = "block";
            const modalDateDisplay = document.getElementById("modalDateDisplay");
            if (modalDateDisplay) {
                modalDateDisplay.innerText = ` ${formatSelectedDate(selectedDate) || "Ninguna"}`;
            }
        };
    });

    closeModalBtn.onclick = function () {
        modal.style.display = "none";
    };

    saveBtn.onclick = function () {
        const selectedTime = document.getElementById("timePicker").value;

        if (!selectedTime) {
            alert("Por favor, selecciona una hora.");
            return;
        }

        console.log("Fecha fija:", selectedDate);
        console.log("Hora fija:", selectedTime);

        modal.style.display = "none";
    };

    // Funcionalidad para abrir el modal al hacer clic en un evento vacío (vacio)
    document.querySelectorAll('.event.vacio').forEach(event => {
        event.addEventListener('click', function () {
            // Verifica que el evento esté vacío antes de abrir el modal
            if (this.classList.contains('vacio')) {
                modal.style.display = "block";
                const modalDateDisplay = document.getElementById("modalDateDisplay");
                if (modalDateDisplay) {
                    modalDateDisplay.innerText = ` ${formatSelectedDate(selectedDate) || "Ninguna"}`;
                }
            }
        });
    });

    // Manejo de clic en la opción "Eliminar Disponibilidad" dentro del modal
    document.querySelectorAll('.delete-availability-option').forEach(button => {
        button.addEventListener('click', function () {
            const event = this.closest('.event');
            if (event) {
                event.classList.remove('ocupado');
                event.classList.add('vacio');
                event.innerHTML = ''; // Borra el contenido del evento
                console.log("Evento marcado como vacío.");
            }
        });
    });
});
