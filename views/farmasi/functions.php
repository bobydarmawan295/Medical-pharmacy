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

        $insert = pg_query($conn, $query);
    
         return pg_affected_rows($insert);
    }

    function hapus($kode_obat){
        global $conn;

        $delete = pg_query($conn, "DELETE FROM obat WHERE kode_obat = '$kode_obat'");

        return pg_affected_rows($delete);

    }

    function ubah($data){

        global $conn;

        $kode_obat = $data['kode_obat'];
        $nama_obat = htmlspecialchars($data['nama_obat']);
        $satuan = htmlspecialchars($data['satuan']);

        $query = "UPDATE obat SET
                  nama_obat = '$nama_obat',
                  satuan = '$satuan'
                  WHERE kode_obat = '$kode_obat'";

        $ubah = pg_query($conn, $query);
    
         return pg_affected_rows($ubah);
    }

    function register($data){
        global $conn;

        $username =  strtolower(stripslashes($data["username"]));
        $password =  pg_escape_string($conn, $data["password"]);
        $password2 =  pg_escape_string($conn, $data["password2"]);

        if($password !== $password2){
            echo "<script type='text/javascript'>
            alert('gagal'); 
            </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);


        $insert = pg_query($conn, "INSERT INTO users(username, password) VALUES('$username','$password')");
        

        return pg_affected_rows($insert);

    }

?>