<?php 
    require_once '../config/conn.php';

    function query($query){
        global $conn;
        $result = pg_query($conn, $query);
        $rows = [];
        while( $row = pg_fetch_assoc($result) ){
            $rows[] = $row;
        }

        return $rows;
    }

?>