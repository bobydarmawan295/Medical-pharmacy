<?php
    require_once 'functions.php';

    $id = $_GET['id'];

    if( hapusRiwayat($id) > 0 ){
        echo "
           <script>
           alert('data berhasil dihapus');
           document.location.href = 'riwayatDistribusi.php';
           </script>
        ";
       
    }else{
       echo "
           <script>
           alert('gagal dihapus');
           document.location.href = 'riwayatDitribusi.php';
           </script>
        ";
    }


?>