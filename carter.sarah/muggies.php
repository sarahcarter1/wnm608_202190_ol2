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
    <div class="hero" style="background-image:url('img/placeholder_hero1.jpg')"> 
        <div class="hero__content">
            <h1>Muggies</h1>
            <p>Mugs For Hugs</p>
            <button class="button">Shop New In</button>
        </div>
    </div>

     <!-- Products Section -->  
     <div class="container_products">
     <h1>New Arrivals</h1>

     <div class="grid gap">
            <div class="col-xs-12 col-md-4">
            <a href="product_item.php">
                <figure class="figure product">
                    <img src="img/placeholder_mug.jpg" alt="">
                    <figcaption>
                        <div class="productname">Product Name</div>
                        <div class="price">Price</div>
                    </figcaption>
                </figure>
            </a>
            </div>

            <div class="col-xs-12 col-md-4">
            <a href="product_item.php">
                <figure class="figure product">
                    <img src="img/placeholder_mug.jpg" alt="">
                    <figcaption>
                        <div class="productname">Product Name</div>
                        <div class="price">Price</div>
                    </figcaption>
                </figure>
            </a>
            </div>

            <div class="col-xs-12 col-md-4">
            <a href="product_item.php">
                <figure class="figure product">
                    <img src="img/placeholder_mug.jpg" alt="">
                    <figcaption>
                        <div class="productname">Product Name</div>
                        <div class="price">Price</div>
                    </figcaption>
                </figure>
            </a>
            </div>

        </div>
    </div>
</div>    
     

         <!-- Newsletter Section -->
      <div class="newsletter">
        <div class="newsletter__content">
            <h1>Newsletter</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
            <form action="#">
                <div class="form__wrap">
                    <label for="email">
                        <input type="email" placeholder="Enter your email" id="email">
                    </label>
                    <button class="button" type="submit">Sign Up</button>
                </div>
            </form>
        </div>
      </div>

            
      <!--View Window--> 

    <div class="view-window" style="background-image:url('img/placeholder_viewwindow.jpg')"> 
    
    </div>

    <!-- About Section -->
    <div class="about">
        <div class="about_content">
            <h1>About</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
            <img src="img/placeholder_about.jpg" alt="">
        </div>
        
    </div>

          <!-- Footer Section -->
      <div class="footer"> 
        <div class="footer__wrapper">
            <div class="footer__desc">
                <h1>Footer</h1>
                <p>Location</p>
                <p id="phone">Phone Number</p>
            </div>
            <div class="footer__links">
                <a href="/" class="footer__link">Link</a>
                <a href="/" class="footer__link">Link</a>
                <a href="/" class="footer__link">Link</a>
            </div>
        </div>
        <div class="footer__wrapper">
            <div class="footer__links">
                <a href="/" class="footer__link">Link</a>
                <a href="/" class="footer__link">Link</a>
                <a href="/" class="footer__link">Link</a>
            </div>
            <div class="footer__links">
                <a href="/" class="footer__link">Link</a>
                <a href="/" class="footer__link">Link</a>
                <a href="/" class="footer__link">Link</a>
            </div>
        </div>
      </div>
    
</body>
</html>