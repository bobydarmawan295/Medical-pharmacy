<?php 
  require_once '../partials/header.php';
  require_once 'functions.php';
  if(isset($_SESSION["level"]) == "user" && $_SESSION["level"] != "admin"){
    echo "anda tidak berhak akses halaman ini";
    exit;
  }

  $id = $_GET['kode_puskesmas'];
 
  $request= query("SELECT * FROM request
                INNER JOIN obat ON request.kode_obat = obat.kode_obat
                -- INNER JOIN stok ON request.id_stok = stok.id
                WHERE puskesmas_id = '$id'
                ");

// $stok = query("SELECT * FROM stok INNER JOIN obat ON stok.kode_obat = obat.kode_obat WHERE id= '$id'")[0];

  
?>

        <div id="layoutSidenav_content">
                <main>
                <button type="button" class="btn btn-info text-center ml-4" ><i class='bx-fw bx bx-arrow-back' ></i><a href="request.php">&nbsp;Kembali</a></button>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Detail Request Obat
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama obat</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama obat</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i = 1; ?>
                                        <?php foreach( $request as $row ) : ?>
                                                <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row["nama_obat"] ?></td>
                                                <td><?= $row["jumlah_request"] ?></td>
                                                <td><?= $row["satuan_obat"] ?></td>
                                                <td>
                                                <button type="button" class="btn btn-success"><a href="./kirimObat.php?kode_obat=<?= $row["kode_obat"]; ?>&kode_puskesmas=<?= $id; ?>&id=<?= $row["id_request"]; ?>"><i class='bx-fw bx bx-navigation'></i></a></button>&nbsp;
                                                <button type="button" class="btn btn-danger"><a href="reject.php?id=<?= $row["id_request"]; ?>&kode_obat=<?= $row["kode_obat"]; ?>"><i class='bx-fw bx bx-message-x'></i></a></button>
                                                </td>
                                                </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
        </div>

<?php require_once '../partials/footer.php' ?>