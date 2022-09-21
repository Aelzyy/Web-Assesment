<?php
include 'koneksi.php';

$nisn = $_GET['nisn'];
$sql = " SELECT * FROM perpustakaan WHERE nisn='$nisn'";
$query = mysqli_query($connect, $sql);
$pel = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="editsiswa.php" method="post">
        <h3> Edit Data Siswa</h3>
        <p><label>nama siswa: <input value="<?php echo $pel ['nama_siswa']?>" required="required" type="text" name="nama_siswa"></label></p>
        <p><label>nisn : <input value="<?php echo $pel ['nisn']?>"required="required" type="number" name="nisn"></label></p>
        <p><label>kelas: <input value="<?php echo $pel ['kelas']?>" required="required" type="text" name="kelas"></label></p>
        <p><label>alamat: <textarea required="required" name="alamat" id="" cols="30" rows="5"><?php echo $pel ['alamat']?></textarea></label></p>
        <input type="submit" name="simpan" value="simpan">
    </form>
</body>
</html>