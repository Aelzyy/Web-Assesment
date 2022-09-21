<?php
    include 'koneksi.php' // Include berfungsi untuk menambahkan baris kode pada file tertentu kedalam file yang di inginkan
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    
    <h3>Data Siswa</h3>
    <h4><a href="siswa.html">[+] Tambah Baru</a></h4>

    <table border="1">
        <tr>
            <th>Nama Siswa</th>
            <th>NISN</th>
            <th>kelas</th>
            <th>alamat</th>
            <th>Action</th>
        </tr>
        <tr>
            <?php
            
            $sql = "SELECT * FROM perpustakaan"; // Variabel $sql dibuat untuk menampung perintah sql 
            $query = mysqli_query($connect,$sql); // Variabel $query dibuat untuk menampung function yang berguna untuk menjalankan perintah atau instruksi query ke database mysql;
            while($pel = mysqli_fetch_array($query)) {
                echo"
                <tr>
                <td>$pel[nama_siswa]</td>
                <td>$pel[nisn]</td>
                <td>$pel[kelas]</td>
                <td>$pel[alamat]</td>
               
                <td>
                    <a href='formedit-siswa.php?nisn=".$pel['nisn']."'>Edit</a>
                    <a href='hapussiswa.php?nisn=".$pel['nisn']."'>Hapus</a>
                </td>
                </tr>";
            };

            ?>
            <a href=""></a>
        </tr>
    </table>

</body>
</html>