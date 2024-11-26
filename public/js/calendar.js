let currentStartDay = 1;
let currentMonthIndex = 0;
let currentYear = 2024;
let selectedDate = null; // Variable para almacenar la fecha seleccionada

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

        // Construir la fecha actual
        const currentDate = `${currentYear}-${String(currentMonthIndex + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;

        // Verificar si este día es el seleccionado
        if (currentDate === selectedDate) {
            dayDiv.classList.add('selected');
        }

        dayDiv.innerHTML = `<span class="date">${i}</span><span class="day-name">${getDayName(i)}</span>`;
        
        dayDiv.onclick = () => {
            document.querySelectorAll('.day').forEach(day => day.classList.remove('selected'));
            dayDiv.classList.add('selected');
            selectedDate = currentDate; // Actualizar la fecha seleccionada
            document.getElementById("dateDisplay").innerText = selectedDate;
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
        renderDays(); // Asegurarnos de actualizar los días al cambiar el mes
    };
    monthsContainer.prepend(prevMonthButton);

    const nextMonthButton = document.createElement('button');
    nextMonthButton.innerHTML = '&gt;';
    nextMonthButton.onclick = () => {
        currentMonthIndex = (currentMonthIndex + 1) % 12;
        renderMonths();
        renderDays(); // Asegurarnos de actualizar los días al cambiar el mes
    };
    monthsContainer.appendChild(nextMonthButton);
}

function getDayName(day) {
    const date = new Date(currentYear, currentMonthIndex, day);
    return ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"][date.getDay()];
}

function getMonthName(monthIndex) {
    const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    return months[monthIndex];
}

document.addEventListener("DOMContentLoaded", function() {
    renderDays();
    renderMonths();

    const modal = document.getElementById("availabilityModal");
    const closeModalBtn = document.querySelector(".close");
    const saveBtn = document.querySelector(".save");

    // Asegura eventos en asesorías vacías
    document.querySelectorAll(".event.vacio").forEach(event => {
        event.onclick = function () {
            console.log("Asesoría vacía seleccionada");
            modal.style.display = "block";
        };
    });

    closeModalBtn.onclick = function() {
        modal.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
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
});
