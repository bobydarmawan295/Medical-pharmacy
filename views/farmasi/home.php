<?php 
  require_once '../partials/header.php';
  require_once 'functions.php';
  
  $obat = query("SELECT * FROM obat");
  // while($user = pg_fetch_assoc($result)){
  //   var_dump($user);
  // }
?>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="../../assets/images/logo.png" alt="" width="200px">
            </div>

            <ul class="list-unstyled components">
                <li class="#">
                    <a href="#"><i class='bx-fw bx bxs-dashboard bx-sm'></i>Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class='bx-fw bx bxs-notepad bx-sm'></i>Stok Obat</a>
                </li>
                <li>
                    <a href="puskesmas.php"><i class='bx-fw bx bxs-user-detail bx-sm'></i>Daftar Puskesmas</a>
                </li>
                <li>
                    <a href="#"><i class='bx-fw bx bx-history bx-sm' ></i>Riwayat</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                
                <li>
                    <a href="#" class="download">Settings</a>
                </li>
                <li>
                    <a href="../auth/login.php" class="article"><i class='bx-fw bx bx-log-out-circle' ></i>Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <div class="container-fluid">

                
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class='bx bx-menu bx-sm'></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                 
    
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class='bx-fw bx bxs-bell bx-sm'></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-3" href="#"><i class='bx-fw bx bxs-envelope bx-sm'></i><span class="border-right"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class='bx-fw bx bxs-user-circle bx-sm bx-md'></i>Admin</a>
                                </li>
        
                            </ul>
                        </div>
                    
                </div>
            </nav>

            <div class="row">
                <div class="col-sm-3">
                  <div class="card text-center">
                    <div class="card-body">
                    <img class="card-img-top rounded-circle mb-2" src="../../assets/images/nanggalo.jpg" alt="Card image cap" height="180px">
                      <h5 class="card-title">Puskesmas Nanggalo</h5>
                      <p class="card-text text-danger">Jl Aurduri no 18</p>
                      <a href="#" class="btn btn-primary">Profil</a>
                      <a href="#" class="btn btn-primary">Kirim Obat</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card text-center">
                    <div class="card-body">
                    <img class="card-img-top rounded-circle mb-2 image-responsive" src="../../assets/images/ambacang.jpg" alt="Card image cap" height="180px">
                      <h5 class="card-title">Puskesmas Ambacang</h5>
                      <p class="card-text text-danger">	Jl. Raya Kuranji</p>
                      <a href="#" class="btn btn-primary">Profil</a>
                      <a href="#" class="btn btn-primary">Kirim Obat</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card text-center">
                    <div class="card-body">
                    <img class="card-img-top rounded-circle mb-2" src="../../assets/images/pauh.jpg" alt="Card image cap" height="180px">
                      <h5 class="card-title">Puskesmas <br>pauh</h5>
                      <p class="card-text text-danger">Jl Irigasi</p>
                      <a href="#" class="btn btn-primary">Profil</a>
                      <a href="#" class="btn btn-primary">Kirim Obat</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card text-center">
                    <div class="card-body">
                    <img class="card-img-top rounded-circle mb-2" src="../../assets/images/lubay.jpg" alt="Card image cap" height="180px">
                      <h5 class="card-title">Puskesmas Lubuk Buaya</h5>
                      <p class="card-text text-danger">Jl Adinegoro no 20</p>
                      <a href="#" class="btn btn-primary">Profil</a>
                      <a href="#" class="btn btn-primary">Kirim Obat</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-info mt-3" style="border-radius: 25px;">Selengkapnya</button>
                </div>

                <button type="button" class="btn btn-secondary text-center ml-5" ><i class='bx-fw bx bx-plus'></i><a href="tambahObat.php">Tambah</a></button>

                <main class="container">
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
                                                <button type="button" class="btn btn-success"><a href="ubahObat.php">ubah</a></button>&nbsp;
                                                <button type="button" class="btn btn-danger"><a href="">hapus</a></button>
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
        </div>
    </div>

    <?php require_once '../partials/footer.php' ?>