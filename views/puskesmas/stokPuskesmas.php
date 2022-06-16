<?php 
    require_once '../partials/header.php';
    
    $stok = query("SELECT * FROM stokpuskesmas 
                INNER JOIN obat ON stokpuskesmas.kode_obat = obat.kode_obat ORDER BY tanggal_update DESC
                ");
?>

              <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                     

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Stok Obat 
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
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Update</th>
                                        </tr>
                                    </tfoot>
                                    <tbody> 
                                        <?php $i = 1; ?>
                                            <?php foreach( $stok as $row ) : ?>
                                                <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row["nama_obat"] ?></td>
                                                <td><?= $row["jumlah_stok"] ?></td>
                                                <td><?= $row["satuan"] ?></td>
                                                <td><?= $row["tanggal_update"] ?></td>
                                                <td>
                                                <button type="button" class="btn btn-success"><a href="ubahStokPuskesmas.php?id=<?= $row["id"]; ?>"><i class='bx bx-edit-alt' ></i></a></button>&nbsp;
                                                <button type="button" class="btn btn-danger"><a href="hapusStokPuskesmas.php?id=<?= $row["id"]; ?>" onclick="return confirm('data akan terhapus')"><i class='bx bx-trash'></i></a></button>
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