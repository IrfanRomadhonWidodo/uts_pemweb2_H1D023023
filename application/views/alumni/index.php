<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Alumni Universitas Khaist</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --light-blue: #EBF5FB;
            --accent: #74b9ff;
        }
        
        body {
            background-color: var(--light-blue);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        
        .card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .btn {
            border-radius: 10px;
            font-weight: 600;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .btn-success {
            background-color: #27ae60;
            border-color: #27ae60;
        }
        
        .btn-success:hover {
            background-color: #219653;
            border-color: #219653;
        }
        
        .btn-info {
            background-color: #00b4d8;
            border-color: #00b4d8;
            color: white;
        }
        
        .btn-info:hover {
            background-color: #0096c7;
            border-color: #0096c7;
            color: white;
        }
        
        .table-primary {
            background-color: #bde0fe;
        }
        
        .page-title {
            position: relative;
            display: inline-block;
            margin-bottom: 1rem;
        }
        
        .page-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background: linear-gradient(to right, var(--primary-color), transparent);
            bottom: -10px;
            left: 25%;
        }
        
        .badge-year {
            background-color: var(--primary-color);
            color: white;
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 20px;
        }
        
        .search-card {
            background-color: white;
            border-left: 5px solid var(--primary-color);
        }
        
        .stats-quickview {
            background-color: white;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 20px;
            border-bottom: 3px solid var(--accent);
        }
        
        .action-btn {
            margin: 0 3px;
        }
        
        .table {
            vertical-align: middle;
        }
        
        .empty-state {
            padding: 40px 0;
        }
        
        .empty-state i {
            font-size: 3rem;
            color: #a0aec0;
        }
        
        /* Responsive tweaks */
        @media (max-width: 768px) {
            .action-btn {
                padding: 0.25rem 0.5rem;
                font-size: 0.75rem;
                margin-bottom: 5px;
                display: block;
                width: 100%;
            }
        }
    </style>
</head>
<body>

<!-- Navbar with gradient -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?= site_url('alumni') ?>">
            <i class="fas fa-user-graduate me-2"></i>
            Data Alumni
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?= site_url('alumni') ?>">
                        <i class="fas fa-home me-1"></i> Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('index.php/alumni/create') ?>">
                        <i class="fas fa-plus-circle me-1"></i> Tambah Alumni
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('alumni/statistik') ?>">
                        <i class="fas fa-chart-bar me-1"></i> Statistik
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container py-4 animate-in">
    <div class="text-center mb-4">
        <h2 class="fw-bold page-title">Data Alumni Universitas Khaist</h2>
        <p class="text-muted">Kelola dan telusuri data alumni dengan mudah dan efisien</p>
    </div>

   <!-- Quick Stats Summary -->
<div class="row mb-4 justify-content-center">
    <div class="col-md-3 mb-3">
        <div class="stats-quickview d-flex align-items-center">
            <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                <i class="fas fa-users text-primary fs-3"></i>
            </div>
            <div>
                <h3 class="fs-4 mb-0"><?= isset($total_alumni) ? $total_alumni : '0' ?></h3>
                <p class="text-muted mb-0">Total Alumni</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stats-quickview d-flex align-items-center">
            <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                <i class="fas fa-user-plus text-success fs-3"></i>
            </div>
            <div>
                <h3 class="fs-4 mb-0"><?= isset($alumni_tahun_ini) ? $alumni_tahun_ini : '0' ?></h3>
                <p class="text-muted mb-0">Alumni Tahun Ini</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stats-quickview d-flex align-items-center">
            <div class="bg-info bg-opacity-10 p-3 rounded-3 me-3">
                <i class="fas fa-graduation-cap text-info fs-3"></i>
            </div>
            <div>
                <h3 class="fs-4 mb-0"><?= isset($total_prodi) ? $total_prodi : '0' ?></h3>
                <p class="text-muted mb-0">Program Studi</p>
            </div>
        </div>
    </div>
</div>

    <!-- Pencarian dengan styling lebih menarik -->
    <div class="card search-card shadow-sm mb-4">
        <div class="card-body">
            <h5 class="card-title mb-3"><i class="fas fa-search me-2"></i>Cari Alumni</h5>
            <form method="get" action="<?= site_url('alumni') ?>" class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label">Nama Alumni</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-user"></i></span>
                        <input type="text" name="keyword" class="form-control" placeholder="Masukkan nama alumni..." value="<?= $this->input->get('keyword') ?>">
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Tahun Lulus</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-calendar-alt"></i></span>
                        <input type="number" name="tahun" class="form-control" placeholder="Tahun" value="<?= $this->input->get('tahun') ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Program Studi</label>
                    <select name="prodi" class="form-select">
                        <option value="">Semua Program Studi</option>
                        <option value="Informatika" <?= $this->input->get('prodi') == 'Teknik Informatika' ? 'selected' : '' ?>>Teknik Informatika</option>
                        <option value="Sistem Informasi" <?= $this->input->get('prodi') == 'Sistem Informasi' ? 'selected' : '' ?>>Sistem Informasi</option>
                        <option value="Teknik Sipil" <?= $this->input->get('prodi') == 'Manajemen' ? 'selected' : '' ?>>Manajemen</option>
                        <option value="Teknik Industri" <?= $this->input->get('prodi') == 'Akuntansi' ? 'selected' : '' ?>>Akuntansi</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary flex-fill">
                            <i class="fas fa-search me-1"></i> Cari
                        </button>
                        <a href="<?= site_url('alumni') ?>" class="btn btn-outline-secondary flex-fill">
                            <i class="fas fa-redo me-1"></i> Reset
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Tombol Aksi -->
    <div class="mb-4 d-flex justify-content-between">
        <a href="<?= site_url('index.php/alumni/create') ?>" class="btn btn-success">
            <i class="fas fa-plus-circle me-2"></i> Tambah Alumni
        </a>
        <div>
            <a href="<?= site_url('alumni/statistik') ?>" class="btn btn-info">
                <i class="fas fa-chart-pie me-2"></i> Lihat Statistik
            </a>
        </div>
    </div>

    <!-- Tabel Data dengan styling yang lebih menarik -->
    <div class="card shadow">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0"><i class="fas fa-list me-2"></i>Daftar Alumni</h5>
            <span class="badge bg-primary"><?= isset($alumni) ? count($alumni) : '0' ?> Alumni</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle m-0">
                    <thead class="table-primary">
                        <tr>
                            <th class="text-center" width="5%">#</th>
                            <th width="25%">Nama</th>
                            <th width="15%">NIM</th>
                            <th width="20%">Program Studi</th>
                            <th width="10%">Tahun Lulus</th>
                            <th class="text-center" width="25%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (isset($alumni) && count($alumni) > 0): $no = 1; foreach ($alumni as $a): ?>
                        <tr>
                            <td class="text-center"><?= $no++ ?></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar-sm bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-2 text-center" style="width: 40px; height: 40px; line-height: 34px;">
                                        <?= substr($a->nama, 0, 1) ?>
                                    </div>
                                    <div>
                                        <h6 class="mb-0"><?= $a->nama ?></h6>
                                        <small class="text-muted"><?= isset($a->email) ? $a->email : '-' ?></small>
                                    </div>
                                </div>
                            </td>
                            <td><?= $a->nim ?></td>
                            <td><?= $a->program_studi ?></td>
                            <td><span class="badge-year"><?= $a->tahun_lulus ?></span></td>
                            <td class="text-center">
                                <a href="<?= site_url('alumni/edit/'.$a->id) ?>" class="btn btn-sm btn-outline-warning action-btn">
                                    <i class="fas fa-edit me-1"></i> Edit
                                </a>
                                <a href="<?= site_url('alumni/delete/'.$a->id) ?>" class="btn btn-sm btn-outline-danger action-btn" 
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash me-1"></i> Hapus
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; else: ?>
                        <tr>
                            <td colspan="6" class="text-center empty-state py-5">
                                <i class="fas fa-search mb-3 d-block"></i>
                                <h5>Tidak ada data alumni ditemukan</h5>
                                <p class="text-muted">Coba ubah filter pencarian atau tambahkan data alumni baru</p>

                            </td>
                        </tr>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white">
            <nav>
                <?php if(isset($pagination)) echo $pagination; ?>
            </nav>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-white mt-4 py-4 border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5><i class="fas fa-user-graduate me-2"></i>Sistem Data Alumni</h5>
                <p class="text-muted">Portal pengelolaan data alumni universitas</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0">© <?= date('Y') ?> Universitas. All rights reserved.</p>
                <small class="text-muted">Irfan Romadhon Widodo - H1D023023</small>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script>
    // Add animation when page loads
    document.addEventListener('DOMContentLoaded', function() {
        const animateElements = document.querySelectorAll('.animate-in');
        animateElements.forEach((el, index) => {
            el.style.animationDelay = `${index * 0.1}s`;
        });
    });
    
    // Enable tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    });
</script>
</body>
</html>