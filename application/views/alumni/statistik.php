<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Statistik Alumni</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3498db;
            --primary-light: #ebf5fb;
            --secondary-color: #2980b9;
            --text-primary: #2c3e50;
            --text-secondary: #7f8c8d;
            --text-light: #95a5a6;
            --bg-light: #f8f9fa;
            --card-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-primary);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }
        
        .col, .col-12 {
            padding: 0 15px;
            width: 100%;
        }
        
        .mb-0 { margin-bottom: 0; }
        .mb-4 { margin-bottom: 2rem; }
        .me-2 { margin-right: 0.5rem; }
        .py-3 { padding-top: 1rem; padding-bottom: 1rem; }
        .py-5 { padding-top: 3rem; padding-bottom: 3rem; }
        .p-4 { padding: 1.5rem; }
        
        .d-flex {
            display: flex;
        }
        
        .justify-content-between {
            justify-content: space-between;
        }
        
        .align-items-center {
            align-items: center;
        }
        
        .card {
            background-color: white;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        }
        
        .card-header {
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
        
        .card-footer {
            border-top: 1px solid rgba(0,0,0,0.05);
        }
        
        .bg-white {
            background-color: white;
        }
        
        .text-primary {
            color: var(--primary-color);
            padding: 0.25rem 0.5rem;
        }
        
        .text-muted {
            color: var(--text-secondary);
        }
        
        .text-center {
            text-align: center;
        }
        
        .small {
            font-size: 0.875rem;
        }
        
        h3 {
            font-weight: 600;
            letter-spacing: -0.5px;
        }
        
        h5 {
            font-weight: 500;
            letter-spacing: -0.3px;
        }
        
        .dashboard-title {
            position: relative;
            display: inline-block;
            padding-bottom: 8px;
        }
        
        .dashboard-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 3px;
        }
        
        .chart-container {
            position: relative;
            min-height: 350px;
        }
        
        .chart-description {
            font-style: italic;
            font-weight: 300;
        }
        
        .badge {
            display: inline-block;
            padding: 0.25rem 0.5rem;
            border-radius: 20px;
            background-color: var(--primary-light);
            color: var(--primary-color);
            font-size: 0.75rem;
            font-weight: 500;
        }
        .back-button {
        font-weight: 600;
        color: var(--text-primary); /* Sesuaikan dengan warna teks utama */
        border-radius: 6px;
        transition: background-color 0.3s ease;
        text-decoration: none !important;
        }

        .back-button:hover {
            color: var(--primary-color);
        }

    </style>
</head>
<body>

    <div class="container py-5">
    
            <a href="<?= site_url('index.php/alumni') ?>" class="back-button text-reset text-decoration-none d-flex align-items-center">
            <i class="fas fa-arrow-left me-2"></i> Kembali
            </a>


        <div class="row mb-4">
            <div class="col">
                <h3 class="dashboard-title text-primary mb-0">
                    <i class="fas fa-chart-bar me-2"></i>Statistik Alumni
                </h3>
                <p class="text-muted small">
                    <span class="badge">Data Terverifikasi</span> 
                    Visualisasi komprehensif lulusan berdasarkan tahun dan program studi
                </p>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-primary">Jumlah Lulusan Per Tahun</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="chart-container">
                            <canvas id="chartLulusanTahun"></canvas>
                        </div>
                    </div>
                    <div class="card-footer bg-white text-muted text-center py-3">
                        <small class="chart-description">Grafik ini menunjukkan tren pertumbuhan jumlah alumni yang berhasil lulus setiap tahun.</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="mb-0 text-primary">Distribusi Program Studi Per Tahun</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="chart-container">
                            <canvas id="chartProdiPerTahun"></canvas>
                        </div>
                    </div>
                    <div class="card-footer bg-white text-muted text-center py-3">
                        <small class="chart-description">Persebaran lulusan berdasarkan program studi menunjukkan diversitas keahlian alumni setiap tahun.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Set warna tema utama
        const primaryColor = '#3498db';
        const secondaryColors = [
            '#3498db', '#2ecc71', '#e74c3c', '#f39c12', '#9b59b6', 
            '#1abc9c', '#d35400', '#34495e', '#16a085', '#c0392b'
        ];

        // Chart 1: Lulusan per tahun
        const tahunData = <?= json_encode(array_column($per_tahun, 'tahun_lulus')) ?>;
        const totalLulus = <?= json_encode(array_column($per_tahun, 'total')) ?>;

        new Chart(document.getElementById('chartLulusanTahun'), {
            type: 'bar',
            data: {
                labels: tahunData,
                datasets: [{
                    label: 'Jumlah Lulusan',
                    data: totalLulus,
                    backgroundColor: primaryColor,
                    borderRadius: 6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top'
                    },
                    tooltip: {
                        backgroundColor: 'rgba(52, 152, 219, 0.8)',
                        titleFont: {
                            size: 14,
                            family: 'Poppins'
                        },
                        bodyFont: {
                            size: 13,
                            family: 'Poppins'
                        },
                        padding: 12
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            font: {
                                family: 'Poppins'
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Poppins'
                            }
                        }
                    }
                },
                animation: {
                    duration: 1000,
                    easing: 'easeOutQuart'
                }
            }
        });

        // Chart 2: Prodi per tahun
        const rawData = <?= json_encode($prodi_per_tahun) ?>;
        const grouped = {};

        rawData.forEach(item => {
            if (!grouped[item.tahun_lulus]) grouped[item.tahun_lulus] = {};
            grouped[item.tahun_lulus][item.program_studi] = item.total;
        });

        const allProdi = [...new Set(rawData.map(i => i.program_studi))];
        const labels = Object.keys(grouped);
        const datasets = allProdi.map((prodi, index) => ({
            label: prodi,
            data: labels.map(tahun => grouped[tahun][prodi] || 0),
            backgroundColor: secondaryColors[index % secondaryColors.length]
        }));

        new Chart(document.getElementById('chartProdiPerTahun'), {
            type: 'bar',
            data: {
                labels,
                datasets
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { 
                        position: 'bottom',
                        labels: {
                            padding: 20,
                            usePointStyle: true,
                            boxWidth: 10,
                            font: {
                                family: 'Poppins'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(52, 152, 219, 0.8)',
                        titleFont: {
                            size: 14,
                            family: 'Poppins'
                        },
                        bodyFont: {
                            size: 13,
                            family: 'Poppins'
                        },
                        padding: 12
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                family: 'Poppins'
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        },
                        ticks: {
                            font: {
                                family: 'Poppins'
                            }
                        }
                    }
                },
                animation: {
                    duration: 1000,
                    easing: 'easeOutQuart'
                }
            }
        });
    </script>
</body>
</html>