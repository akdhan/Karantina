<?php 
$kon = mysqli_connect("localhost","root","","karantina");

if (mysqli_connect_error()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 ?>