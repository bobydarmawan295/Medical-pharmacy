<?php
    require_once '../partials/header.php';
    require_once 'functions.php';

    $id = $_GET['id'];

    if( hapus($id) > 0 ){
        $_SESSION['eksekusi'] = "hapus";
        echo "
           <script>
           document.location.href = 'stokObat.php';
           </script>
        ";
       
    }else{
       echo "
           <script>
           alert('gagal dihapus');
           document.location.href = 'stokObat.php';
           </script>
        ";
    }


?>