<?php
require_once '../partials/header.php';
    // require_once 'functionsPuskesmas.php';

    $id = $_GET['id'];

    if( hapusStokPuskesmas($id) > 0 ){
        $_SESSION['eksekusi'] = "hapus";
        echo "
           <script>
           alert('data berhasil dihapus');
           document.location.href = 'stokPuskesmas.php';
           </script>
        ";
       
    }else{
       echo "
           <script>
           alert('gagal dihapus');
           document.location.href = 'stokPuskesmas.php';
           </script>
        ";
    }


?>