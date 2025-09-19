<?php
include 'config.php';
$contol = new Controller();
$admin = new Admin();

$searchq = $_GET['q'];
$cid = $_GET['cid'];

$stmt = $admin->ret("SELECT * FROM product WHERE pname LIKE '" . $searchq . "%' OR description LIKE '" . $searchq . "%'");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
  <div class="col-md-3">
    <div class="card mb-3">
      <img src="Controller/<?php echo $row['pimage']; ?>" alt="Product" class="card-img-top" />
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['pname']; ?></h5>
        <p class="card-text"><?php echo $row['description']; ?></p>
        <div class="card-footer">
          <?php if ($row['stock'] == 0) { ?>
            <a href="#" class="btn btn-danger disabled">Out of Stock</a>
          <?php } else { ?>
            <div class="input-group">
              <input type="number" step="1" min="1" max="<?php echo $row['stock']; ?>" name="qty" value="1" title="Qty" class="form-control" />
              <div class="input-group-append">
                <a href="#" class="btn btn-primary add-to-cart-link">Add to Cart</a>
              </div>
            </div>
          <?php } ?>
          <span class="price">₹<?php echo $row['cost']; ?></span>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
