<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");


//print_p($product);



?><!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart Page</title>  

    <?php include "parts/meta.php"; ?>
    <?php include "parts/css.php";?>
</head>
<body>

    <?php include "parts/navbar.php"; ?>

     <!-- Cart-->  
     <div class="container">
        <h1 class="title"> Cart </h1>
       <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <?= array_reduce($cart, 'cartListTemplate') ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card soft flat">
                    <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Sub Total</strong></div>
                        <div class="flex-none">&dollar;75.00</div>
                    </div>
                    <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Taxes</strong></div>
                        <div class="flex-none">&dollar;1.00</div>
                    </div>
                    <div class="card-section display-flex">
                        <div class="flex-stretch"><strong>Total</strong></div>
                        <div class="flex-none">&dollar;76.00</div>
                    </div>
                    <div class="card-section">
                        <a href="checkout.php" class="form-button">Checkout</a>
                    </div>
                </div>

            </div>

       </div>
    </div>
    
    <?php include "parts/footer.php";?>
    
</body>
</html>