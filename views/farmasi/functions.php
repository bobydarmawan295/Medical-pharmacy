<?php 
    require_once '../../config/conn.php';

    function query($query){
        global $conn;
        $result = pg_query($conn, $query);
        $rows = [];
        while( $row = pg_fetch_assoc($result) ){
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data){
        global $conn;

        $kode_obat = htmlspecialchars($data['kode_obat']);
        $nama_obat = htmlspecialchars($data['nama_obat']);
        $satuan = htmlspecialchars($data['satuan']);

        $query = "INSERT INTO obat(kode_obat, nama_obat, satuan) VALUES('$kode_obat','$nama_obat','$satuan')";

         pg_query($conn, $query);
    
         return pg_affected_rows($conn);
    }

?>