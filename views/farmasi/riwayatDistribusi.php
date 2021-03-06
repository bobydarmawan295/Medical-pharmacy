<?php 

  require_once '../partials/header.php';
  require_once 'functions.php';
  if(isset($_SESSION["level"]) == "user" && $_SESSION["level"] != "admin"){
    echo "anda tidak berhak akses halaman ini";
    exit;
  }

  $request= query("SELECT  kode_puskesmas,puskesmas.nama_puskesmas,count(kode_obat) as jumlah, COUNT(riwayat.kode_distribusi),puskesmas.alamat as alamat,puskesmas.no_telpon as no_telpon FROM riwayat INNER JOIN puskesmas ON riwayat.puskesmas_code = puskesmas.kode_puskesmas GROUP BY puskesmas.nama_puskesmas,kode_puskesmas"  );
  
?>

        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Riwayat Distribusi Obat
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Puskesmas</th>
                                            <th>Jumlah Obat</th>
                                            <th>Alamat</th>
                                            <th>No telpon</th>
                                            <th>Detail</th>
                                            <!-- <th>Status</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Puskesmas</th>
                                            <th>Jumlah Obat</th>
                                            <th>Alamat</th>
                                            <th>No telpon</th>
                                            <th>Detail</th>
                                            <!-- <th>Status</th> -->
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i = 1; ?>
                                        <?php foreach( $request as $row ) : ?>
                                                <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row["nama_puskesmas"] ?></td>
                                                <td><?= $row["jumlah"] ?></td>
                                                <td><?= $row["alamat"] ?></td>
                                                <td><?= $row["no_telpon"] ?></td>
                                                
                                                <td>

                                                <button type="button" class="btn btn-info"><a href="detailRiwayat.php?kode_puskesmas=<?= $row["kode_puskesmas"]; ?>"><i class='bx bx-detail'></i></a></button>&nbsp;

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