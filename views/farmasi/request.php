<?php 

  require_once '../partials/header.php';
  require_once 'functions.php';
  if(isset($_SESSION["level"]) == "user" && $_SESSION["level"] != "admin"){
    echo "anda tidak berhak akses halaman ini";
    exit;
  }

  $request= query("SELECT puskesmas_id, puskesmas.nama_puskesmas as nama, puskesmas.alamat as alamat,
  puskesmas.no_telpon as no_telpon, tanggal FROM request
                INNER JOIN puskesmas ON request.puskesmas_id = puskesmas.kode_puskesmas GROUP BY puskesmas_id,nama, alamat,no_telpon, tanggal ORDER BY tanggal DESC  
                ");

?>

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Daftar Request obat
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Puskesmas</th>
                                            <th>Alamat</th>
                                            <th>No Telpon</th>
                                            <th>Tanggal Request</th>
                                            <th>Details</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Puskesmas</th>
                                            <th>Alamat</th>
                                            <th>No Telpon</th>
                                            <th>Tanggal Request</th>
                                            <th>Details</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i = 1; ?>
                                        <?php foreach( $request as $row ) : ?>
                                                <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row["nama"] ?></td>
                                                <td><?= $row["alamat"] ?></td>
                                                <td><?= $row["no_telpon"] ?></td>
                                                <td><?= $row["tanggal"] ?></td>
                                                <td>

                                                <button type="button" class="btn btn-info"><a href="detailRequest.php?kode_puskesmas=<?= $row["puskesmas_id"]; ?>"><i class='bx bx-detail'></i></a></button>&nbsp;

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