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
    <title>Dashboard</title>

       
  


    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/dashboard_karyawan.css" rel="stylesheet" media="all">

</head>
<?php date_default_timezone_set('Asia/Jakarta'); ?>
<body class="animsition" >
    <div class="page-wrapper">
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
                            <a href="http://localhost/AbsenSIKaryawan-AbsenSIKaryawan/karyawan/index.php?m=awal" class="nav-link">
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
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap kotak">
                                    <h2 class="title-1" style="text-align: center;">Silahkan masukkan keterangan anda, <?php echo $_SESSION['namasi']; ?></h2>
                                        
                                </div>
                            </div>
                        </div>


                        <!-- FORM -->
                        <div class="row">
                           <div class="table-responsive table--no-card m-b-30">
                            <form action="modul/karyawan/keterangan_sv.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                <table class="table table-borderless table-striped table-earning" >
                                        
                                        <tbody>
                                              
                                            <tr>
                                                <td>NIP</td>
                                                <td>
                                                
                                                <input type="text" readonly="" class="form-control" name="id_karyawan" autocomplete="off" size="25px" maxlength="25px" value="<?php echo $_SESSION
                                                ['idsi'];?>">    
                                                
                                            </td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Nama</td>
                                                <td><input type="text" class="form-control" name="nama" autocomplete="off" readonly="" value="<?php echo $_SESSION['namasi']; ?>"></td>
                                            </tr>

                                            <tr>
                                            	<td>Keterangan</td>
                                            	<td><select name="keterangan" required="">
                                            		<option></option>
                                            		<option>Sakit</option>
                                            		<option>Izin</option>
                                            	</select></td>
                                            </tr>

                                            <TR>
                                            	<td>Alasan</td>
                                            	<td><textarea name="alasan" class="form-control" required=""></textarea></td>
                                            </TR>

                                             <tr>
                                                <td>Waktu</td>
                                                <td><input readonly="" type="text" class="form-control" value="<?php echo date('l, d-m-Y h:i:s a' ); ?>" name="waktu"></td>
                                            </tr>

                                           <tr>
                                              <td>Foto surat keterangan sakit / izin</td>
                                              <td><input type="file" required="" name="bukti"></td>
                                           </tr>

                                            <tr>
                                                <td><button type="submit" name="simpan" class="btn btn-primary">Beri Keterangan</button></td>
                                                <td><a href="http://localhost/AbsenSIKaryawan-AbsenSIKaryawan/karyawan/index.php?m=awal" class="btn btn-danger">Batal</a></td>
                                            </tr>
                                            
                                      </tbody>
                                    </table>
                                        </div>
                            </form>
                                    
                                </div>    
                        </div>
                     <div class="row">
                           <div class="table-responsive table--no-card m-b-30">

                                
                                <table class="table table-borderless table-striped table-earning" >
                                        
                                       
                                    </table>
                                       
                            
                                    
                                </div>    
                        </div>

                        <!-- END FORM -->
                        
                        <div class="header-desktop">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
