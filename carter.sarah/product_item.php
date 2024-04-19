<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];


//print_p($product);

?><!DOCTYPE html>
<html lang="en">
<head>

    <title>Muggies</title>

    <?php include "parts/meta.php"; ?>
    <?php include "parts/css.php";?>
   

</head>
<body>

    <?php include "parts/navbar.php"; ?>

     <!-- Product Item -->  
<div class="container_products">
<div class="grid gap">
        <div class="images-main">
            <img src="img/<?=$product->images?>">
        </div>
        
            <div class="card soft flat">
                <div class="card-section">
                    <h2 class="product-name"><?= $product->name ?></h2>
                        <div class="product-price">&dollar;<?= $product->price ?></div>
                </div>

                <div class="card-section">
                    <label for="product-amount" class="form-label">Amount</label>
                        <div class="form-select" id="product-amount">
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                        </div>
                            </div>
                                <div class="card-section">
                                    <a href="addtocart.php?id=<?= $product->id ?>" class="form-button">Add To Cart</a>
                                </div>
                            </div>
                </div>
        </div>
</div>

<?php include "parts/footer.php";?>   
</body>

</html>