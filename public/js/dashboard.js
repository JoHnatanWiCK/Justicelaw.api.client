    async function fetchChartData(url) {
        const token = localStorage.getItem('token'); // Incluye el token de autenticación
        const response = await fetch(url, {
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        });
        return await response.json();
    }

    async function renderCharts() {
        // Cargar datos de cada gráfica
        const clientsData = await fetchChartData('https://apijusticelaw-production.up.railway.app/v1/chart-data/clients');
        const reviewsData = await fetchChartData('https://apijusticelaw-production.up.railway.app/v1/chart-data/reviews');
        const informationData = await fetchChartData('https://apijusticelaw-production.up.railway.app/v1/chart-data/information');
        const sessionsData = await fetchChartData('https://apijusticelaw-production.up.railway.app/v1/chart-data/sessions');

        // Configuración de Chart.js para cada gráfica
        const ctxClients = document.getElementById('chartClients').getContext('2d');
        new Chart(ctxClients, {
            type: 'bar',
            data: {
                labels: clientsData.labels,
                datasets: [{
                    label: 'Clientes Totales',
                    data: clientsData.data,
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                }]
            }
        });

        const ctxReviews = document.getElementById('chartReviews').getContext('2d');
        new Chart(ctxReviews, {
            type: 'line',
            data: {
                labels: reviewsData.labels,
                datasets: [{
                    label: 'Reseñas Totales',
                    data: reviewsData.data,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false,
                }]
            }
        });

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
    }

    document.addEventListener('DOMContentLoaded', renderCharts);
