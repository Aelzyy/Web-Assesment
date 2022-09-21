<?php
include 'koneksi.php';

if (isset($_POST ['simpan'])){
    $nama_siswa = $_POST['nama_siswa'];
    $nisn = $_POST['nisn'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    

    $sql = "UPDATE perpustakaan SET nama_siswa='$nama_siswa', kelas='$kelas', alamat='$alamat' WHERE  nisn ='$nisn'";

    $query = mysqli_query ($connect, $sql);
    if ($query){
        header('Location: tampilansiswa.php');
    }else{
        header('Location: editsiswa.php?status=gagal');
    }

}
?>