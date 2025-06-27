<?php 
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Beranda Karyawan</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="../css/dashboard_karyawan.css" rel="stylesheet" media="all">
</head>

<?php date_default_timezone_set('Asia/Jakarta'); ?>

<body class="animsition">
    <div class="page-wrapper">
        <div class="dashboard-wrapper">
            <!-- SIDEBAR -->
            <aside class="sidebar" id="sidebar">
                <div class="sidebar-header">
                    <div class="logo">
                        <div class="logo-icon"></div>
                        <div class="logo-text">Karyawan</div>
                    </div>
                    <div class="sidebar-subtitle">Employee Dashboard</div>
                </div>

                <nav class="sidebar-nav">
                    <ul class="nav-list">
                        <li class="nav-item active">
                            <a href="#" class="nav-link">
                                <i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>

                    <div class="sidebar-footer">
                        <a href="../index.php" class="logout-btn">
                            <i class="fas fa-sign-out-alt"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </nav>
            </aside>

            <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" value="Absen Karyawan" readonly="" />
                                
                            </form>
                            <div class="header-button">
                               
                                 <?php
                                    $id = $_SESSION['idsi'];
                                    include '../koneksi.php';
                                    $sql = "SELECT * FROM tb_karyawan WHERE id_karyawan = '$id'";
                                    $query = mysqli_query($koneksi, $sql);
                                    $r = mysqli_fetch_array($query);

                                     ?>

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/<?php echo $r['foto'];?>" class="img-circle" alt="<?php echo $r['nama'];?>" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $r['nama']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                         <img src="../images/<?php echo $r['foto'];?>" class="img-circle" \ />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $r['nama']; ?></a>
                                                    </h5>
                                                    
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="?m=karyawan&s=profil">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <!--<div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>-->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

                <!-- MAIN CONTENT-->
                <div class="main-content ">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="overview-wrap kotak">
                                        <h2 class="title-1" style="text-align: center;">Selamat Datang, <?php echo $_SESSION['namasi']; ?></h2>
                                        <h4>Silahkan lakukan absensi kehadiran anda</h4>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- FORM -->
                            <div class="row">
                                <div class="table-responsive table--no-card m-b-30">
                                    <form action="dt_absen_sv.php" method="post">
                                        <div class="form-group">
                                            <table class="table table-borderless table-striped table-earning">
                                                <tbody>
                                                    <tr>
                                                        <td>NIP</td>
                                                        <td>
                                                            <input type="text" readonly="" class="form-control" name="id_karyawan" autocomplete="off" size="25px" maxlength="25px" value="<?php echo $_SESSION['idsi'];?>">    
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td><input type="text" class="form-control" name="nama" autocomplete="off" readonly="" value="<?php echo $_SESSION['namasi']; ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Waktu</td>
                                                        <td><input type="text" class="form-control" value="<?php echo date('Y-m-d H:i:s'); ?>" name="waktu" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <input type="hidden" name="latitude" id="latitude">
                                                        <input type="hidden" name="longitude" id="longitude">
                                                    </tr>
                                                    <tr>
                                                        <td><button type="submit" name="simpan" class="btn btn-primary">Absen</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>    
                            </div>

                            <div class="row">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="?m=karyawan&s=title"><button class="btn btn-warning">Klik Tombol ini jika tidak hadir / absen</button></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>    
                            </div>
                            <!-- END FORM -->
                            
                            <div class="header-desktop">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>2025 WinniCode - Garuda Teknologi <a href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MAIN CONTENT-->
            </div>
            <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <script>
        navigator.geolocation.getCurrentPosition(function(position) {
            document.getElementById("latitude").value = position.coords.latitude;
            document.getElementById("longitude").value = position.coords.longitude;
        });
    </script>
</body>

</html>
<!-- end document-->