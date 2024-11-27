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

// Función para mostrar el menú de opciones
function showOptionsMenu(event) {
    const optionsMenu = event.target.nextElementSibling;
    optionsMenu.style.display = (optionsMenu.style.display === 'block') ? 'none' : 'block';
    event.stopPropagation();
}

// Cerrar el menú si el usuario hace clic fuera de él
window.onclick = function(event) {
    if (!event.target.matches('.more-options') && !event.target.matches('.options-menu')) {
        document.querySelectorAll('.options-menu').forEach(menu => menu.style.display = 'none');
    }
};

document.addEventListener("DOMContentLoaded", function() {
    renderDays();
    renderMonths();

    const modal = document.getElementById("availabilityModal");
    const closeModalBtn = document.querySelector(".close");
    const saveBtn = document.querySelector(".save");

    document.querySelectorAll(".event:not(.vacio)").forEach(event => {
        event.onclick = function () {
            modal.style.display = "block";
        };
    });

    closeModalBtn.onclick = function() {
        modal.style.display = "none";
    };

    saveBtn.onclick = function() {
        const selectedTime = document.getElementById("timePicker").value;
        const fixedDate = document.getElementById("dateDisplay").innerText;

        if (!selectedTime) {
            alert("Por favor, selecciona una hora.");
            return;
        }

        console.log("Fecha fija:", fixedDate);
        console.log("Hora seleccionada:", selectedTime);

        modal.style.display = "none";
    };

    // Manejador de clics en los tres puntos
    const moreOptionsBtns = document.querySelectorAll('.more-options');
    moreOptionsBtns.forEach(btn => {
        btn.addEventListener('click', showOptionsMenu);
    });
});
