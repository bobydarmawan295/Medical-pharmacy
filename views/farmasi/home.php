<?php 

  require_once '../partials/header.php';
 
  require_once 'functions.php';
  if(isset($_SESSION["level"]) == "user" && $_SESSION["level"] != "admin"){
    echo "anda tidak berhak akses halaman ini";
    exit;
  }

?>
            <div class="row mt-5">
                <div class="col-sm-3">
                  <div class="card text-center">
                    <div class="card-body">
                    <img class="card-img-top rounded-circle mb-2" src="../../assets/images/baruah_gunung.jpg" alt="Card image cap" height="180px">
                      <h5 class="card-title">Puskesmas Baruah Gunuang</h5>
                      <p class="card-text text-primary">Jorong Buruah Gunuang I Nagari Baruah Gunuang, Kec. Bukit Barisan</p>
                      <a href="#" class="btn btn-primary">Profil</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card text-center">
                    <div class="card-body">
                    <img class="card-img-top rounded-circle mb-2 image-responsive" src="../../assets/images/batu_hampar.png" alt="Card image cap" height="180px">
                      <h5 class="card-title">Puskesmas Batu Hampar</h5>
                      <p class="card-text text-primary">	Jl. Raya Koto Tangah Batu Hampar, Kec. Akabiluru</p>
                      <a href="#" class="btn btn-primary">Profil</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card text-center">
                    <div class="card-body">
                    <img class="card-img-top rounded-circle mb-2" src="../../assets/images/banja_laweh.jpg" alt="Card image cap" height="180px">
                      <h5 class="card-title">Puskesmas <br>Banja Laweh</h5>
                      <p class="card-text text-primary">Jl. Raya Limbanang Mahat Km 4, Kec. Bukit Barisan</p>
                      <a href="#" class="btn btn-primary">Profil</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card text-center">
                    <div class="card-body">
                    <img class="card-img-top rounded-circle mb-2" src="../../assets/images/dangung.jpg" alt="Card image cap" height="180px">
                      <h5 class="card-title">Puskesmas Danguang-danguang</h5>
                      <p class="card-text text-primary">Jl. Tan Malaka Km 14 , Kec. Guguak</p>
                      <a href="#" class="btn btn-primary">Profil</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-info mt-3 ml-5" style="border-radius: 25px;"><a href="daftarPuskesmas.php">Selengkapnya</a></button>
                </div>

                
               
            </div>
        </div>
    </div>

    <?php require_once '../partials/footer.php' ?>