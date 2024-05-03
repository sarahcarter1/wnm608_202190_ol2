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

    <script src="lib/js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>
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

        <div class="form-control">
            <form class="hotdog light" id="product-search">
                <input type="search" placeholder="Search Products">
            </form>
        </div>

        <div class="form-control">
            <div class="card soft">
                <div class="display-flex">
                    <div class="flex-stretch display-flex">
                                <div class="flex-none">
                                    <button data-filter="category" data-value="" type="button" class="form-button-filter">All</button>
                                </div>
                                <div class="flex-none">
                                    <button data-filter="category" data-value="black" type="button" class="form-button-filter">Black</button>
                                </div>
                                <div class="flex-none">
                                    <button data-filter="category" data-value="white" type="button" class="form-button-filter">White</button>
                                </div>
                                <div class="flex-none">
                                    <button data-filter="category" data-value="brown" type="button" class="form-button-filter">Brown</button>
                                </div>
                                <div class="flex-none">
                                    <button data-filter="category" data-value="green" type="button" class="form-button-filter">Green</button>
                                </div>
                                <div class="flex-none">
                                    <button data-filter="category" data-value="pink" type="button" class="form-button-filter">Pink</button>
                                </div>
                                <div class="flex-none">
                                    <button data-filter="category" data-value="blue" type="button" class="form-button-filter">Blue</button>
                                </div>
                                <div class="flex-none">
                                    <button data-filter="category" data-value="multicolor" type="button" class="form-button-filter">Multicolor</button>
                                </div>
                    </div>  
                        <div class="flex-none">
                                <div class="form-select">
                                        <select class="js-sort">
                                            <option value="1">Least Expensive</option>
                                            <option value="2">Most Expensive</option>
                                        </select>
                                </div>
                        </div>   
                </div>
                </div>
                    <div class='productlist grid gap'></div>
                </div>
            </div>
                
        </div>
        
</div>


<?php include "parts/footer.php";?>   
    
</body>
</html>

