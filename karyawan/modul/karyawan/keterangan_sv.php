<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $id_karyawan = $_POST['id_karyawan'];
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $alasan = $_POST['alasan'];
    $waktu = $_POST['waktu'];

    // Proses file hanya jika ada yang diunggah
    $bukti = $_FILES['bukti']['name'];
    if ($bukti != '') {
        $tmp = $_FILES['bukti']['tmp_name'];
        $buktibaru = date('dmYHis') . $bukti;
        $path = "images/" . $buktibaru;

        if (move_uploaded_file($tmp, $path)) {
            // Insert jika upload berhasil
            $query = "INSERT INTO tb_keterangan SET 
                id_karyawan='$id_karyawan', 
                nama='$nama', 
                keterangan='$keterangan', 
                alasan='$alasan', 
                waktu='$waktu', 
                bukti='$buktibaru'";
        } else {
            // Upload gagal
            echo "<script>alert('Upload bukti gagal'); window.history.back();</script>";
            exit;
        }
    } else {
        // Jika tidak ada bukti, simpan data tanpa bukti
        $query = "INSERT INTO tb_keterangan SET 
            id_karyawan='$id_karyawan', 
            nama='$nama', 
            keterangan='$keterangan', 
            alasan='$alasan', 
            waktu='$waktu', 
            bukti=''";
    }

    // Jalankan query insert
    $insert = mysqli_query($koneksi, $query);

    if ($insert) {
        echo "<script>alert('Anda sudah memberi keterangan')</script>";
        echo "<script>window.history.back()</script>";
    } else {
        echo "<script>alert('Gagal menyimpan ke database'); window.history.back();</script>";
    }
}
?>
