<?php 
    require_once '../partials/header.php';
    // require_once '../farmasi/functions.php';
    // require_once 'functionsPuskesmas.php';
    $stok = query("SELECT * FROM stokpuskesmas
    INNER JOIN obat ON stokpuskesmas.obat_id = obat.kode_obat ORDER BY tanggal_update DESC");


?>
<?php if(isset($_SESSION['eksekusi'])): ?>
    <?php if($_SESSION['eksekusi'] == "ubah" ): ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Obat berhasil diubah !</strong> 
        </div>
    <?php elseif($_SESSION['eksekusi'] == "kirim" ): ?>
        <div class="alert alert-info alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Request obat berhasil dikirim !</strong> 
        </div>
    <?php elseif($_SESSION['eksekusi'] == "hapus" ): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Obat berhasil dihapus !</strong> 
        </div>
    <?php endif; ?>
<?php 
unset($_SESSION['eksekusi']);
endif; 
?>
              <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                     

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Stok Obat Puskesmas
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Update</th>
                                            <th>Aksi</th>
                                            <th>Request Obat</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Update</th>
                                            <th>Aksi</th>
                                            <th>Request Obat</th>
                                        </tr>
                                    </tfoot>
                                    <tbody> 
                                        <?php $i = 1; ?>
                                            <?php foreach( $stok as $row ) : ?>
                                                <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row["nama_obat"] ?></td>
                                                <td><?= $row["jumlah_stok"] ?></td>
                                                <td><?= $row["obat_satuan"] ?></td>
                                                <td><?= $row["tanggal_update"] ?></td>
                                                <td>
                                                <button type="button" class="btn btn-success"><a href="ubahStokPuskesmas.php?id=<?= $row["id"]; ?>"><i class='bx bx-edit-alt' ></i></a></button>&nbsp;
                                                <button type="button" class="btn btn-danger"><a href="hapusStokPuskesmas.php?id=<?= $row["id"]; ?>" onclick="return confirm('data akan terhapus')"><i class='bx bx-trash'></i></a></button>
                                                </td>
                                                <td>
                                                <button type="button" class="btn btn-primary"><a href="puskesmas_formreq.php?id=<?= $row["obat_id"]; ?>"><i class='bx bx-mail-send'></i></i></a></button>&nbsp;
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