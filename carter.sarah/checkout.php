<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>  

    <?php include "parts/meta.php"; ?>
    <?php include "parts/css.php";?>
</head>

<body>

    <?php include "parts/navbar.php"; ?>

     <!-- Content--> 
<div class="container" id="forms">
<h1>Product Checkout</h1>

<div class="card soft">
    <h3>Shipping Address</h3>
    <form>
        <div class="form-label">
            <label for="address-street" class="form-label">Street</label>
            <input id="address-street" type="text" placeholder="Street name" class="form-input">
        </div>
        <div class="form-label">
            <label for="address-city" class="form-label">City</label>
            <input id="address-city" type="text" placeholder="City" class="form-input">
        </div>
        <div class="form-label">
            <label for="address-state" class="form-label">State</label>
            <input id="address-state" type="text" placeholder="State" class="form-input">
        </div>
        <div class="form-label">
            <label for="address-zip" class="form-label">Zip Code</label>
            <input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
        </div>
        <div class="form-label">
            <label for="address-country" class="form-label">Country</label>
            <input id="address-country" type="text" placeholder="Country" class="form-input">
        </div>
    </form>
    <h3>Payment</h3>
    <form>
        <div class="form-label">
            <label for="payment-name" class="form-label">Full Name</label>
            <input id="payment-name" type="text" placeholder="Name" class="form-input">
        </div>
        <div class="form-label">
            <label for="payment-number" class="form-label">Card Number</label>
            <input id="payment-number" type="text" placeholder="####-####-####-####" class="form-input">
        </div>
        <div class="form-label">
            <label for="payment-expiration" class="form-label">Expiration</label>
            <input id="payment-expiration" type="text" placeholder="MM-YY" class="form-input">
        </div>
        <div class="form-label">
            <label for="payment-cvv" class="form-label">CVV</label>
            <input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
        </div>
        <div class="form-label">
            <label for="payment-zipcode" class="form-label">Zip Code</label>
            <input id="payment-zipcode" type="text" placeholder="Zip Code" class="form-input">
        </div>
    </form>

</div>
<div>
<a href="confirmation.php" class="form-button">Complete Checkout</a>



</body>

<?php include "parts/footer.php";?>   

</html>