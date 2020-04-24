<?php
include '../koneksi.php';

$sql = "SELECT * FROM orang_dp";

$res = mysqli_query($kon, $sql);

$pinjam = array();
	
while ($data = mysqli_fetch_assoc($res)){
	$pinjam[] = $data;
}
?>

<?php 
include '../aset/header.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Orang_dp</title>
</head>
<body>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
			
		</div>
	</div>
</div>
<div class="card">
  <div class="card-header">
    <h2 class="card-title"><i class="fas fa-user"></i> Orang Dalam Pemantauan </h2>
      <button type="submit" class="btn btn-warning"><a href="tambah.php"><i class="fas fa-user-plus"></i>   Tambah Orang --> </a></button>
    </div>
    <div class="card-body">
    	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NIK</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tanggal Masuk</th>
      <th scope="col">Suhu Tubu</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no = 1;
    foreach ($pinjam as $p ) { ?>
    	<tr>
    		<th scope="row"><?= $no ?></th>
    		<td><?=	$p['nama']?></td>
    		<td><?=	$p['nik']?></td>
        <td><?= $p['alamat']?></td>
        <td><?= $p['tgl_masuk']?></td>
        <td><?= $p['suhu_tubuh']?></td>
    		<td>
    			<a href="update.php?id=<?= $p["id"];?>  " class="badge badge-warning">Update</a>
				  <a href="sembuh.php?id=<?= $p["id"];?> " onclick="return confirm('Yakin orang ini sembuh total ?')" class="badge badge-succes">Sembuh</a>
    		</td>
    	</tr>
   <?php 
    $no++;
    }
   ?>
  </tbody>
</table>
    </div>
</div>
</body>
</html>
 <?php 
include '../aset/footer.php';
 ?>