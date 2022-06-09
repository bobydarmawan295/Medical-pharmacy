<?php 
require_once 'functions.php';

$kode_obat = $_GET['kode_obat'];

$obat = query("SELECT * FROM obat WHERE kode_obat = '$kode_obat'")[0];

    if( isset($_POST['submit']) ){
        // ambil data form

        if( ubah($_POST) > 0 ){
            echo '
            <script>
            alert("Berhasil!");
            document.location.href = "obat.php";
            </script>
            ';
        
        }else{
        echo '
            <script type="text/javascript">
            swal("Gagal", "Data gagal diubah!", "failed");
            document.location.href = "obat.php";
            </script>
            ';
        } 
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Ubah Obat</title>
</head>
<body>
    <div class="card col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4 mt-5">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <h2>Form ubah Obat</h2>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan kode obat" name="kode_obat" value="<?= $obat['kode_obat'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama obat" name="nama_obat" value="<?= $obat['nama_obat'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Satuan : </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan satuan" name="satuan" value="<?= $obat['satuan'] ?>">
                </div>
            
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Data sudah benar</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="button" class="btn btn-secondary"><a href="obat.php">Kembali</a></button>
            </form>
        </div>
    </div>
    
</body>
</html>