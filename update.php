<?php 
include '../aset/header.php';
$koneksi = mysqli_connect("localhost", "root", "", "karantina");

$id = $_GET["id"];

$query = mysqli_query($koneksi,"SELECT * FROM orang_dp WHERE id = $id");

$orang_dp = mysqli_fetch_assoc($query);

if(isset($_POST["simpan"])) 
{

    $suhu_tubuh       = $_POST["suhu_tubuh"];

$query = ("UPDATE orang_dp SET suhu_tubuh = '$suhu_tubuh' WHERE id = $id");

    $orang_dp = mysqli_query($koneksi, $query);

    echo "<script>alert('Data Berhasil DiUpdate');window.location='home.php';</script>";

}
 ?>
 <div class="container">
    <div class="row mt-4">
        <div class="col-md">
                <div class="card" style="width: 70%">
                    <div class="card header" style="width: 70%">
                        <h2 class="card-title"><i class="fas fa-folder-plus"></i> Update Suhu Tubuh</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <table class="table">
                                <input type="hidden" name="id" value="<?= $orang_dp['id']; ?>">
                                <tr>
                                    <td>Suhu Tubuh</td>
                                    <td><input type="int" name="suhu_tubuh" value="<?= $orang_dp['suhu_tubuh']?>" required></td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th><button style="height: 70%" type="submit" class="btn btn-primary" name="simpan">Update</button></th>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
        </div>
    </div>
 </div>
 <?php  
 include '../aset/footer.php';
 ?>