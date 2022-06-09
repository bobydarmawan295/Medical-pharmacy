<?php
    require_once 'functions.php';

    $kode_obat = $_GET['kode_obat'];

    if( hapus($kode_obat) > 0 ){
        echo "
           <script>
           alert('data berhasil dihapus');
           document.location.href = 'obat.php';
           </script>
        ";
       
    }else{
       echo "
           <script>
           alert('gagal dihapus');
           document.location.href = 'obat.php';
           </script>
        ";
    }


?>