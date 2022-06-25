<?php 
    require_once '../partials/header.php';
    // require_once 'functionsPuskesmas.php';
    $stok = query("SELECT id, obat.nama_obat, sum(terimaobat.jumlah_stok) as jumlah, satuan, tanggal_update,status,keterangan  FROM terimaobat
                INNER JOIN obat ON terimaobat.kode_obat = obat.kode_obat GROUP BY id,nama_obat,satuan, tanggal_update, status ORDER BY tanggal_update DESC
                ");
    
?>
<?php if(isset($_SESSION['eksekusi'])): ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Obat berhasil dihapus !</strong> 
        </div>
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
                                Daftar Penerimaan Obat
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
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Update</th>
                                            <th>Status</th>
                                            <th>Keterangan</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </tfoot>
                                    <tbody> 
                                        <?php $i = 1; ?>
                                            <?php foreach( $stok as $row ) : ?>
                                                <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row["nama_obat"] ?></td>
                                                <td><?= $row["jumlah"] ?></td>
                                                <td><?= $row["satuan"] ?></td>
                                                <td><?= $row["tanggal_update"] ?></td>
                                                <td>
                                                <?php if($row["status"]) : ?>
                                                    <button type="button" class="btn btn-success"><a href="#">Berhasil</a></button>&nbsp;
                                                <?php else: ?>
                                                        <button type="button" class="btn btn-danger"><a href="#">Ditolak</a></button>&nbsp;
                                                <?php endif; ?>
                                                </td>
                                                <td><?= $row["keterangan"] ?></td>
                                                <td>
                                                <button type="button" class="btn btn-danger"><a href="hapusNotif.php?id=<?= $row["id"]; ?>" onclick="return confirm('data akan terhapus')"><i class='bx bx-trash'></i></a></button>
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