<?php
session_start();

if (isset($_SESSION['iduser'])) {
 header("location:index.php");
}
require "../aplikasijquery/app/koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
  <meta name="author" content="Arif Arfan">
  <meta name="description" content="Powered by : Arif Arfan">
	<title>Alplikasi Kepegawaian</title>
	<link rel="stylesheet" href="app/css/login.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
	 <div id="container">
      <form action="" method="post">
        <div class="logo">
          <img src="app/img/unindra.png" />
          <div>
            <span>
              <h2>Sistem Informasi Kepegawaian</h2>
            </span>
            <small> Falkultas Teknik Dan Ilmu Komputer </small>
          </div>
        </div>
        <div class="login">
          <span>Login</span>
        </div>
        <div class="username">
          <span class="las la-user"></span>
           <input type="text" name="username" placeholder="Masukan Username">
        </div>

        <div class="password">
          <span class="las la-ellipsis-h"></span>
           <input type="password" name="password" placeholder="Masukan Password">
        </div>
        
        <input type="submit" name="login" value="Login" >
          <?php
            if(isset($_POST['login'])) {
                $user = $_POST['username'];
                $pass = $_POST['password'];

                $query = $con->prepare("SELECT * FROM login WHERE username = :user AND password = :pass");
                $query->bindValue(':user', $user);
                $query->bindValue(':pass', $pass);
                $query->execute();
                $cek = $query->rowCount();
                if($cek > 0) {
                    $data = $query->fetch();
                    $_SESSION['iduser'] = $data['id'];
                    $_SESSION['username'] = $data['username'];
                   header("location:app/main.php");
                } else {
                    echo "<script>alert('Login Gagal !!!');</script>";
                }
              }

              ?>
      </form>

    </div>

</body>

</html>