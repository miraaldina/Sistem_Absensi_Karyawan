<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
    $id_karyawan = $_POST['id_karyawan'];
    $nama = $_POST['nama'];
    mysqli_query($koneksi, "INSERT INTO tb_absen (id_karyawan, nama, waktu, status, latitude, longitude) VALUES ('$id_karyawan', '$nama', '$waktu', '$status', '$latitude', '$longitude')");

    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $save = "INSERT INTO tb_absen SET 
        id_karyawan='$id_karyawan', 
        nama='$nama', 
        waktu='$waktu',
        latitude='$latitude',
        longitude='$longitude'";

    $query = mysqli_query($koneksi, $save);

    if ($query) {
        echo "<script>alert('Anda sudah absen untuk hari ini') </script>";
        echo "<script>window.location.href = \"index.php?m=awal\" </script>";    
    } else {
        echo "Gagal menyimpan absen";
    }
}
?>
