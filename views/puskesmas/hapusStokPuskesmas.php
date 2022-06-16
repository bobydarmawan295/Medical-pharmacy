<?php
    require_once 'functionsPuskesmas.php';

    $id = $_GET['id'];

    if( hapus($id) > 0 ){
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