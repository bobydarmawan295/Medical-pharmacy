<?php 

  require_once '../partials/header.php';
  require_once 'functions.php';
  if(isset($_SESSION["level"]) == "user" && $_SESSION["level"] != "admin"){
    echo "anda tidak berhak akses halaman ini";
    exit;
  }

  $id = $_GET['kode_puskesmas'];

  $request= query("SELECT * FROM riwayat
  INNER JOIN obat ON riwayat.kode_obat = obat.kode_obat
--   INNER JOIN stok ON request.id_stok = stok.id
  WHERE puskesmas_code = '$id'" );
  
?>
    <div id="layoutSidenav_content">
                <main>
                <button type="button" class="btn btn-info text-center ml-4" ><i class='bx-fw bx bx-arrow-back' ></i><a href="riwayatDistribusi.php">&nbsp;Kembali</a></button>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Detail Riwayat Distribusi Obat
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah Distribusi</th>
                                            <th>waktu_distribusi</th>
                                            <th>Aksi</th>
                                            <!-- <th>Status</th> -->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah Distribusi</th>
                                            <th?>waktu_distribusi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php $i = 1; ?>
                                        <?php foreach( $request as $row ) : ?>
                                                <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row["nama_obat"] ?></td>
                                                <td><?= $row["jumlah_distribusi"] ?></td>
                                                <td><?= $row["waktu_distribusi"] ?></td>
                                                <td>
                                                <button type="button" class="btn btn-danger"><a href="hapusRiwayat.php?id=<?= $row["kode_distribusi"]; ?>" onclick="return confirm('data akan terhapus')"><i class='bx bx-trash'></i></a></button>
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