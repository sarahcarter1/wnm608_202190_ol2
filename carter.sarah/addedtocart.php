<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Confirmation Page</title>  

    <?php include "parts/meta.php"; ?>
    <?php include "parts/css.php";?>

</head>
<body>

    <?php include "parts/navbar.php"; ?>

     <!-- Cart-->  
<div class="container_products">
    <h2 class="title"> You added <?= $product->name ?> to your cart </h2>
    <p>There are now <?= $cart_product->amount ?> of  <?=$product->name ?> in your cart. </p>

    <div class="grid gap">
        <div class="col-xs-12 col-md-5">
            <div class="flex-none"> <a href="product_list.php">Continue Shopping</a></div>
        </div>
        <div class="col-xs-12 col-md-5">
            <div class="flex-none"> <a href="cart.php">Go To Cart</a></div>
        </div>
    </div>
</div>
    

<?php include "parts/footer.php";?>

</body>
</html>