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

          <!-- Footer Section -->
      <div class="footer"> 
        <div class="footer__wrapper">
            <div class="footer__desc">
                <h1>FurBaby</h1>
                <p>Located in Irvine, California</p>
                <p id="phone">714-923-9873</p>
            </div>
            <div class="footer__links">
                <a href="/" class="footer__link">FAQ</a>
                <a href="/" class="footer__link">Delivery</a>
                <a href="/" class="footer__link">Returns</a>
            </div>
        </div>
        <div class="footer__wrapper">
            <div class="footer__links">
                <a href="/" class="footer__link">Blog</a>
                <a href="/" class="footer__link">Name Generator</a>
                <a href="/" class="footer__link">FurBaby Quiz</a>
            </div>
            <div class="footer__links">
                <a href="/" class="footer__link">Privacy Policy</a>
                <a href="/" class="footer__link">Terms and Conditions</a>
                <a href="/" class="footer__link">Accessibility</a>
            </div>
        </div>
      </div>
    
</body>
</html>