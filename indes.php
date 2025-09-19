<?php
define('DIR', '');
require_once DIR . 'config.php';

$control = new Controller(); 
 $admin = new Admin();

if (!isset($_SESSION["uid"])) {
       header("location:login/userlogin.php");
}


$id=$_SESSION['uid'];
    $stmts = $admin -> ret("SELECT * FROM `user` WHERE `uid`='$id'");
    $rows = $stmts -> fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SMART MEDI STORE</title>
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


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<center>
  <!-- ======= Header ======= -->
  <?php include "header.php" ?>

  <!-- ======= Hero Section ======= -->
 


<!-- 
  <div class="container">
  <h2>Carousel Example</h2>  --> 
 

    <!-- Wrapper for slides -->
 


      <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="c1.jpg" height="1000px" width="1500px">
        <div class="carousel-caption">
        
          
        </div>
      </div>

      <div class="item">
        <img src="c2.jpg" height="1000px" width="1500px" >
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
       <img src="c3.jpg" height="1000px" width="1500px" >
        <div class="carousel-caption">
    
        </div>
      </div>
       <div class="item">
        <img src="c4.jpg" height="1000px" width="1500px" >
        <div class="carousel-caption">
        </div>
  </div>
       <div class="item">
        <img src="c5.jpg" height="1000px" width="1500px" >
        <div class="carousel-caption">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span></center>
    </a>
  </div>

   
<!-- </div> -->
<br>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="product.php?cid=Ayurveda"><img alt="Qries" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Pharmacy/Storefront_PC/Tiles_4.jpg"width="250" height="250"></a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="product.php?cid=PERSONAL CARE"><img alt="Qries" src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/Personalcare/Razorsnblades._CB440609485_.jpg"width="250" height="250"></a>




&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="product.php?cid=Women Care"><img alt="Qries" src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/Personalcare/Sanitarypads._CB440651907_.jpg"width="250" height="250"></a>


<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="product.php?cid=HomeEssentials"><img alt="Qries" src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/CatPage/Revised/6._CB1198675309_.jpg"width="250" height="250"></a>
-->



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="product.php?cid=Baby Care"><img alt="Qries" src="https://images-eu.ssl-images-amazon.com/images/G/31/img19/Baby/BAU/Diapers_440x460_1.jpg"width="250" height="250"></a>

<br><br>







&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="product.php?cid=Health and nutrition"><img alt="Qries" src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/Diet/Vitaminsupplements._CB1198675309_.jpg"width="250" height="250"></a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="product.php?cid=Health devices"><img alt="Qries" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Pharmacy/Storefront_PC/Tiles_2.jpg"width="250" height="250"></a>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="product.php?cid=otc"><img alt="Qries" src="https://images-eu.ssl-images-amazon.com/images/G/31/img20/Pharmacy/Storefront_PC/Tiles_3.jpg"width="250" height="250"></a>



&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="product.php?cid=Home Essentials"><img alt="Qries" src="https://images-eu.ssl-images-amazon.com/images/G/31/img18/HPC/Hosehold/Handwash._CB1198675309_.jpg"width="250" height="250"></a>


  <!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    


    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 >About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
             Smart Medi Store is a website. It's a one stop shop that offers effective medical products, healthcare solutions to all those individuals who are health enthusiasts. We offer premium and the largest range of original health and fitness products across various categories and leading brands. We dedicate this portal to all those people who are keen to purchase healthcare products online. We aim at covering various healthcare categories comprehensively which include –Ayurveda, health care, baby care, women care, personal care, home essentials, health and nutrition.
            </p>
           
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
        We enjoy comprehensive understanding of the shopper’s needs and make our best efforts to cater them with an extensive choice of Indian brands.
Offering a superior buying experience, we endow our esteemed customers with the best prices in market. We strive to achieve the highest level of customer satisfaction. <br><br>
So, make a move and Happy Shopping !!!!
            <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
 <!-- ======= Why Us Section ======= -->
    <!-- ======= Services Section ======= -->
     <!-- ======= Cta Section ======= -->
     <!-- ======= Portfolio Section ======= -->
 <!-- ======= Team Section ======= -->
<section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 >Frequently Asked Question</h2>
        </div>
    
    <!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accordion in HTML5</title>
<style>
details {
    border: 1px solid #d4d4d4;    
    padding: .75em .75em 0;
  margin-top: 10px;
  box-shadow:0 0 20px #d4d4d4;
}

summary { 
    font-weight: bold;
    margin: -.75em -.75em 0;
    padding: .75em;
    background-color: #5f75a4;
    color: #fff;
}

details[open] {
    padding: .75em;
  border-bottom: 1px solid #d4d4d4;
}

details[open] summary {
    border-bottom: 1px solid #d4d4d4;
    margin-bottom: 10px;
}
</style>
</head>
<body>
  <details>
    <summary>How do I place an order on SMART MEDI STORE ?</summary>
    Ordering medicines from SMART MEDI STORE online medical store is quick and hassle-free. If you wish to purchase over-the-counter medicines,all you need to do is click on the ‘Products’ and select the category from which you'd learn to purchase a products from. Once you select the product, you can click on the ‘Add to Cart’ button and proceed to make the payment. Once your order has been confirmed, you will recieve in email,we will start prepping your order for home delivery. Buying prescribed medicines on Ashirvad Medicals is even easier. You just need to upload your prescription using the ‘Upload Prescription’ on the Home page. Once you do that, our team will get in touch with you to confirm your order.
  </details>
  <details>
   <summary>Can I buy all kinds of medicines and products online on SMART MEDI STORE?</summary> 
    Yes, you can buy a range of medical products as well as health and beauty and home essential products. This includes over-the-counter (OTC) medicines,wellness products and baby care products, medical devices, masks, and even prescription medicines.
  </details>
  <details>
   <summary>Is online medicine delivery safe?</summary> 
    Absolutely! All the medicines/products sold through our platform are inspected thoroughly for their authenticity and quality. Also, while delivering the medicines, our team follows strict safety protocols to ensure only the top-notch products get delivered to you.
  </details>
  <details>
   <summary>How can I buy prescribed medicines online from SMART MEDI STORE?</summary> 
    To buy prescribed medicines through SMART MEDI STORE, all you need to do is upload your prescription on the website using the ‘Upload Prescription’ button. Once your prescription is uploaded, our team will get in touch with you to confirm your order. And once your order is confirmed, your order will be dispatched at the earliest.
  </details>
  <details>
   <summary>How can I buy SMART MEDI STORE? products?</summary> 
    Besides walking into MART MEDI STORE and buying the medicines in person, you can purchase products from the website. To do this, you will need to visit the website of MART MEDI STORE and click on the ‘Products’ section.
  </details>
  <details>
   <summary>Does SMART MEDI STORE provide same day delivery?</summary> 
    Yes, SMART MEDI STORE provides same day delivery of online medicine order.
  </details>
</body>
</html>

  </section>



    <!-- ======= Pricing Section ======= -->
    

    <!-- ======= Frequently Asked Questions Section ======= -->
  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

       

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            

              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> -->
            </div>

          </div>

         

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2 > Upload Prescription</h2> -->
        
  <!-- ======= Footer ======= -->
  <footer id="footer">



  <!--  -->
  <br>



              </br>

<div style="color:white;">
            <h3>CONTACT US</h3>
            <h4>Phone Number: 7619583461<br><br>
            E-mail: smartmedistore@gmail.com</h4>



    

    <div class="container footer-bottom clearfix">









      <!-- <div class="copyright">
        Medical Store website <strong><span>2021</span></strong>
      </div> -->
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

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