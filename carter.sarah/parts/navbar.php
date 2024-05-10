 <?php

 include_once "lib/php/functions.php";

 ?>
 
 
 
 
 
 <!-- Header header>h1+p -->
 <header class="navbar">
        <div class="container display-flex">
        <div class="flex-none">
            <h1> </h1>
        </div>
        <div class="flex-stretch"></div>
     <nav class="flex-none nav">
        <ul class="container display-flex">
            <li><a href="muggies.php">Home</a></li>
            <li><a href="product_list.php">Mugs</a></li>
            <li><a href="cart.php">
                <span>Cart</span>
                <span class="badge"><?= makeCartBadge(); ?></span>
            </a></li>
            <li><a href="admin/index.php">Admin</a></li>

        </ul>
     </nav>
    </div>

    </header>