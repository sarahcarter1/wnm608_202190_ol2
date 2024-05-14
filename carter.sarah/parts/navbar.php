 <?php

 include_once "lib/php/functions.php";

 ?>
 
 
 
 
 
 <!-- Header header>h1+p -->
 <input type="checkbox" id="menu" class="hidden">
 <header class="navbar">
        <div class="container display-flex">
        <div class="flex-none">
            <h1>Muggies</h1>
        </div>
        <div class="flex-stretch"></div>
        <div class="flex-none menu-button">
            <label for="menu">&equiv;</label>
        </div>
     <nav class="nav-flex flex-none nav">
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