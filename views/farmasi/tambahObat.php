<?php 
require_once 'functions.php';
require_once '../partials/header.php';

if( isset($_POST['submit']) ){
    // ambil data form

     if( tambah($_POST) > 0 ){
        echo "<script type='text/javascript'>
        setTimeout(function () { 
            swal({
                title: 'Good job!',
                text: 'You clicked the button!',
                icon: 'success',
              });   
        },10);  
        window.setTimeout(function(){ 
          window.location.replace('obat.php');
        } ,3000); 
        </script>";
        
     }else{
        echo "
            <script>
            alert('gagal');
            document.location.href = 'obat.php';
            </script>
         ";
     }
    
}

?>

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


 <?php require_once '../partials/footer.php' ?> 