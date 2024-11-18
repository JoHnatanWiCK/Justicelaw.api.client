let currentStartDay = 1;
let currentMonthIndex = 0;
let currentYear = 2024;

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
    prevButton.onclick = () => {
        currentStartDay -= 7; 
        if (currentStartDay < 1) {
            currentMonthIndex = (currentMonthIndex - 1 + 12) % 12; 
            if (currentMonthIndex === 11) {
                currentYear--;
            }
            const daysInPrevMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate(); 
            currentStartDay = daysInPrevMonth + currentStartDay; 
        }
        renderDays(); 
    };
    daysContainer.appendChild(prevButton);

    for (let i = currentStartDay; i < currentStartDay + 7; i++) {
        if (i > daysInMonth) {
            currentStartDay = 1;
            currentMonthIndex = (currentMonthIndex + 1) % 12;
            if (currentMonthIndex === 0) {
                currentYear++;
            }
            renderDays();
            return; 
        }
        const dayDiv = document.createElement('div');
        dayDiv.classList.add('day');
        dayDiv.innerHTML = `<span class="date">${i}</span><span class="day-name">${getDayName(i)}</span>`;
        
        dayDiv.onclick = () => {
            document.querySelectorAll('.day').forEach(day => day.classList.remove('selected'));
            dayDiv.classList.add('selected');
        };

        daysContainer.appendChild(dayDiv);
    }

    const nextButton = document.createElement('button');
    nextButton.id = 'nextDayBtn';
    nextButton.classList.add('nextBtn');
    nextButton.innerHTML = '&gt;'; 
    nextButton.onclick = () => {
        if (currentStartDay + 7 <= daysInMonth) {
            currentStartDay += 7; 
        } else {
            currentStartDay = 1; 
            currentMonthIndex = (currentMonthIndex + 1) % 12; 
            if (currentMonthIndex === 0) {
                currentYear++;
            }
        }
        renderDays(); 
    };
    daysContainer.appendChild(nextButton);
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
    };
    monthsContainer.prepend(prevMonthButton);

    const nextMonthButton = document.createElement('button');
    nextMonthButton.innerHTML = '&gt;';
    nextMonthButton.onclick = () => {
        currentMonthIndex = (currentMonthIndex + 1) % 12; 
        renderMonths(); 
    };
    monthsContainer.appendChild(nextMonthButton);
}

function getDayName(day) {
    const names = ["Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"];
    const date = new Date(currentYear, currentMonthIndex, day); 
    return names[date.getDay() === 0 ? 6 : date.getDay() - 1]; 
}

function getMonthName(monthIndex) {
    const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    return months[monthIndex]; 
}

function renderEvents() {
    const eventContainers = document.querySelectorAll('.event-container');
    eventContainers.forEach(eventContainer => {
        const hour = parseInt(eventContainer.getAttribute('data-hour'));
        const hourIndex = hour - 10; // Suponiendo que la primera hora es a las 10:00
        eventContainer.style.top = `${hourIndex * 10}%`; // Ajusta el valor según tu diseño
    });
}

renderDays(); 
renderMonths(); 
renderEvents(); 

// Scroll behavior for the events, ensure hours don't overlap with other sections
document.querySelector('.events').addEventListener('scroll', function() {
    const hours = document.querySelector('.hours');
    // The 'hours' will move up/down but will stay within its container without overflowing
    hours.style.transform = `translateY(${this.scrollTop}px)`;
});


document.addEventListener("DOMContentLoaded", function() {
    // Seleccionar el modal y el botón de cierre
    const modal = document.getElementById("availabilityModal");
    const closeModalBtn = document.querySelector(".close");
    const saveBtn = document.querySelector(".save");

    // Función para abrir el modal al hacer clic en un evento vacío
    document.querySelectorAll(".event.vacio").forEach(event => {
        event.onclick = function () {
            modal.style.display = "block";
        };
    });

    // Cerrar el modal al hacer clic en la "X"
    closeModalBtn.onclick = function() {
        modal.style.display = "none";
    };

    // Cerrar el modal al hacer clic fuera de él
    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };

    // Guardar la selección de hora
    saveBtn.onclick = function() {
        const selectedTime = document.getElementById("timePicker").value;
        const fixedDate = document.getElementById("dateDisplay").innerText; // Obtiene la fecha fija

        if (!selectedTime) {
            alert("Por favor, selecciona una hora."); // Alerta si el campo de hora está vacío
            return;
        }

        // Aquí puedes hacer lo que necesites con la fecha fija y la hora seleccionada
        console.log("Fecha fija:", fixedDate);
        console.log("Hora seleccionada:", selectedTime);

        modal.style.display = "none"; // Cierra el modal
    };
});
