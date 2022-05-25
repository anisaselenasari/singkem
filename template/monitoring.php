<?php
session_start();

if ( !isset($_SESSION["login"])) {
  header("Location: login.php");
  exit;
}


include "conn_db.php";

$query = mysqli_query($conn,"SELECT * FROM `ta` WHERE `id`=1");
$result = mysqli_fetch_assoc($query)

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SINGKEM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lumia - v4.7.0
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
       
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/Frame 54.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.html">About</a></li>
          <li><a class="nav-link scrollto active" href="monitoring.php">Monitoring</a></li>
          <!-- <li><a class="nav-link scrollto " href="login.php">Logout</a></li> -->
          <li><a class="nav-link scrollto" href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      </div> 
  </header>
  <!-- End Header -->

  <main id="main">


    <!-- ======= Breadcrumbs ======= -->

<section style="background-color: rgba(122, 137, 254, 1);"> 
  <div  class="monitoring"
  style="width: 1000px;
         background-color: #fff;
         margin-bottom: auto;
         margin: auto;
         padding: 30px 20px;
         padding-right: 50px;
	       justify-content: center;
         border-radius: 8px;
         box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
         height: 1000%;
         margin: 6rem auto 8.1rem auto;
        display: table; ">

  <div class="container text-center text-md-left" data-aos="fade-up">
    <div>
      <div class="header">
        <p style="margin-top: 70px;" id="time"></p>
      </div>
      <div class="content">
      <div class="content-tittle">
      <h5 style="margin-bottom: 25px; font-weight: bold;">Keamanan Motor</h5>
      <div class="content-item">
             
<table>
  <tr>
  <td style="text-align :center; font-weight: bold;">Kontak Motor</td> 
  </tr>
  <tr>
  <td style=" font-weight: bold;  margin-right:100px">
  <?php 
      if($result['btn']=="1") 
      echo "Kontak Menyala";
      else 
      echo "Kontak Mati";
  ?></td>
                    
  <td>
  <button 
  style="display: inline-block;
         padding: 10px 25px;
         cursor: pointer;
         text-align: center;
         text-decoration: none;
         outline: none;
         color: #fff;
         background-color: #232859;
         border: none;
         border-radius: 8px;
         box-shadow: 0 2px #999;
         color: red; 
        margin-left: 60px;
  ">
  <?php 
    if($result['btn']=="1") 
    echo 
    "<a href=deactivatebtn.php?id=".$result['id']." class='butn red' style='color: #FFB4B4'>Matikan</a>";
    else 
    echo 
    "<a href=activatebtn.php?id=".$result['id']." class='butn green' style='color: #ADFF90'>Aktifkan</a>";
  ?>
  </button>
  </td>  
  </tr>


  <tr>
  <td style="text-align :center; font-weight: bold;">Buzzer Motor</td>
  </tr>
  <td style="text-align :center; font-weight: bold;">
  <?php 
   if($result['btn2']=="1") 
   echo "Buzzer Menyala";
   else 
   echo "Buzzer Mati";
  ?></td>

  <td style="text-align :center">
  <button style="
  display: inline-block;
  padding: 10px 25px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #232859;
  border: none;
  border-radius: 8px;
  box-shadow: 0 2px #999;
  color: red; 
  margin-left: 60px;
  ">
  <?php 
    if($result['btn2']=="1") 
    echo 
    "<a href=deactivatebtn2.php?id=".$result['id']." class='butn red' style='color: #FFB4B4'>Matikan</a>";
    else 
    echo 
    "<a href=activatebtn2.php?id=".$result['id']." class='butn green' style='color: #ADFF90'>Aktifkan</a>";
  ?>
  </button>
  </td> 
  
  <tr>
  <td style="text-align :center ;font-weight: bold;">Mesin Motor</td>
  </tr>
  <td style="text-align :center ;font-weight: bold;">
  <?php 
    if($result['btn3']=="1") 
    echo "Mesin Menyala";
    else 
    echo "Mesin Mati";
  ?></td>

  <td>
  <button style="
  display: inline-block;
  padding: 10px 25px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #232859;
  border: none;
  border-radius: 8px;
  box-shadow: 0 2px #999;
  color: red; 
  margin-left: 60px;
  ">
  <?php 
   if($result['btn3']=="1") 
   echo 
   "<a href=deactivatebtn3.php?id=".$result['id']." class='butn red' style='color: #FFB4B4'>Matikan</a>";
   else
   echo 
   "<a href=activatebtn3.php?id=".$result['id']." class='butn green' style='color: #ADFF90'>Aktifkan</a>";
  ?>
  </td>
  </tr>
  </table>


    <div class="content-item"></div>
    </div>
              <h5 style="margin-bottom: 25px; margin-top: 40px; font-weight: bold;" >Posisi Motor</h5>
              <p>Latitude: <?php echo $result['lat'];?></p>
              <p>Longitude: <?php echo $result['lng'];?></p>
              </div>
              </div>
          
              <div style="margin-top: 40px;"class ="center">
                <input onclick="handleOpen()" type="image" src="assets/img/logo_map.png"  img width="50px">
              </div>
                <a class="nav-link scrollto" onclick="handleOpen()" href="">Google Maps <br>
                    Click Here </a>
            </div>
            <a href="logout_fcn.php">
             <button style="justify-content:center; background-color :rgba(122, 137, 254, 1);" type="submit" name="logout" class="tombol_logout">Logout</button></a>
           
          
          
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script type="text/javascript">
            $(document).ready(function () {
              $(".toggle-btn").click(function () {
                $(this).toggleClass(".toggle-btn active");
              });
            });
          
            //Receive lat and lng based on sensor data
            let lat = "<?php echo $result['lat']?>";
            let lng = "<?php echo $result['lng']?>";
          
            //Function to open google maps on new tab
            const handleOpen = () => {
              window
                .open(`https://www.google.com/maps?q=${lat},${lng}`, "_blank")
                .focus();
            };
            var timeDisplay = document.getElementById("time");
          
          // Menampilkan Waktu
          function refreshTime() {
            var dateString = new Date().toLocaleString("en-US", {timeZone: "Asia/Jakarta"});
            var formattedString = dateString.replace(", ", " - ");
            timeDisplay.innerHTML = formattedString;
          }
           setInterval(refreshTime);
          </script>
      </div>
      </div>
    </section><!-- End Hero -->
    <!-- End Breadcrumbs -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-top"> -->
      <div class="container">
       
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
          <img src="assets/img/Frame 64.png">
          | Copyright <strong><span> &copy; <script>document.write(new Date().getFullYear())</script></span></strong> 
        
        <div class="credits"></div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>