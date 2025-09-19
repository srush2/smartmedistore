

<?php 
define('DIR','');
require_once DIR .'config.php';
$contol = new Controller();
$admin = new Admin();


$id=$_SESSION['uid'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


	<style type="text/css">
		

		@import "compass/css3";

*, :before, :after{ @include box-sizing('border-box'); }


h1{
  font: 300 3em/1em 'Open Sans', sans-serif;
 /* border-bottom: solid 2px #000;*/
  margin-bottom: 1em;
  padding-bottom: 1em;
}

.button,
[class*="button-"]{
  position: relative;
  display: inline-block;
  overflow: hidden;
  float: center;
  margin: 0 1em 1em 0;
  padding: 0 4em;
  height: 3.5em;
  font: 300 1em/3.5em 'Open Sans', sans-serif;
  text:{
    decoration: none;
    shadow: 0 1px 3px rgba(black, .35);
  }
  letter-spacing: .08em;
  color: #fff;
  background: #0090C0;
  border: solid 1px #fff;
  border-radius: 2px;
  @include transition(.35s ease all);
  
  &:hover{
    background: #007DA7;
    box-shadow: 0 0 3px rgba(black, .5) inset;
  }
}

.button-hover{
  
  &:hover{ line-height: 9em; }
    
  &:before{
    content: attr(data-text);
    color: #DEEFF5;
    position: absolute;
    top: -2.75em;
  }
}
	</style>


</head>

<body>

  <!-- ======= Header ======= -->
 
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     <?php include "header.php" ?>

    <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <main id="main">

   
    <!-- ======= About Us Section ======= -->
    

   

    <!-- ======= Skills Section ======= -->
   

    <!-- ======= Services Section ======= -->
  

    <!-- ======= Cta Section ======= -->
  

    <!-- ======= Portfolio Section ======= -->
   

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" >

       

        <div class="row">



          

          

          

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->



         
<CENTER>

	<h1>Your Prescription Bill</h1>

	 <?php
 
     $stmt = $admin->ret("SELECT * FROM `prescription` WHERE `uid`='$id'");
   while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
	<h6 style="color:red;">Click on <b>DOWNLOAD</b> to view prescription bill</h6>

<a href="Controller/<?php echo $row['image'];?>"  class="button-hover" download>DOWNLOAD</a>

<?php } ?>

</CENTER>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>