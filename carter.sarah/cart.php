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

     <!-- Cart-->  
     <div class="title-wrapper-with-link">
        <h1 class="title"> Your cart </h1>
        <a href="muggies.php" class="underlined-link">Continue Shopping</a>
    </div>
    
    <div class="cart_items" id="main-cart-items">
        <table class="cart-items">
            <tbody>
                <tr class="cart-item" id="CartItem-1">
                    <td class="cart-item_media">
                    <div class="cart-item_image-container">
                        <img src="img/placeholder_mug.jpg" alt="" width="150" height="100">
                    </div>
                    </td>

                    <td class="cart-item_details">
                        <a href="">Product Name</a>
                        <div class="product-option"></div>
                    </td>

                    <td class="form-select">
                        <label for="form-select">Quantity</label>
                        <div class="form-select">
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </td>


                    <td class="cart-item_totals">
                        <div class="cart-item_price-wrapper">
                            <span class="price end">$29.99</span>
                        </div>
                    </td>
                </tr>
        </tbody>
        </table>
    </div>

    <div class="cart_items" id="main-cart-items">
        <table class="cart-items">
        <tbody>
                <tr class="cart-item" id="CartItem-2">
                    <td class="cart-item_media">
                    <div class="cart-item_image-container">
                        <img src="img/placeholder_mug.jpg" alt="" width="150" height="100">
                    </div>
                    </td>

                    <td class="cart-item_details">
                        <a href="">Product Name</a>
                        <div class="product-option"></div>
                    </td>

                    <td class="form-select">
                        <label for="form-select">Quantity</label>
                        <div class="form-select">
                            <select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </td>


                    <td class="cart-item_totals">
                        <div class="cart-item_price-wrapper">
                            <span class="price end">$29.99</span>
                        </div>
                    </td>
                </tr>
        </tbody>
        </table>
    </div>

    <div class="cart_footer">
        <div class="cart_blocks">
            <div class="js-contents">
                <div class="totals">
                <h2 class="totals_total">Estimated total</h2>
                <p class="totals_total-value">$59.98</p>
                </div>
                <p class="tax-note">Taxes, discounts and shipping calculated at checkout</p>
            </div>
            <div class="cart_buttons">
                <button class="cart_button">Check Out</button>
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