<?php
define('DIR', '');
require_once DIR . 'config.php';
$contol = new Controller();
$admin = new Admin();
if (!isset($_SESSION["uid"])) {
  header("location:login/userlogin.php");
}

$id = $_GET['cid'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Products</title>
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
</head>
<style>
  @import url('https://fonts.googleapis.com/css?family=Muli:400,400i,700,700i');

  body {
    font-family: 'Muli', sans-serif;
    background: #ddd;
  }

  .shell {
    padding: 80px 0;
  }

  .wsk-cp-product {
    background: #fff;
    padding: 15px;
    border-radius: 6px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    position: relative;
    margin: 20px auto;
  }

  .wsk-cp-img {
    position: absolute;
    top: 5px;
    left: 50%;
    transform: translate(-50%);
    -webkit-transform: translate(-50%);
    -ms-transform: translate(-50%);
    -moz-transform: translate(-50%);
    -o-transform: translate(-50%);
    -khtml-transform: translate(-50%);
    width: 100%;
    padding: 15px;
    transition: all 0.2s ease-in-out;
  }

  .wsk-cp-img img {
    width: 100%;
    transition: all 0.2s ease-in-out;
    border-radius: 6px;
  }

  .wsk-cp-product:hover .wsk-cp-img {
    top: -40px;
  }

  .wsk-cp-product:hover .wsk-cp-img img {
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
  }

  .wsk-cp-text {
    padding-top: 100%;
  }

  .wsk-cp-text .category {
    text-align: center;
    font-size: 12px;
    font-weight: bold;
    padding: 5px;
    margin-bottom: 45px;
    position: relative;
    transition: all 0.2s ease-in-out;
  }

  .wsk-cp-text .category>* {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    -khtml-transform: translate(-50%, -50%);

  }

  .wsk-cp-text .category>span {
    padding: 12px 30px;
    border: 1px solid #313131;
    background: #212121;
    color: #fff;
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
    border-radius: 27px;
    transition: all 0.05s ease-in-out;

  }

  .wsk-cp-product:hover .wsk-cp-text .category>span {
    border-color: #ddd;
    box-shadow: none;
    padding: 11px 28px;
  }

  .wsk-cp-product:hover .wsk-cp-text .category {
    margin-top: 0px;
  }

  .wsk-cp-text .title-product {
    text-align: center;
  }

  .wsk-cp-text .title-product h3 {
    font-size: 20px;
    font-weight: bold;
    margin: 15px auto;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    width: 100%;
  }

  .wsk-cp-text .description-prod p {
    margin: 0;
  }

  /* Truncate */
  .wsk-cp-text .description-prod {
    text-align: center;
    width: 100%;
    height: 62px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    margin-bottom: 15px;
  }

  .card-footer {
    padding: 25px 0 5px;
    border-top: 1px solid #ddd;
  }

  .card-footer:after,
  .card-footer:before {
    content: '';
    display: table;
  }

  .card-footer:after {
    clear: both;
  }

  .card-footer .wcf-left {
    float: left;

  }

  .card-footer .wcf-right {
    float: right;
  }

  .price {
    font-size: 18px;
    font-weight: bold;
  }

  a.buy-btn {
    display: block;
    color: #212121;
    text-align: center;
    font-size: 18px;
    width: 35px;
    height: 35px;
    line-height: 35px;
    border-radius: 50%;
    border: 1px solid #212121;
    transition: all 0.2s ease-in-out;
  }

  a.buy-btn:hover,
  a.buy-btn:active,
  a.buy-btn:focus {
    border-color: #FF9800;
    background: #FF9800;
    color: #fff;
    text-decoration: none;
  }

  .wsk-btn {
    display: inline-block;
    color: #212121;
    text-align: center;
    font-size: 18px;
    transition: all 0.2s ease-in-out;
    border-color: #FF9800;
    background: #FF9800;
    padding: 12px 30px;
    border-radius: 27px;
    margin: 0 5px;
  }

  .wsk-btn:hover,
  .wsk-btn:focus,
  .wsk-btn:active {
    text-decoration: none;
    color: #fff;
  }

  .red {
    color: #F44336;
    font-size: 22px;
    display: inline-block;
    margin: 0 5px;
  }

  @media screen and (max-width: 991px) {
    .wsk-cp-product {
      margin: 40px auto;
    }

    .wsk-cp-product .wsk-cp-img {
      top: -40px;
    }

    .wsk-cp-product .wsk-cp-img img {
      box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
    }

    .wsk-cp-product .wsk-cp-text .category>span {
      border-color: #ddd;
      box-shadow: none;
      padding: 11px 28px;
    }

    .wsk-cp-product .wsk-cp-text .category {
      margin-top: 0px;
    }

    a.buy-btn {
      border-color: #FF9800;
      background: #FF9800;
      color: #fff;
    }
  }
</style>

<body>

  <!-- ======= Header ======= -->

  <!-- Uncomment below if you prefer to use an image logo -->
  <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

  <?php include "header.php" ?>

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <main id="main">



    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="container text-center">

      <input  type="text" name="search" class="form-control" placeholder="Search" onkeyup="searchit(this.value)">
    </div>


    <div class="shell">
      <div class="container">
        <div class="row">
          <input type="hidden" name="cid" value="<?php echo $id; ?>" id="cid">
          <?php
          $i = 1;
          $stmt = $admin->ret("SELECT * , `stock` FROM `product` WHERE `catg`='$id'");
          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          ?>
            <div class="col-md-3">
              <div class="wsk-cp-product">
                <div class="wsk-cp-img">
                  <img src="Controller/<?php echo $row['pimage']; ?>" alt="Product" class="img-responsive" />
                </div>
                <div class="wsk-cp-text">
                  <div class="category">
                    <span>
                      <?php if ($row['stock'] == 0) { ?>
                        <a href="">out of stock</a>
                      <?php } else { ?>
                        <a href="" class="add-to-cart-link">add to cart</a>
                      <?php } ?>
                    </span>
                  </div>
                  <input type="hidden" name="prid" value="<?php echo $row['pid']; ?>">
                  <input type="hidden" name="cost" value="<?php echo $row['cost']; ?>">
                  <input type="hidden" name="vb" value="<?php echo $id; ?>">
                  <div class="title-product">
                    <h4><?php echo $row['pname']; ?></h4>
                  </div>
                  <div class="description-prod">
                    <p><?php echo $row['description']; ?></p>
                  </div>
                  <div class="card-footer">
                    <div class="wcf-left"><span class="price">₹<?php echo $row['cost']; ?></span></div>
                    <?php if ($row['stock'] != 0) { ?>
                      <div class="wcf-right">
                        <p><input type="number" step="1" min="1" max="<?php echo $row['stock']; ?>" name="qty" value="1" title="Qty" class="input-text qty text" size="2" /></p>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>

      </div>
    </div>






    <!-- ======= Pricing Section ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">



    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>smart medi store</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        contact us <a href="https://bootstrapmade.com/">smartmedistore@gmail.com</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>




  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <script>
    $(document).ready(function() {
      // Find all add-to-cart links
      $('.add-to-cart-link').on('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior

        // Get the parent container of the clicked link
        var container = $(this).closest('.wsk-cp-product');

        // Extract the required data from the container
        var productId = container.find('input[name="prid"]').val();
        var cost = container.find('input[name="cost"]').val();
        var categoryId = container.find('input[name="vb"]').val();
        var quantity = container.find('input[name="qty"]').val();

        // Construct the data object to send to the other page
        var data = {
          productId: productId,
          cost: cost,
          categoryId: categoryId,
          quantity: quantity
        };

        // Redirect to the other page and pass the data as URL parameters
        window.location.href = 'Controller/cart.php?' + $.param(data);
      });
    });
  </script>
  <script type="text/javascript">
  function searchit(value) {
  const searchQuery = value.toLowerCase();
  const productContainers = document.getElementsByClassName('col-md-3');

  Array.from(productContainers).forEach(container => {
    const productName = container.querySelector('.title-product h4').innerText.toLowerCase();
    container.style.display = productName.includes(searchQuery) ? 'block' : 'none';
  });
}
  </script>

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