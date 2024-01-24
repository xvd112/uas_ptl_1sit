<script>
    // Pie Chart - Dokter
    var dok = document.getElementById('pieDok').getContext('2d');
    new Chart(dok, {
        type: 'pie',
        data: {
            labels: @json($dataDok['labels']),
            datasets: [{
                data: @json($dataDok['data']),
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        },
        options: {
            scales: {
                maintainAspectRatio: false,
                responsive: true,
            }
        }
    });

    // Line Chart - Pendaftaran
    var daftar = document.getElementById('lineDaftar').getContext('2d');
    new Chart(daftar, {
        type: 'line',
        data: {
            labels: @json($dataDaftar['labels']),
            datasets: [{
                label: 'Pendaftaran',
                data: @json($dataDaftar['data']),
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
            }]
        },
        options: {
            scales: {
                maintainAspectRatio: false,
                responsive: true,
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
