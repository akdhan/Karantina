 <!DOCTYPE html>
<html>
<head>
	<title>tambah</title>
</head>
<body><center>
<h1><b>Tambah Petugas</b></h1><br><br>
<form action="proses-tambah.php" method="post">
<table>
	<input type="hidden" name="">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" required></td>
	</tr>
	<tr>
		<td>NIK</td>
		<td><input type="int" name="nik" required></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" required></td>
	</tr>
	<tr>
		<td>Tanggal Masuk</td>
		<td><input type="date" name="tgl_masuk" required></td>
	</tr>
	<tr>
		<td>Suhu Tubuh</td>
		<td><input type="int" name="suhu_tubuh" required></td>
	</tr>
	<tr>
		<td></td>
		<td><button type="submit" class="btn btn-primary" name="simpan">Simpan</button></td>
	</tr>
</table>
</form>
</center>
</body>
</html>
