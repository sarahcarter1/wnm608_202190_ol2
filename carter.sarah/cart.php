<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

//$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (4,7,10)");

$cart_items = getCartItems();



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
                    <?= array_reduce($cart_items,'cartListTemplate') ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card soft flat">
                    <?= cartTotals() ?>
                </div>

            </div>

       </div>
    </div>
    
    <?php include "parts/footer.php";?>
    
</body>
</html>