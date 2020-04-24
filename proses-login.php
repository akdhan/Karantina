<?php
  session_start();

  include "koneksi.php";

  $username = $_POST["username"];
  $password = $_POST["password"];

  if (isset($_POST["login"])) {
    $sql = "SELECT * FROM petugas
            where username = '$username'
            and password = '$password'";

    $query = mysqli_query($kon, $sql);
    $jumlah = mysqli_num_rows($query);

    if ($jumlah > 0) {

      $petugas = mysqli_fetch_array($query);

      $_SESSION["id"] = $petugas["id"];
      $_SESSION["nama"] = $petugas["nama"];

      header("location:orang_dp/home.php");
    } else{
      header("location:index.php");
    }
  }

  if (isset($_GET["logout"])) {
    // proses logout
    session_destroy(); 

    header("location:index.php"); 
  }
 ?>