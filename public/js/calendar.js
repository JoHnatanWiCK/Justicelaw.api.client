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

renderDays(); 
renderMonths(); 
