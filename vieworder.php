<?php 
define('DIR','');
require_once DIR .'../config.php';
$contol = new Controller();
$admin = new Admin();
if (!isset($_SESSION["uid"])) {
       header("location:login/userlogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
  <?php include "header.php" ?>
 
    <!-- partial:../../partials/_navbar.html -->
   
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
 
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
       <?php include "sidebar.php" ?>
   <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">View order</h4>
                  <p class="card-description">
                  
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                        <th>#</th>
                        <!-- <th>Image</th> -->
                          <th> User Name</th>
                          <th>E-mail</th>
                          <th>Medicine</th>
                          <th>Qty</th>
                          <th>Expiry date</th>
                          <th>Order Date</th>
                          <th> Order Status</th>
                        </tr>
                      </thead>

                      <?php
    $i=1;
     $stmt = $admin->ret("SELECT * FROM `product` inner join `user` inner join `order` on `order`.prid=`product`.pid and `user`.uid=`order`.usid ");
   while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
                      <tbody>
                        <tr>
                       <td><?php echo $i++;?></td>
                     <td><?php echo $row['uname'];?></td>
                        <td><?php echo $row['uemail'];?></td>
                        <td><?php echo $row['pname'];?></td>
                        <td><?php echo $row['qty'];?></td>
                        <td><?php echo $row['expdate'];?></td>
                        <td><?php echo $row['odate'];?></td>
                        <td><?php echo $row['ostatus'];?></td>
                            <td>  <a href="../phpmailer/sendMail.php?id=<?php echo $row['orid']; ?>&name=<?php echo $row['uname'];?> &email=<?php echo $row['uemail'];?>" class="btn btn-primary"
                       onclick="return confirm('Accept the request?')"><b><i>Accept</i></b></a></td>


                    <td>  <a href="../phpmailer/sendMail1.php?id=<?php echo $row['orid']; ?>&name=<?php echo $row['uname'];?> &email=<?php echo $row['uemail'];?>" class="btn btn-primary"
                       onclick="return confirm('Reject the request?')"><b><i>Reject</i></b></a></td>

                         
                        </tr>
                      </tbody>
                      <?php } ?>
                    </table>
                  </div>
                 <!-- partial -->
    
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
      <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Medical Store website created on 2021<a href="https://www.bootstrapdash.com/" target="_blank"></span>
            <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span> -->
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>