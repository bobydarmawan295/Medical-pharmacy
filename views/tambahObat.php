<?php 

require_once "../database/config.php";
require_once "../routes/obat.php";


if( isset($_POST['submit']) ){
    // ambil data form
    global $conn;
    $kode_obat = $_POST['kode_obat'];
    $nama_obat = $_POST['nama_obat'];
    $satuan = $_POST['satuan'];

    $query = "INSERT INTO obat(kode_obat, nama_obat, satuan) VALUES('$kode_obat','$nama_obat','$satuan')";

    $insert = pg_query($conn, $query);

     pg_affected_rows($insert);

     header("Location: home.php");
    
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah obat</title>
</head>
<body>

   <h2>tambah Obat</h2>
    <form action="tambahObat.php" method="post">
        <ul>
            <li>
                <label for="kode_obat">Kode Obat :</label>
                <input type="text" name="kode_obat">
            </li>
            <li>
                <label for="nama_obat">Nama_obat :</label>
                <input type="text" name="nama_obat">
            </li>
            <li>
                <label for="satuan">Satuan :</label>
                <input type="text" name="satuan">
            </li>
            <li>
            
            <button type="submit" name="submit">Tambah obat</button>
            </li>
            <a href="home.php">Kembali</a>
                
         
        </ul>
    </form>

</body>
</html>