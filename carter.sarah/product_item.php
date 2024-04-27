<?php

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",",$product->images);

$image_elements = array_reduce($images,function($r,$o){
    return $r. "<img src='img/$o'>";
})


//print_p($_SESSION);

?><!DOCTYPE html>
<html lang="en">
<head>

    <title>Muggies</title>

    <?php include "parts/meta.php"; ?>
    <?php include "parts/css.php";?>
    <script src="js/product_thumbs.js"></script>
   

</head>
<body>

    <?php include "parts/navbar.php"; ?>

     <!-- Product Item -->  
<div class="container_products">
<div class="grid gap">
        <div class="images-main">
            <img src="img/<?=$product->images?>">
        </div>
        
            <form class="card soft flat" method="post" action="cartactions.php?action=add-to-cart">

            <input type="hidden" name="product-id" value="<?= $product->id ?>">

                <div class="card-section">
                    <h2 class="product-name"><?= $product->name ?></h2>
                    <div class="product-price">&dollar;<?= $product->price ?></div>
                </div>

                <div class="card-section">
                    <label for="product-amount" class="form-label">Amount</label>
                        <div class="form-select" id="product-amount">
                                <select id="product-amount" name="product-amount">
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
                                    <input type="submit" class="form-button" value="Add To Cart">
                                </div>
                            </div>
                </div>
            </form>
</div>

<?php include "parts/footer.php";?>   
</body>

</html>