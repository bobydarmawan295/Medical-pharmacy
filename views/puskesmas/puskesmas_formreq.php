<?php 
    require_once '../partials/header.php';
    
?>
              <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-4">
                            
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Form Request obat
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kode Obat</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Nama Obat</label>
                                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jumlah</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                      </div>
                                    <div class="mb-3 form-check">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Data sudah benar</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                               
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    <?php require_once '../partials/footer.php' ?>