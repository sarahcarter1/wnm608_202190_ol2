<!DOCTYPE html>
<html lang="en">
<head>

    <title>Muggies</title>

    <?php include "parts/meta.php"; ?>
    <?php include "parts/css.php";?>
    <?php include "parts/footer.php";?>

</head>
<body>

    <?php include "parts/navbar.php"; ?>

     <!-- Product Item -->  
<div class="product_item">
    <div class="display-flex flex-align-center">
        <div class="flex-none">
                <img src="img/placeholder_mug.jpg" alt="mug" class="product__img">    
        </div>
        <div class="flex-stretch">
                <h1 class="product__heading">Product Item</h1>
                <p class="product__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                <label for="form-select">Quantity</label>
                <div class="form-select">
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
          
                <button class="button" type="submit">Add To Cart</button>
        </div>
    </div>
</div>

    
</body>
</html>