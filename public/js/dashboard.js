// Función para obtener los datos de la gráfica desde el servidor
async function fetchChartData(url) {
    const token = localStorage.getItem('token'); // Obtiene el token de autenticación
    const response = await fetch(url, {
        headers: {
            'Authorization': `Bearer ${token}`, // Incluye el token en la cabecera
            'Content-Type': 'application/json', // Define el tipo de contenido
        },
    });
    return await response.json(); // Devuelve los datos en formato JSON
}

// Función para renderizar las gráficas
async function renderCharts() {
    // Cargar los datos para cada gráfica
    const clientsData = await fetchChartData('https://apijusticelaw-production.up.railway.app/v1/chart-data/clients');
    const reviewsData = await fetchChartData('https://apijusticelaw-production.up.railway.app/v1/chart-data/reviews');
    const informationData = await fetchChartData('https://apijusticelaw-production.up.railway.app/v1/chart-data/information');
    const sessionsData = await fetchChartData('https://apijusticelaw-production.up.railway.app/v1/chart-data/sessions');
    
    // Nuevas gráficas
    const visitorsData = await fetchChartData('https://apijusticelaw-production.up.railway.app/v1/chart-data/visitors');
    const usersByRoleData = await fetchChartData('https://apijusticelaw-production.up.railway.app/v1/chart-data/users-by-role');

    // Configuración de Chart.js para cada gráfica

    // Clientes
    const ctxClients = document.getElementById('chartClients').getContext('2d');
    new Chart(ctxClients, {
        type: 'bar',
        data: {
            labels: clientsData.labels,
            datasets: [{
                label: 'Clientes Totales',
                data: clientsData.data,
                backgroundColor: 'rgba(54, 162, 235, 0.6)', // Color de las barras
            }]
        }
    });

    // Reseñas
    const ctxReviews = document.getElementById('chartReviews').getContext('2d');
    new Chart(ctxReviews, {
        type: 'line',
        data: {
            labels: reviewsData.labels,
            datasets: [{
                label: 'Reseñas Totales',
                data: reviewsData.data,
                borderColor: 'rgba(75, 192, 192, 1)', // Color de la línea
                fill: false, // No llenar el área bajo la línea
            }]
        }
    });

    // Información
    const ctxInformation = document.getElementById('chartInformation').getContext('2d');
    new Chart(ctxInformation, {
        type: 'pie',
        data: {
            labels: informationData.labels,
            datasets: [{
                label: 'Información Publicada',
                data: informationData.data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                ],
            }]
        }
    });

    // Sesiones
    const ctxSessions = document.getElementById('chartSessions').getContext('2d');
    new Chart(ctxSessions, {
        type: 'doughnut',
        data: {
            labels: sessionsData.labels,
            datasets: [{
                label: 'Asesorías Programadas',
                data: sessionsData.data,
                backgroundColor: [
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(201, 203, 207, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                ],
            }]
        }
    });

    // Visitantes
    const ctxVisitantes = document.getElementById('chartVisitantes').getContext('2d');
    new Chart(ctxVisitantes, {
        type: 'bar',
        data: {
            labels: visitorsData.labels,
            datasets: [{
                label: 'Visitantes Totales',
                data: visitorsData.data,
                backgroundColor: 'rgba(255, 159, 64, 0.6)', // Color de las barras
            }]
        }
    });

    // Usuarios por rol
    const ctxUsuariosPorRol = document.getElementById('chartUsuariosPorRol').getContext('2d');
    new Chart(ctxUsuariosPorRol, {
        type: 'pie',
        data: {
            labels: usersByRoleData.labels,
            datasets: [{
                label: 'Usuarios por Rol',
                data: usersByRoleData.data,
                backgroundColor: [
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                ],
            }]
        }
    });
}

// Ejecutar la función para renderizar las gráficas cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', renderCharts);
