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
        // $kode_obat = htmlspecialchars($data['kode_obat']);
        $nama_obat = htmlspecialchars($data['nama_obat']);
        $satuan= htmlspecialchars($data['satuan']);
        $jumlah= htmlspecialchars($data['jumlah']);
        $date= date('Y-m-d');

        $query = "INSERT INTO stok(kode_obat, jumlah,updated_at,satuan) VALUES('$nama_obat','$jumlah','$date','$satuan')";

        $insert = pg_query($conn, $query);
    
        return pg_affected_rows($insert);
    }

    function hapus($id){
        global $conn;

        $delete = pg_query($conn, "DELETE FROM stok WHERE id = '$id'");

        return pg_affected_rows($delete);

    }

    function hapusNotif($id){
        global $conn;

        $delete = pg_query($conn, "DELETE FROM terimaobat WHERE id = '$id'");

        return pg_affected_rows($delete);

    }

    function hapusStokPuskesmas($id){
        global $conn;

        $delete = pg_query($conn, "DELETE FROM stokpuskesmas WHERE id = '$id'");

        return pg_affected_rows($delete);

    }

    function hapusRiwayat($id){
        global $conn;

        $delete = pg_query($conn, "DELETE FROM riwayat WHERE kode_distribusi = '$id'");

        return pg_affected_rows($delete);

    }


    function kirim($data){
        global $conn;
        // $kode_obat = htmlspecialchars($data['kode_obat']);
        $nama_obat = htmlspecialchars($data['nama_obat']);
        $satuan= htmlspecialchars($data['satuan']);
        $jumlah= htmlspecialchars($data['jumlah']);
        $date= date('Y-m-d');

        $query = "INSERT INTO stokPuskesmas(obat_id, jumlah_stok,obat_satuan,tanggal_update) VALUES('$nama_obat','$jumlah','$satuan','$date')";

        $insert = pg_query($conn, $query);
    
        return pg_affected_rows($insert);
    }

    function notifPuskesmas($data){
        global $conn;
        // $kode_obat = htmlspecialchars($data['kode_obat']);
        $nama_obat = htmlspecialchars($data['nama_obat']);
        $satuan= htmlspecialchars($data['satuan']);
        $jumlah= htmlspecialchars($data['jumlah']);
        $date= date('Y-m-d');

        $query = "INSERT INTO terimaobat(kode_obat, jumlah_stok,satuan,tanggal_update,status,keterangan) VALUES('$nama_obat','$jumlah','$satuan','$date',true,'-')";

        $insert = pg_query($conn, $query);
    
        return pg_affected_rows($insert);
    }

    function reject($data){
        global $conn;
        // $kode_obat = htmlspecialchars($data['kode_obat']);
        $nama_obat = htmlspecialchars($data['nama_obat']);
        $satuan= htmlspecialchars($data['satuan']);
        $keterangan= htmlspecialchars($data['keterangan']);
        // $jumlah= htmlspecialchars($data['jumlah']);
        $date= date('Y-m-d');

        $query = "INSERT INTO terimaobat(kode_obat, jumlah_stok,satuan,tanggal_update,status,keterangan) VALUES('$nama_obat',0,'$satuan','$date',null,'$keterangan')";

        $insert = pg_query($conn, $query);
    
        return pg_affected_rows($insert);
    }

    function history($data){
        global $conn;
        $kode_obat = htmlspecialchars($data['kode_obat']);
        $kode_puskesmas = htmlspecialchars($data['kode_puskesmas']);
        $date= date('Y-m-d');
        $nama_obat = htmlspecialchars($data['nama_obat']);
        $satuan= htmlspecialchars($data['satuan']);
        $jumlah= htmlspecialchars($data['jumlah']);

        $query = "INSERT INTO riwayat(puskesmas_code, waktu_distribusi, kode_obat,jumlah_distribusi) VALUES('$kode_puskesmas','$date','$kode_obat','$jumlah')";

        $insert = pg_query($conn, $query);
    
        return pg_affected_rows($insert);
    }

    function request($data){
        global $conn;
        $nama_puskesmas = htmlspecialchars($data['nama_puskesmas']);
        $date= date('Y-m-d');
        $nama_obat = htmlspecialchars($data['nama_obat']);
        $satuan= htmlspecialchars($data['satuan']);
        $jumlah= htmlspecialchars($data['jumlah']);

        $query = "INSERT INTO request(puskesmas_id,kode_obat, jumlah_request, tanggal,satuan_obat) VALUES('$nama_puskesmas','$nama_obat','$jumlah','$date','$satuan')";

        $insert = pg_query($conn, $query);
    
        return pg_affected_rows($insert);
    }

    function ubah($data){

        global $conn;
        $id = htmlspecialchars($data['id']);
        $satuan= htmlspecialchars($data['satuan']);
        $jumlah= htmlspecialchars($data['jumlah']);
        $date= date('y-m-d');

        $query = "UPDATE stok SET
                  satuan = '$satuan',
                  jumlah = '$jumlah',
                  updated_at = '$date'
                  WHERE id = '$id'";

        $ubah = pg_query($conn, $query);
    
         return pg_affected_rows($ubah);
    }

    function ubahStokPuskesmas($data){

        global $conn;
        $id = htmlspecialchars($data['id']);
        // $nama_obat = htmlspecialchars($data['nama_obat']);
        // $satuan= htmlspecialchars($data['satuan']);
        $jumlah= htmlspecialchars($data['jumlah']);
        $date= date('y-m-d');

        $query = "UPDATE stokpuskesmas SET
                  jumlah_stok = '$jumlah',
                  tanggal_update = '$date'
                  WHERE id = '$id'";

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