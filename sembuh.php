<?php

include '../koneksi.php';

$id=$_GET['id'];

$query = mysqli_query($kon, "DELETE FROM orang_dp WHERE orang_dp.id='$id' ");

if($query>0){
    echo "<script> alert('Orang Sudah Sembuh'); document.location.href='home.php';
          </script>";
}
    
?>