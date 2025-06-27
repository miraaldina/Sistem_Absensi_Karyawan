<?php 
require_once("koneksi.php");
error_reporting(0);
session_start();
?>

<?php 
$id = $_GET['id_karyawan'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_karyawan WHERE id_karyawan = '$id'");
while ($d = mysqli_fetch_array($data)) {

    // Parsing tempat & tanggal lahir
    $tempat_lahir = '';
    $tanggal_lahir = '';
    if (!empty($d['tmp_tgl_lahir']) && strpos($d['tmp_tgl_lahir'], ' / ') !== false) {
        list($tempat_lahir, $tgl) = explode(' / ', $d['tmp_tgl_lahir']);
        $tanggal_lahir = date('Y-m-d', strtotime($tgl));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Data Karyawan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Ubah Data Karyawan</h4>
        </div>
        <div class="card-body">
            <form action="proedit_karyawan.php" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control" readonly name="id_karyawan" value="<?php echo $d['id_karyawan']; ?>">
                </div>

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?php echo $d['username']; ?>">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?>">
                </div>

                <div class="form-group">
                    <label>Tempat dan Tanggal Lahir</label>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>">
                        </div>
                        <div class="col-md-6 mb-2">
                            <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="jenkel">
                        <option><?php echo $d['jenkel']; ?></option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Agama</label>
                    <select class="form-control" name="agama">
                        <option><?php echo $d['agama']; ?></option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katholik</option>
                        <option>Hindu</option>
                        <option>Buddha</option>
                        <option>KongHuCu</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat"><?php echo $d['alamat']; ?></textarea>
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" class="form-control" name="no_tel" value="<?php echo $d['no_tel']; ?>">
                </div>

                <div class="form-group">
                    <label>Jabatan</label>
                    <select class="form-control" name="jabatan">
                        <?php 
                        $hasil = mysqli_query($koneksi, "SELECT * FROM tb_jabatan");
                        while ($data = mysqli_fetch_array($hasil)) {
                            echo "<option value='{$data['jabatan']}'" . ($data['jabatan'] == $d['jabatan'] ? ' selected' : '') . ">{$data['jabatan']}</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Foto Saat Ini</label><br>
                    <?php 
                        if (!empty($d['foto'])) {
                            echo "<img src=\"images/{$d['foto']}\" height=\"150\" />";
                        } else {
                            echo "Tidak ada gambar";
                        }
                    ?>
                </div>

                <div class="form-group">
                    <label>Ganti Foto (opsional)</label><br>
                    <input type="checkbox" name="ubahfoto" value="true"> Ceklis jika ingin mengubah foto<br>
                    <input type="file" name="inpfoto" class="form-control-file">
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary" name="ubahdata">Ubah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

<?php } ?>
