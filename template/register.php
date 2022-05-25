<?php 
include "conn_db.php";

if( isset($_POST["register"])) 
{
    if ( registrasi ($_POST) > 0 )
    {
        echo "<script>
        alert('user baru berhasil ditambahkan!');
        </script>";
    }
    else {
        echo mysqli_error($conn);
    }
}

function registrasi($data) {
    global $conn;
  
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  
//cek username sudah ada atau belum
$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

if (mysqli_fetch_assoc($result)) {
    echo "<script>
    alert('username sudah terdaftar!)
    </script>";
return false;
}
  
// cek konfirmasi password
  
  if ($password !== $password2) {
    echo "<script>
    alert('konfirmasi password tidak sesuai!');
    </script>";
  
    return false;
  }
  
//enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);


//tambahkan userbaru ke dalam database
mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

return mysqli_affected_rows($conn);

  }

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
              <h3>Register to <strong>SINGKEM</strong></h3>
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

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password2" id="password">  
              </div>
            
             
              <button style="background-color: rgba(122, 137, 254, 1);"type="submit" value="Log In" name="register" class="btn text-white btn-block btn-primary">Register
             <br>
            <a href="login.php">
            <button style="background-color: rgba(122, 137, 254, 1);"type="submit" value="Log In" name="register" class="btn text-white btn-block btn-primary">Login
            </a>
              
             
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
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="login.css"/>
    <style> 
    label {
        display: block
    }
    </style>
</head>
<body
style="background-image: url('assets/img/image13.png');
height: 700px;">
   
    <div class="kotak_login">
		<h1 class="tulisan_login"> Register</h1>
    <form action="" method="post">

<ul>
   
        <label for="username">Username </label>
        <input type="text" name="username" id="username"
        class="form_login" placeholder="Masukkan Username "> 

        <label for="password">Password </label>
        <input type="password" name="password" id="password"
        class="form_login" placeholder="Masukkan Password ">
   
        <label for="password2">Konfirmasi Password </label>
        <input type="password" name="password2" id="password2"
        class="form_login" placeholder="Konfirmasi Password ">
    
    <button type="submit" name="register" class="tombol_login" >Register</button>
</ul>
    </form>

    <!-- BUTTON DARI HALAMAN REGISTER KE LOGIN -->
    <a href="login.php">
    <button type="submit"
    input type="button"
    value="login"
    class="tombol_login"> Login
    </button>
    </a>

</body>
</html> -->