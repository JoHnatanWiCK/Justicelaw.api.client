let currentStartDay = 1; 
let currentMonthIndex = 0; // Índice del mes (0 = Enero)
let currentYear = 2024;

// Función para renderizar días
function renderDays() {
    const daysContainer = document.querySelector('.days');
    const monthNameElement = document.getElementById('monthName'); 
    daysContainer.innerHTML = ''; // Limpiar el contenedor de días

    const daysInMonth = new Date(currentYear, currentMonthIndex + 1, 0).getDate();
    monthNameElement.innerText = getMonthName(currentMonthIndex); // Actualizar el nombre del mes

    // Flecha para el día anterior
    const prevButton = document.createElement('button');
    prevButton.id = 'prevDayBtn';
    prevButton.classList.add('prevBtn'); // Agregar clase para aplicar estilos
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
        
        // Agregar evento para seleccionar el día
        dayDiv.onclick = () => {
            // Limpiar la selección anterior
            document.querySelectorAll('.day').forEach(day => day.classList.remove('selected'));
            // Agregar la clase 'selected' al día seleccionado
            dayDiv.classList.add('selected');
        };

        daysContainer.appendChild(dayDiv);
    }

    // Flecha para el día siguiente
    const nextButton = document.createElement('button');
    nextButton.id = 'nextDayBtn';
    nextButton.classList.add('nextBtn'); // Agregar clase para aplicar estilos
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

// Función para renderizar meses
function renderMonths() {
    const monthsContainer = document.querySelector('.months');
    monthsContainer.innerHTML = ''; // Limpiar el contenedor de meses

    const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", 
                    "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    // Mostrar solo enero a julio
    for (let i = 0; i <= 6; i++) {
        const monthDiv = document.createElement('div');
        monthDiv.id = `month${i}`;
        monthDiv.innerText = months[(currentMonthIndex + i) % 12]; // Mostrar el mes correspondiente
        monthsContainer.appendChild(monthDiv);
    }

    // Botón para el mes anterior
    const prevMonthButton = document.createElement('button');
    prevMonthButton.innerHTML = '&lt;';
    prevMonthButton.onclick = () => {
        currentMonthIndex = (currentMonthIndex - 1 + 12) % 12; // Decrementar el índice del mes
        renderMonths(); // Renderizar los meses nuevamente
    };
    monthsContainer.prepend(prevMonthButton);

    // Botón para el mes siguiente
    const nextMonthButton = document.createElement('button');
    nextMonthButton.innerHTML = '&gt;';
    nextMonthButton.onclick = () => {
        currentMonthIndex = (currentMonthIndex + 1) % 12; // Incrementar el índice del mes
        renderMonths(); // Renderizar los meses nuevamente
    };
    monthsContainer.appendChild(nextMonthButton);
}

// Función para obtener el nombre del día
function getDayName(day) {
    const names = ["Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"];
    const date = new Date(currentYear, currentMonthIndex, day); 
    return names[date.getDay() === 0 ? 6 : date.getDay() - 1]; 
}

// Función para obtener el nombre del mes
function getMonthName(monthIndex) {
    const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    return months[monthIndex]; 
}

// Inicializar el calendario
renderDays(); // Inicializar días
renderMonths(); // Inicializar meses
