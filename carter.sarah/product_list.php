<?php


include_once "lib/php/functions.php";
include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Muggies</title>

    <?php include "parts/meta.php"; ?>
    <?php include "parts/css.php";?>
    

</head>
<body>

    <?php include "parts/navbar.php"; ?>

    <!-- Hero Section -->
    
    <div class="hero" style="background-image:url('img/background2.jpg')"> 
        <div class="hero__content">
            <h1>Mugs</h1>
        </div>
    </div>

    <!--Products Section --> 
   
    <div class="container_products">
        <h2>Product List</h2>
        <?php

        $result = makeQuery(
            makeConn(),
            "
            SELECT *
            FROM `products`
            ORDER BY `price`
            LIMIT 12
            "
        );

        echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

        ?>
</div>


<?php include "parts/footer.php";?>   
    
</body>
</html>

