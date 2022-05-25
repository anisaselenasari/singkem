<?php
session_start();

include "conn_db.php";

// jika username & password sesuai dengan database, maka akan langsung ke index
if ( isset($_SESSION["login"])) {
    header("Location: monitoring.php");
    exit;
  }


//   berfungsi untuk memanggil data yang telah diinputkan ke dalam database agar bisa ditampilkan dihalaman login dan harus sesuai dengan yang ada di database
if (isset ($_POST["login"])) {
     
    $username = $_POST["username"];
    $password = $_POST["password"];

// jika username tidak di isi, maka tidak bisa ke index
    if ($username == "" || $password == ""){
        echo "<script>
    alert('silahkan login terlebih dahulu!)
    </script>";
    exit;
    }

// menyambungkan database ke dalam website
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


//cek username apakah benar atau salah
    if (mysqli_num_rows($result) === 1) {

//cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {

//set session ; session membuat halaman tdk bisa ke hal utama sebelum melakukan login. tetapi jika username dan password sesuai maka bisa ke index
    $_SESSION["login"] = true;
    header("Location: monitoring.php");
    exit; 
        }
    }       
}
    $error = true;
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login</title>
  </head>
  <body>
   <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="asset/images/icon vector.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Login to <strong>SINGKEM</strong></h3>
              <p class="mb-4">Motor Akan Lebih Aman Dengan SINGKEM</p>
            </div>
            <form action="" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                
              </div>
              
              <!-- <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div style="background-color:rgba(122, 137, 254, 1)"class="control__indicator"></div>
                </label>
              </div> -->

              <button style="background-color: rgba(122, 137, 254, 1);"type="submit" value="Log In" name="login" class="btn text-white btn-block btn-primary">Login
             
              
              
             
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link href="login.css" rel="stylesheet"/>
    </head>
<body style="
/* background-image: url(assets/img/image13.png) ; */
background-repeat:no-repeat;
background-size: 100%;
width :auto;
height: 1080%;
">

    


    <div class="kotak_login">
		<h1 class="tulisan_login"> Login</h1>

    <form action="" method="post">

    <ul>
        
            <label for="username">Username </label>
            <input type="text" name="username" id="username"
            class="form_login" placeholder="Masukkan Username ">
        
        
            <label for="password">Password </label>
            <input type="password" name="password" id="password"
            class="form_login" placeholder="Masukkan Password ..">
       
            <button type="submit" name="login" class="tombol_login">Login</button>
        
    </ul>

    <!-- alert password salah -->
    <!-- <?php if (isset($error)) : ?>
        <p style="color:red; font-style:initial; font-weight:bold">Username atau Password yang anda masukkan salah!</p>
        else (!isset)
        
        <?php endif; ?> -->


    </form>
  
</body>
</html>  -->