<?php 
  require_once '../partials/header.php';
  require_once 'functions.php';

  $puskesmas = query("SELECT * FROM puskesmas");
    
  // didalam nya terdapat riwayat tiap puskesmas
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Daftar Puskesmas
                            </div>
                            <div class="card-body">
                                <div class="row">

                <?php foreach( $puskesmas as $row ) : ?>
                <div class="col-sm-4">
                    <div class="card" style="width: 15rem;">
                        <img src="../../assets/images/puskesmas.jpg" class="card-img-top"  alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?= $row["nama_puskesmas"] ?></h5>
                          <p class="card-text"><?= $row["alamat"] ?></p>
                          <a href="#" class="btn btn-primary">Details</a>
                        </div>
                      </div>
                </div>
                <?php endforeach; ?>
                
              </div>
                               
                            </div>
                        </div>
                    </div>
                </main>
        </div>
     
     <?php 
     require_once '../partials/footer.php' 
     ?>