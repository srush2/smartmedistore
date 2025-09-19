<?php 
define('DIR','');
require_once DIR .'config.php';
$contol = new Controller();
$admin = new Admin();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>







<?php 



           $xstmt = $admin -> ret("SELECT * FROM `order`");
           $sum=0;
           while($xrow = $xstmt -> fetch(PDO::FETCH_ASSOC)){
           $qty=$xrow['qty'];
           $sum=$sum+$qty;
          
           // $r=$count-$d;
           

        }

?>

 <h1><?php echo $sum; ?></h1>

</body>
</html>