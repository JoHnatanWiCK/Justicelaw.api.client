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
            selectedDate = currentDate;
            document.getElementById("dateDisplay").innerText = `Fecha seleccionada: ${selectedDate}`;
            
            // Mostrar la fecha seleccionada en el modal si está abierto
            const modalDateDisplay = document.getElementById("modalDateDisplay");
            if (modalDateDisplay) {
                modalDateDisplay.innerText = `Fecha seleccionada: ${selectedDate}`;
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

document.addEventListener("DOMContentLoaded", function () {
    renderDays();
    renderMonths();

    const modal = document.getElementById("availabilityModal");
    const closeModalBtn = document.querySelector(".close");
    const saveBtn = document.querySelector(".save");

    // Mostrar el modal al hacer clic en eventos que no están vacíos
    document.querySelectorAll(".event:not(.vacio)").forEach(event => {
        event.onclick = function () {
            modal.style.display = "block";
            const modalDateDisplay = document.getElementById("modalDateDisplay");
            if (modalDateDisplay) {
                modalDateDisplay.innerText = `Fecha seleccionada: ${selectedDate || "Ninguna"}`;
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

    // Funcionalidad para los menús de opciones de los tres puntos
    document.querySelectorAll(".dots-menu").forEach(menuButton => {
        menuButton.addEventListener("click", function (event) {
            event.stopPropagation(); // Evita cerrar el menú al hacer clic en él.
            const optionsMenu = this.nextElementSibling;
    
            // Cerrar otros menús abiertos
            document.querySelectorAll(".options-menu").forEach(menu => {
                if (menu !== optionsMenu) {
                    menu.classList.remove("open");
                }
            });
    
            // Alternar visibilidad del menú actual
            optionsMenu.classList.toggle("open");
        });
    });
    
    // Manejo de clic en la opción "Eliminar Disponibilidad" dentro del modal
    document.querySelectorAll('.delete-availability-option').forEach(button => {
        button.addEventListener('click', function () {
            // Encuentra el evento que contiene el botón de eliminación
            const event = this.closest('.event'); // Esto selecciona el contenedor de la asesoría (evento)
            
            if (event) {
                // Verifica si el evento ya está marcado como ocupado
                if (!event.classList.contains('ocupado')) {
                    // Si no está ocupado, cambiar a ocupado (rojo)
                    event.classList.remove('vacio');  // Elimina la clase de evento vacío
                    event.classList.add('ocupado');   // Agrega la clase de evento ocupado
    
                    console.log("Evento marcado como ocupado:", event.id);
                } else {
                    console.log("Este evento ya está marcado como ocupado.");
                }
            }
        });
    });
});
    