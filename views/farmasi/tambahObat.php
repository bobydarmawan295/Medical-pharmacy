<?php 
require_once 'functions.php';

if( isset($_POST['submit']) ){
    // ambil data form

     if( tambah($_POST) > 0 ){
         echo "
            <script>
            alert('berhasil');
            document.location.href = 'home.php';
            </script>
         ";
        
     }else{
        echo "
            <script>
            alert('berhasil');
            document.location.href = 'home.php';
            </script>
         ";
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
    <title>Tambah obat</title>
</head>
<body>
    <div class="card col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto form p-4 mt-5">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <h2>Form tambah Obat</h2>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Kode Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan kode obat" name="kode_obat" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Obat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama obat" name="nama_obat">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Satuan : </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan satuan" name="satuan">
                </div>
            
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Data sudah benar</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="button" class="btn btn-secondary"><a href="home.php">Kembali</a></button>
            </form>
        </div>
    </div>
    
</body>
</html>