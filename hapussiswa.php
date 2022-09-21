<?php
// includde adalah untuk menyambungkan file koneksi ke database
include 'koneksi.php';
// get adalah nama url yang ada di kolom pencarian
$nisn = $_GET['nisn'];

$sql = "DELETE FROM perpustakaan WHERE nisn='$nisn'";
$query = mysqli_query ($connect, $sql);

if ($query){
    header('Location: tampilansiswa.php');
    }else{
    header('Location: hapussiswa.php?status=gagal');
    }

?>