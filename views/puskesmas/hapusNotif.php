<?php
    // require_once 'functionsPuskesmas.php';
    require_once '../partials/header.php';

    $id = $_GET['id'];

    if( hapusNotif($id) > 0 ){
        $_SESSION['eksekusi'] = "hapus";
        echo "
           <script>
           document.location.href = 'terimaobat.php';
           </script>
        ";
       
    }else{
       echo "
           <script>
           alert('gagal dihapus');
           document.location.href = 'terimaobat.php';
           </script>
        ";
    }


?>