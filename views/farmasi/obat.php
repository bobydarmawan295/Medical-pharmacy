<?php 
  require_once '../partials/header.php';
  require_once 'functions.php';
  
  $obat = query("SELECT * FROM obat");
  // while($user = pg_fetch_assoc($result)){
  //   var_dump($user);
  // }
?>

  


<main class="container">
                <button type="button" class="btn btn-secondary text-center ml-5" ><i class='bx-fw bx bx-plus'></i><a href="tambahObat.php">Tambah</a></button>

                    <div class="container-fluid px-4 mt-3">
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Tabel Obat
                            </div>
                            
                        
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>kode Obat </th>
                                            <th>Nama Obat</th>
                                            <th>Satuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>kode Obat </th>
                                            <th>Nama Obat</th>
                                            <th>Satuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php $i = 1; ?>
                                            <?php foreach( $obat as $row ) : ?>
                                                <tr>
                                                <td><?= $i ?></td>
                                                <td><?= $row["kode_obat"] ?></td>
                                                <td><?= $row["nama_obat"] ?></td>
                                                <td><?= $row["satuan"] ?></td>
                                                <td>
                                                <button type="button" class="btn btn-success"><a href="ubahObat.php?kode_obat=<?= $row["kode_obat"]; ?>">ubah</a></button>&nbsp;
                                                <button type="button" class="btn btn-danger"><a href="hapus.php?kode_obat=<?= $row["kode_obat"]; ?>" onclick="return confirm('data akan terhapus')">hapus</a></button>
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

<?php require_once '../partials/footer.php' ?>