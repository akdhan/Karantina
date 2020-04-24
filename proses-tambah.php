<?php 
include '../koneksi.php';

if(isset($_POST['simpan']))
{

$nama 		= $_POST['nama'];
$nik 		= $_POST['nik'];
$alamat 	= $_POST['alamat'];
$tgl_masuk 	= $_POST['tgl_masuk'];
$suhu_tubuh = $_POST['suhu_tubuh'];

$query = mysqli_query( $kon,"INSERT INTO orang_dp (nama, nik, alamat, tgl_masuk, suhu_tubuh) VALUES ('$nama', '$nik', '$alamat', '$tgl_masuk', '$suhu_tubuh' )" );

	if($query>0){
echo "<script>alert('Data Berhasil DiTambahkan');window.location='home.php';</script>";

	
	}
}

?>