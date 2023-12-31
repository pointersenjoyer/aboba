
<?php 

if(str_contains($_SERVER['HTTP_REFERER'], '/cart')) {
  unset($_SESSION['cart']); 
} else {
  header('Location: /products');
}

require __DIR__ . '/header.php';
$timestamp = gmdate('Y-m-d h:i:s');
$message = generateInvoice($timestamp);
print_r($message);
?>
<!-- Page Wrapper -->
<section class="page-wrapper success-msg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
          <div class="block text-center">
              <i class="tf-ion-android-checkmark-circle"></i>
              <h2 class="text-center">Thank you for shopping with us</h2>
              <a href="/products" class="btn btn-main mt-20">Continue Shopping</a>
          </div>
          <div class="block text-center">
              <h2 class="text-center">Email was sended</h2>
              <div><?php echo $message; ?></div>
          </div>
      </div>
    </div>
  </div>
</section><!-- /.page-warpper -->

<?php require __DIR__ . '/footer.php'; ?>