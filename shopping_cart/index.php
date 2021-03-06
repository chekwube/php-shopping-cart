<?php 
 include('simple_shopping_cart.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>A shopping cart using sessions</title>
    <link rel="stylesheet" type="text/css" href="common.css" />
  </head>
  <body>
    <h1>Your shopping cart</h1>
<dl>
<?php
$totalPrice = 0;
foreach ( $_SESSION["cart"] as $product ) {
  $totalPrice += $product->getPrice();
?>
      <dt><?php echo $product->getName() ?></dt>
      <dd>$<?php echo number_format( $product->getPrice(), 2 ) ?>
          ￼      <a href="shopping_cart.php?action=removeItem&productId=<?php echo
$product->getId() ?>">Remove</a></dd>
<?php } ?>
      <dt>Cart Total:</dt>
      <dd><strong>$<?php echo number_format( $totalPrice, 2 ) ?></strong></
dd>
</dl>
    <h1>Product list</h1>
    <dl>
<?php foreach ( $products as $product ) { ?>
      <dt><?php echo $product->getName() ?></dt>
      <dd>$<?php echo number_format( $product->getPrice(), 2 ) ?>
      <a href="shopping_cart.php?action=addItem&amp;productId=<?php echo
$product->getId() ?>">Add Item</a></dd>
<?php } ?>
</dl>
<?php 
?>
  </body>
</html>