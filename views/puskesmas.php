<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="tambahPuskesmas.php">Tambah obat</a>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
          <td>No</td>
          <th>kode Obat </th>
          <th>Nama Obat</th>
          <th>Satuan</th>
          <th>Aksi</th>
      </tr>

      <?php $i = 1; ?>
      <?php foreach( $obat as $row ) : ?>
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
      <?php endforeach; ?>
    
</body>
</html>