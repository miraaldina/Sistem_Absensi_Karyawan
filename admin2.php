<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WinniCode Admin Dashboard">
    <meta name="author" content="WinniCode">
    <meta name="keywords" content="admin dashboard, sistem absensi">

    <!-- Title Page-->
    <title>Dashboard Admin - WinniCode</title>

    <!-- Fontfaces CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom CSS -->
    <link href="css/admin2.css" rel="stylesheet">
</head>

<body>
    <?php 
    session_start();
    require_once("koneksi.php");
    if (!isset($_SESSION['username'])) {
        header("location: index.php");
    } else {
        $username = $_SESSION['username'];  
    }
    ?>

    <div class="dashboard-wrapper">
        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <div class="logo-icon"></div>
                    <div class="logo-text">WinniCode</div>
                </div>
                <div class="sidebar-subtitle">Admin Dashboard</div>
            </div>

            <nav class="sidebar-nav">
                <ul class="nav-list">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">
                            <i class="fas fa-home"></i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="datakaryawan.php" class="nav-link">
                            <i class="fas fa-users"></i>
                            <span>Data Karyawan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="datauser.php" class="nav-link">
                            <i class="fas fa-user-cog"></i>
                            <span>Data User</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="datajabatan.php" class="nav-link">
                            <i class="fas fa-briefcase"></i>
                            <span>Data Jabatan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="data_absen.php" class="nav-link">
                            <i class="fas fa-calendar-check"></i>
                            <span>Data Absen</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="data_keterangan.php" class="nav-link">
                            <i class="fas fa-clipboard-list"></i>
                            <span>Data Keterangan</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-footer">
                    <a href="logout.php" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </nav>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="main-content">
            <!-- TOP HEADER -->
            <header class="top-header">
                <div class="header-left">
                    <button class="sidebar-toggle" id="sidebarToggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="page-title">Dashboard Admin</h1>
                </div>
                <div class="header-right">
                    <div class="user-info">
                        <div class="user-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="user-details">
                            <span class="user-name"><?php echo htmlspecialchars($username); ?></span>
                            <span class="user-role">Administrator</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- DASHBOARD CONTENT -->
            <div class="dashboard-content">
                <!-- Welcome Section -->
                <div class="welcome-section">
                    <div class="welcome-card">
                        <div class="welcome-content">
                            <div class="welcome-text">
                                <h2>Selamat Datang di WinniCode</h2>
                                <p>Sistem Absensi Garuda Teknologi - Kelola data karyawan dengan mudah dan efisien</p>
                                <div class="welcome-stats">
                                    <div class="stat-item">
                                        <i class="fas fa-users"></i>
                                        <div class="stat-details">
                                            <span class="stat-number">150+</span>
                                            <span class="stat-label">Karyawan</span>
                                        </div>
                                    </div>
                                    <div class="stat-item">
                                        <i class="fas fa-calendar-check"></i>
                                        <div class="stat-details">
                                            <span class="stat-number">7</span>
                                            <span class="stat-label">Jumlah Divisi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="welcome-illustration">
                                <div class="illustration-bg">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions (Moved above Stats Cards) -->
                <div class="quick-actions mb-4">
                    <h3 class="section-title">Quick Access</h3>
                    <div class="action-grid">
                        <a href="datakaryawan.php" class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="action-content">
                                <h4>Data Karyawan</h4>
                                <p>Manajemen data dan profil karyawan</p>
                            </div>
                        </a>
                        <a href="data_absen.php" class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <div class="action-content">
                                <h4>Data Absensi</h4>
                                <p>Monitor data absensi karyawan</p>
                            </div>
                        </a>
                        <a href="datajabatan.php" class="action-card">
                            <div class="action-icon">
                                <i class="fas fa-cog"></i>
                            </div>
                            <div class="action-content">
                                <h4>Data Jabatan</h4>
                                <p>Struktur jabatan karyawan</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-card">
                            <div class="stat-icon" style="color:#667eea;">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">
                                    <?php $q = mysqli_query($koneksi,"SELECT COUNT(*) AS total FROM tb_karyawan"); $d=mysqli_fetch_assoc($q); echo $d['total']; ?>
                                </div>
                                <div class="stat-label">Total Karyawan</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-card">
                            <div class="stat-icon" style="color:#46c97f;">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">
                                    <?php
                                    $today = date('Y-m-d');
                                    $q = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_absen WHERE DATE(waktu) = '$today'");
                                    $d = mysqli_fetch_assoc($q);
                                    echo $d['total'];
                                    ?>
                                </div>
                                <div class="stat-label">Absen Hari Ini</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-card">
                            <div class="stat-icon" style="color:#f093fb;">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">
                                    <?php
                                    $today = date('Y-m-d');
                                    $q = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tb_keterangan WHERE DATE(waktu) = '$today'");
                                    $d = mysqli_fetch_assoc($q);
                                    echo $d['total'];
                                    ?>
                                </div>
                                <div class="stat-label">Izin/Sakit Hari Ini</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-3">
                        <div class="stat-card">
                            <div class="stat-icon" style="color:#ff7979;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="stat-content">
                                <div class="stat-number">
                                    <?php
                                    $today = date('Y-m-d');
                                    $q = mysqli_query($koneksi, 
                                        "SELECT COUNT(*) AS total FROM tb_absen 
                                         WHERE 
                                             DATE(waktu) = '$today'
                                             AND (
                                                 TIME(waktu) > '10:00:00'
                                                 AND TIME(waktu) <= '16:00:00'
                                             )
                                        ");
                                    $d = mysqli_fetch_assoc($q);
                                    echo $d['total'];
                                    ?>
                                </div>
                                <div class="stat-label">Terlambat Hari Ini</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Chart and Activity Section -->
                <div class="row">
                    <div class="col-lg-7 mb-4">
                        <div class="card shadow border-0 p-4 h-100">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="card-title"><i class="fas fa-chart-pie mr-2"></i>Statistik Absensi Hari Ini (<?php echo date('l, d-m-Y'); ?>)</h3>
                            </div>
                            <canvas id="absensiChart" height="250"></canvas>
                        </div>
                    </div>
                    
                    <div class="col-lg-5 mb-4">
                        <div class="card shadow border-0 p-4 h-100">
                            <?php
                            $hari_indonesia = array(
                                'Sunday' => 'Minggu',
                                'Monday' => 'Senin',
                                'Tuesday' => 'Selasa',
                                'Wednesday' => 'Rabu',
                                'Thursday' => 'Kamis',
                                'Friday' => 'Jumat',
                                'Saturday' => 'Sabtu'
                            );
                            $hari_ini = date('l');
                            $hari_indonesia_ini = $hari_indonesia[$hari_ini];
                            ?>

                            <div class="card-title">
                                <i class="fas fa-bolt mr-2"></i>
                                Aktivitas absen hari ini (<?php echo $hari_indonesia_ini; ?>)
                            </div>
                            <ul class="activity-list mt-3">
                                <?php
                                $today = date('Y-m-d');
                                $records_per_page = 5;
                                
                                $result = mysqli_query($koneksi, 
                                    "SELECT nama, waktu 
                                    FROM tb_absen 
                                    WHERE DATE(waktu) = '$today'
                                    ORDER BY waktu DESC 
                                    LIMIT $records_per_page");
                                
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $jam_absen = strtotime(date("H:i", strtotime($row['waktu'])));
                                    $status = "";
                                    $badge_class = "";
                                    
                                    $awal = strtotime("08:00");
                                    $terlambat = strtotime("10:00");
                                    $akhir = strtotime("16:00");
                                    $malam = strtotime("19:59");
                                    
                                    if ($jam_absen >= $awal && $jam_absen <= $terlambat) {
                                        $status = "Tepat Waktu";
                                        $badge_class = "badge-success";
                                    } elseif ($jam_absen > $terlambat && $jam_absen <= $akhir) {
                                        $status = "Terlambat";
                                        $badge_class = "badge-warning";
                                    } else {
                                        $status = "Diluar Jam Kerja";
                                        $badge_class = "badge-danger";
                                    }
                                    
                                    echo '<li class="activity-item d-flex justify-content-between align-items-center">';
                                    echo '<span><i class="fas fa-user-circle mr-2"></i>'.$row['nama'].'</span>';
                                    echo '<div>';
                                    echo '<span class="activity-time mr-2">'.date('H:i', strtotime($row['waktu'])).'</span>';
                                    echo '<span class="badge '.$badge_class.'">'.$status.'</span>';
                                    echo '</div>';
                                    echo '</li>';
                                }
                                
                                if (mysqli_num_rows($result) === 0) {
                                    echo '<li class="text-muted">Tidak ada aktivitas absen hari ini</li>';
                                }
                                ?>
                            </ul>
                            <div class="text-center mt-2">
                                <a href="data_absen.php" class="btn btn-sm btn-primary">Lihat Semua</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- FOOTER -->
            <footer class="dashboard-footer">
                <div class="footer-content">
                    <p>&copy; 2025 WinniCode - Garuda Teknologi</p>
                </div>
            </footer>
        </main>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        <?php
        $today = date('Y-m-d');
        
        // Query untuk menghitung statistik absen hari ini dengan logika yang sama
        $q = mysqli_query($koneksi, "
            SELECT
                SUM(IF(
                    TIME(waktu) BETWEEN '08:00:00' AND '10:00:00', 
                    1, 0
                )) AS tepat,
                SUM(IF(
                    TIME(waktu) BETWEEN '10:01:00' AND '16:00:00', 
                    1, 0
                )) AS telat,
                SUM(IF(
                    TIME(waktu) NOT BETWEEN '08:00:00' AND '16:00:00', 
                    1, 0
                )) AS luarjam
            FROM tb_absen
            WHERE DATE(waktu) = '$today'
        ");
        
        $data = mysqli_fetch_assoc($q);
        $tepat = $data['tepat'] ?? 0;
        $telat = $data['telat'] ?? 0;
        $luarjam = $data['luarjam'] ?? 0;
        ?>
        
        const ctx = document.getElementById('absensiChart');
        if (ctx) {
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: [
                        'Tepat Waktu (08:00-10:00)', 
                        'Terlambat (10:01-16:00)', 
                        'Diluar Jam Kerja'
                    ],
                    datasets: [{
                        data: [<?php echo $tepat; ?>, <?php echo $telat; ?>, <?php echo $luarjam; ?>],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(255, 99, 132, 0.8)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1,
                        hoverOffset: 15
                    }]
                },
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    cutout: '65%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                font: {
                                    size: 12,
                                    family: "'Inter', sans-serif"
                                },
                                padding: 20,
                                usePointStyle: true
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.raw;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = Math.round((value / total) * 100);
                                    return `${label}: ${value} orang (${percentage}%)`;
                                }
                            }
                        }
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });
        }
        
        // Sidebar toggle functionality
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const sidebar = document.querySelector('.sidebar');
        
        if (sidebarToggle && sidebarOverlay && sidebar) {
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
                sidebarOverlay.classList.toggle('active');
            });
            
            sidebarOverlay.addEventListener('click', function() {
                sidebar.classList.remove('collapsed');
                sidebarOverlay.classList.remove('active');
            });
        }
    });
    </script>
</body>
</html>