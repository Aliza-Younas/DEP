<?php
// Assuming you have a session and cart setup
session_start();
if(isset($_POST['add_to_cart'])){
   // Your code to add the product to the cart
   $_SESSION['message'] = "Product added to cart!";
   header('location:your_cart_page.php'); // Redirect to the cart page or refresh the page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Product Page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>

<?php
if(isset($_SESSION['message'])){
   echo "<div class='message'>".$_SESSION['message']."</div>";
   unset($_SESSION['message']); // Clear the message after displaying
}
?>

<section class="products">
   <form action="" method="post">
      <input type="hidden" name="product_id" value="<?= $product['id']; ?>">
      <input type="submit" name="add_to_cart" value="Add to Cart" class="add-to-cart-btn">
   </form>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
   const message = document.querySelector('.message');
   if (message) {
      setTimeout(() => {
         message.style.display = 'none';
      }, 3000); // Hide the message after 3 seconds
   }
});
</script>

</body>
</html>
