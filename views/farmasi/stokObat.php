<?php 

  require_once '../partials/header.php';
  require_once 'functions.php';

  if(isset($_SESSION["level"]) == "user" && $_SESSION["level"] != "admin"){
    echo "anda tidak berhak akses halaman ini";
    exit;
  }
  $stok = query("SELECT * FROM stok 
                INNER JOIN obat ON stok.kode_obat = obat.kode_obat ORDER BY nama_obat ASC
                ");
  // while($user = pg_fetch_assoc($result)){
  //   var_dump($user);
  // }
?>
<?php if(isset($_SESSION['eksekusi'])): ?>
    <?php if($_SESSION['eksekusi'] == "tambah"): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Obat berhasil ditambahkan !</strong> 
        </div>
    <?php elseif($_SESSION['eksekusi'] == "ubah" ): ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
            <strong>Obat berhasil diubah !</strong> 
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

<main class="container">
                <button type="button" class="btn btn-secondary text-center ml-4" ><i class='bx-fw bx bx-plus'></i><a href="addStokObat.php">Tambah</a></button>
                
                    <div class="container-fluid px-4 mt-3">
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
                                            <th>Nama Obat </th>
                                            <th>jumlah</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Udate</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Obat </th>
                                            <th>jumlah</th>
                                            <th>Satuan</th>
                                            <th>Tanggal Udate</th>
                                            <th>Aksi</th>
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