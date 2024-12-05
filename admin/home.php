<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        } */

        h2 {
            text-align: center;
            color: red;
        }

        .chart-container {
            width: 80%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h2>Statistik Penjualan</h2>
    <div class="chart-container">
        <canvas id="salesChart"></canvas>
    </div>

    <script>
        // Data penjualan (Contoh statik, bisa diganti dengan data dari API atau database)
        const salesData = {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'],
            datasets: [{
                label: 'Penjualan (dalam juta)',
                data: [12, 19, 3, 5, 2, 10], // Data penjualan
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        // Konfigurasi chart
        const config = {
            type: 'bar', // Tipe chart: bar, line, pie, dll.
            data: salesData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Statistik Penjualan Bulanan'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Render chart
        const salesChart = new Chart(
            document.getElementById('salesChart'),
            config
        );
    </script>
</body>
</html>
