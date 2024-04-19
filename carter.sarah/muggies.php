

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
    <div class="hero" style="background-image:url('img/background3.jpg')"> 
        <div class="hero__content">
            <h1>Muggies</h1>
            <p>Mugs For Hugs</p>
        </div>
    </div>

     <!-- Products Section -->  
     <div class="container_products">
     <h1>New Arrivals</h1>
            <?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$result = makeQuery(
    makeConn(),
    "
    SELECT *
    FROM `products`
    ORDER BY `price`
    LIMIT 3
    "
);

echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>";

?>

</div>    

     

         <!-- Newsletter Section -->
      <div class="newsletter">
        <div class="newsletter__content">
            <h1>Newsletter</h1>
            <p>Stay up to date on new mug releases. Sign up today!</p>
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

    <div class="view-window" style="background-image:url('img/background4.jpg')"> 
    
    </div>

    <!-- About Section -->
    <div class="about">
        <div class="about_content">
            <h1>About</h1>
            <h4>Founded in 2024, Muggies is a small vintage shop selling unique mugs based in San Francisco, California.</h4>
            <img src="img/background5.jpg" alt="">
        </div>
    </div>

    <?php include "parts/footer.php";?>
    
</body>
</html>