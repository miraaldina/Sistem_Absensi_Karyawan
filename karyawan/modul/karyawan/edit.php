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
    <title>Ubah Data</title>

       
  


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
                                    <h2 class="title-1" style="text-align: center;">Profil anda <?php echo $_SESSION['namasi']; ?></h2>
                                        
                                </div>
                            </div>
                        </div>

                        
                        <!-- FORM -->
                        <div class="row">
                           <div class="table-responsive table--no-card m-b-30">
                            <?php
                            $tempat_lahir = '';
                            $tanggal_lahir = '';

                            if (!empty($r['tmp_tgl_lahir']) && strpos($r['tmp_tgl_lahir'], ' / ') !== false) {
                                list($tempat_lahir, $tanggal_lahir) = explode(' / ', $r['tmp_tgl_lahir']);
                                $tanggal_lahir = date('Y-m-d', strtotime($tanggal_lahir)); // format ke YYYY-MM-DD untuk input type=date
                            }
                            ?>
                            <form action="?m=karyawan&s=update" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                	
                                	<?php
                                	$id = $_SESSION['idsi'];
                                	include 'koneksi.php';
                                	$sql = "SELECT * FROM tb_karyawan WHERE id_karyawan = '$id'";
                                	$query = mysqli_query($koneksi, $sql);
                                	$r = mysqli_fetch_array($query);

                                	 ?>

                                <table class="table table-borderless table-striped table-earning" >
                                        
                                        <tbody>
                                              
                                            <tr>
                                            <td>NIP</td>
                                            <td>
                                                <input type="text" value="<?php echo $r['id_karyawan'];?>" name="id_karyawan" readonly style="background-color: #e9ecef;">
                                            </td>
                                        </tr>
                                           
                                            <tr>
                                                <td>Nama</td>
                                                <td>
                                                	<input type="text" name="nama" value="<?php echo $r['nama'];?>">
                                                	</td>
                                            </tr>
                                         
                                            <tr>
                                                <td>Username</td>
                                                <td>
                                                	<input type="text" name="username" value="<?php echo $r['username'];?>">
                                                	</td>
                                            </tr>

                                            <tr>
                                                <td>Password</td>
                                                <td>
                                                	<input type="text" name="password">
                                                	</td>
                                            </tr>

                                             
                                            

                                            <tr>
                                                <td>Tempat dan Tanggal Lahir</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required value="<?php echo $tempat_lahir; ?>">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="date" class="form-control" name="tanggal_lahir" required value="<?php echo $tanggal_lahir; ?>">
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <TR>
                                            	<td>Jenis Kelamin</td>
                                            	<td>
                                            		 <select name="jenkel">
                                                    <option value="<?php echo $r['jenkel']; ?>"><?php echo $r['jenkel']; ?></option>
                                                    <option>Laki-laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            		</td>
                                            </TR>

                                             <tr>
                                                <td>Agama</td>
                                                <td>
                                                	  <select  name="agama">
    											<option value="<?php echo $r['agama']; ?>"><?php echo $r['agama']; ?></option>
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Katholik</option>
                                                        <option>Hindu</option>
                                                        <option>Buddha</option>
                                                        <option>KongHuCu</option>
                                                    </select>
                                                	</td>
                                            </tr>

                                           <tr>
                                              <td>Alamat</td>
                                              <td><input type="text" name="alamat" value="<?php echo $r['alamat'];?>"></td>
                                           </tr>

                                           <tr>
                                           	<td>Nomor telepon</td>
                                           	<td>
                                           		<input type="text" name="no_tel" value="<?php echo $r['no_tel'];?>">
                                           		</td>
                                           </tr>

                                           <tr>
                                           	<td>Jabatan</td>
                                           	<td>
                                           		<select class="form-control" name="jabatan">
                                                <?php 

                                                include 'koneksi.php';

                                                $sql = "SELECT * FROM tb_jabatan";

                                                $hasil = mysqli_query($koneksi, $sql);

                                               

                                                while ($data = mysqli_fetch_array($hasil)) {
                                                    
                                               
                                                

                                                 ?>
                                                <option value="<?php echo $data['jabatan'];?>"><?php echo $data['jabatan']; ?></option>
                                                <?php } ?>
                                                   
                                                </select>
                                           		 </td>
                                           </tr>

                                           <tr>
                                           	<td>Foto</td>
                                           	<td><img src="../images/<?php echo $r['foto'];?>" style="width: autopx;height: 100px;"></td>
                                           </tr>

                                           <tr>
                                           	<td> <label></label></td>
                                           	<td> <input type="checkbox" name="ubahfoto" value="true"> Ceklis jika ingin mengubah foto !
                    <br>
                    <input type="file" name="inpfoto"></td>
                                           </tr>
                                          
                   

                                            <tr>
                                                <td><input type="submit" name="simpan" class="btn btn-success" value="Proses"></td>
                                               
                                            </tr>
                                            
                                      </tbody>
                                    </table>
                                        </div>
                            </form>
                                    
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
