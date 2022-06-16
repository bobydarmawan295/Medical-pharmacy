<?php 
  session_start();
  require_once '../farmasi/functions.php';

  global $conn;
  $result = pg_query($conn, "SELECT * FROM request");
  $notif = pg_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../assets/css/style2.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../assets/css/settings.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../assets/css/sweetalert.css?v=<?php echo time(); ?>">
    <script src="../../assets/chartJs/dist/chart.js?v=<?php echo time(); ?>"></script>
</head>
<body>

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="../../assets/images/logo.png " alt="" width="200px">
            </div>

            <ul class="list-unstyled components">
                <?php 
                    $level = $_SESSION["level"] == 'user';
                    if(!$level){
                ?>
                    <li class="#">
                    
                        <a href="../farmasi/home.php"><i class='bx-fw bx bxs-dashboard bx-sm'></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="../farmasi/stokObat.php"><i class='bx-fw bx bxs-notepad bx-sm'></i>Stok Obat</a>
                    </li>
                    <li>
                        <a href="../farmasi/daftarPuskesmas.php"><i class='bx-fw bx bxs-user-detail bx-sm'></i>Daftar Puskesmas</a>
                    </li>
                    <li>
                        <a href="../farmasi/riwayatDistribusi.php"><i class='bx-fw bx bx-history bx-sm' ></i>Riwayat</a>
                    </li>
                    <ul class="list-unstyled CTAs">
                        
                        <li>
                            <a href="../farmasi/pengaturan.php" class="download">Settings</a>
                        </li>
                        <li>
                            <a href="../auth/logout.php" class="article"><i class='bx-fw bx bx-log-out-circle' ></i>Logout</a>
                        </li>
                    </ul>
                <?php }else{?>
                    
                    <li>
                        <a href="../puskesmas/stokPuskesmas.php"><i class='bx-fw bx bxs-notepad bx-sm'></i>Stok Obat</a>
                    </li>
                    <li>
                        <a href="../puskesmas/puskesmas_formreq.php"><i class='bx-fw bx bxs-user-detail bx-sm'></i>Form Request</a>
                    </li>
                    <ul class="list-unstyled CTAs">
                        <li>
                            <a href="../puskesmas/pengaturan.php" class="download">Settings</a>
                        </li>
                        <li>
                            <a href="../auth/logout.php" class="article"><i class='bx-fw bx bx-log-out-circle' ></i>Logout</a>
                        </li>
                    </ul>
                <?php } ?>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class='bx bx-menu bx-sm'></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                    </button>
                 
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="../farmasi/request.php"><i class='bx-fw bx bxs-bell bx-sm'></i>Notifikasi<span class="badge badge-danger ml-1"><?=  $notif; ?></span><span class="sr-only">unread messages</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-3" href="mailto:contoh10@gmail.com"><i class='bx-fw bx bxs-envelope bx-sm'></i><span class="border-right"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class='bx-fw bx bxs-user-circle bx-sm bx-md'></i><?= $_SESSION["level"] ?></a>
                                </li>
        
                            </ul>
                        </div>
                    
                </div>
            </nav>
    