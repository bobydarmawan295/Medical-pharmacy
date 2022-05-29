<?php
  require('database/config.php');
  
  $result = pg_query($conn, 'SELECT * FROM obat');
  if(!$result){
    echo "Error when mining data!";
    exit;
  }

  // while($user = pg_fetch_assoc($result)){
  //   var_dump($user);
  // }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  display: flex;
}


.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="#about">About</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div> 

 <div class="main">
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
          <td>No</td>
          <th>kode Obat </th>
          <th>Nama Obat</th>
          <th>Satuan</th>
          <th>Aksi</th>
      </tr>

      <?php $i = 1; ?>
      <?php while( $row = pg_fetch_assoc($result) ) : ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= $row["kode_obat"] ?></td>
        <td><?= $row["nama_obat"] ?></td>
        <td><?= $row["satuan"] ?></td>
        <td>
          <a href="">ubah</a>|
          <a href="">hapus</a>
        </td>
      </tr>
      <?php $i++; ?>
      <?php endwhile; ?>

    </table>
</div>
   
</body>
</html> 
