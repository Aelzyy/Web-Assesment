<?php
include 'koneksi.php';

if (isset($_POST['simpan'])){
    $nama_siswa= $_POST['nama_siswa']; 
    $nisn= $_POST['nisn']; 
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat']; 
   

    $sql = "INSERT INTO perpustakaan(nama_siswa, nisn, kelas, alamat) VALUES('$nama_siswa', '$nisn', '$kelas', '$alamat')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: tampilansiswa.php');
    }else {
        header('Location: simpansiswa.php?status=gagal'); 
    }
}
?>