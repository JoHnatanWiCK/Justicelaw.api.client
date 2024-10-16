// navegar entre dias y mesess
let currentStartDay = 1; 
let currentMonth = 0;
let currentYear = 2024;

function renderDays() {
    const daysContainer = document.querySelector('.days');
    const monthNameElement = document.getElementById('monthName'); 
    daysContainer.innerHTML = ''; 

    monthNameElement.innerText = getMonthName(currentMonth); 


    const prevButton = document.createElement('button');
    prevButton.id = 'prevBtn';
    prevButton.innerHTML = '&lt;'; 
    prevButton.onclick = () => {
        
        if (currentStartDay === 1) {
            currentMonth = (currentMonth - 1 + 12) % 12; 
            if (currentMonth === 11) {
                currentYear--;
            }
            const daysInPrevMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
            currentStartDay = daysInPrevMonth - 6;
        } else {
            currentStartDay -= 7;
            if (currentStartDay < 1) {
                currentMonth = (currentMonth - 1 + 12) % 12; 
                if (currentMonth === 11) { 
                    currentYear--;
                }
                const daysInPrevMonth = new Date(currentYear, currentMonth + 1, 0).getDate(); 
                currentStartDay = daysInPrevMonth + currentStartDay; 
            }
        }
        renderDays(); 
    };
    daysContainer.appendChild(prevButton);

    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();

    for (let i = currentStartDay; i < currentStartDay + 7; i++) {
        if (i > daysInMonth) { 
            currentStartDay = 1;
            currentMonth = (currentMonth + 1) % 12;
            if (currentMonth === 0) {
                currentYear++; 
            }
            renderDays();
            return; 
        }
        const dayDiv = document.createElement('div');
        dayDiv.classList.add('day');
        dayDiv.innerHTML = `<span class="date">${i}</span><span class="day-name">${getDayName(i)}</span>`;
        daysContainer.appendChild(dayDiv);
    }
    const nextButton = document.createElement('button');
    nextButton.id = 'nextBtn';
    nextButton.innerHTML = '&gt;'; 
    nextButton.onclick = () => {
        if (currentStartDay + 7 <= daysInMonth) {
            currentStartDay += 7; 
        } else {
            currentStartDay = 1; 
            currentMonth = (currentMonth + 1) % 12; 
            if (currentMonth === 0) {
                currentYear++; 
            }
        }
        renderDays(); 
    };
    daysContainer.appendChild(nextButton);
}

function getDayName(day) {
    const names = ["Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"];
    const date = new Date(currentYear, currentMonth, day); 
    return names[date.getDay() === 0 ? 6 : date.getDay() - 1]; 
}

function getMonthName(monthIndex) {
    const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
                    "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    return months[monthIndex]; 
}

renderDays();
