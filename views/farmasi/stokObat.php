<?php 
  require_once '../partials/header.php';
  require_once 'functions.php';
  
  $stok = query("SELECT * FROM stok 
                INNER JOIN obat ON stok.kode_obat = obat.kode_obat ORDER BY updated_at DESC
                ");
  // while($user = pg_fetch_assoc($result)){
  //   var_dump($user);
  // }
?>

<main class="container">
                <button type="button" class="btn btn-secondary text-center ml-4" ><i class='bx-fw bx bx-plus'></i><a href="addStokObat.php">Tambah</a></button>

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
                                            <th>Nama Obat </th>
                                            <th>jumlah</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Udate</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat </th>
                                            <th>jumlah</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Udate</th>
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
                                                <td><?= $row["updated_at"] ?></td>
                                                <td>
                                                <button type="button" class="btn btn-success"><a href="ubahObat.php?id=<?= $row["id"]; ?>"><i class='bx bx-edit-alt' ></i></a></button>&nbsp;
                                                <button type="button" class="btn btn-danger"><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('data akan terhapus')"><i class='bx bx-trash'></i></a></button>
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