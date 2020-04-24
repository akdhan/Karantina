  
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="aset/bootstarp/css/bootstrap.min.css">
    <script src="aset/bootstarp/js/jquery.js"></script>
    <script src="aset/bootstarp/js/popper.js"></script>
    <script src="aset/bootstarp/js/bootstrap.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="mx-auto col-sm-6 mt-5">
        <p class="text-center" href="#" style="font-family: 'Shadows Into Light', cursive; font-size: 250%;">Login</p>
        <div class="card">
          <div class="card-header bg-success text-light text-center">
          </div>
          <div class="card-body">
            <form action="proses-login.php" method="post">
              Username
              <input type="text" name="username" class="form-control" placeholder="Username" required>
              Password
              <input type="password" name="password" class="form-control" placeholder="Password" required>
              <button type="submit" name="login" class="btn btn-block btn-success mt-3 col-sm-4 mx-auto">Login</button><br>
               <button type="submit" class="btn btn-warning"><a href="tambah.php"><i class="fas fa-user-plus"></i>   Buat Akun --> </a></button>
            </form>
          </div>
          <div class="card-footer text-center">
            <p>&copy;2020 <br> AkhdaanWedyaH</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>