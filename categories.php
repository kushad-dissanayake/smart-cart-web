<?php

require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
     ->withServiceAccount('smart-cart-database-2eea0-firebase-adminsdk-gk1k5-f3a621885f.json')
     ->withDatabaseUri('https://smart-cart-database-2eea0-default-rtdb.firebaseio.com');

$database = $factory->createDatabase();

// Accessing Firebase Realtime Database to get images data
$productsRef = $database->getReference('images');
$all_products = $productsRef->getValue();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>
    <!---swiper css link---->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <!----font awesome cdn link----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---link custom css file link--->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="header">
    <a href="home.php" class="logo">SMART SHOPPING CART</a>
    <nav class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="categories.php">Categories</a>
        <a class="cart-link">Cart
        <i class="fa-solid fa-cart-shopping fa-2xl" style="color: #ffffff;"></i>
        <span class="quantity">0</span>
        </a>
    </nav>
    <div class ="my-list"></div>
    <div id="menu-btn">
        <i class="fas fa-bars fa-2xl" style="color: #ffffff;"></i>
    </div>
      
    <div class ="my-Card">
        <h1>Cart</h1>
        <ul class="listCard"></ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
        </div>
        <div class="payments">
            <h1>Card payments</h1>
        </div>
    </div>
</section>
<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(img11.jpg) no-repeat">
                <div class="content">
                    <h3>Best product for you</h3>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(img12.jpg) no-repeat">
                <div class="content">
                    <h3>fresh vegetables & fruits</h3>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(img5.jpg) no-repeat">
                <div class="content">
                    <h3>choose your products</h3>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<section class="products">
    <?php foreach ($all_products as $key => $product) : ?>
        <div class="card">
            <?php
            // Get the product name
            $productName = $product['Product_Name'];
            // Construct the image URL based on the product name
            $imageUrl = 'https://firebasestorage.googleapis.com/v0/b/smart-cart-database-2eea0.appspot.com/o/images%2F' . rawurlencode($productName) . '.jpg?alt=media';  
            ?>
            <div class="image">
                <img src="<?php echo $imageUrl; ?>" alt="Product Image">
            </div>
            <div class="caption">
                <p class="product_name"><?php echo $product['Product_Name']; ?></p>
                <p class="stock">Stock <?php echo $product['Number_of_products_in_store']; ?></p>
                <?php
                if (!empty($product['Discount_rate'])) {
                    $discountedPrice = $product['Price'] - ($product['Price'] * $product['Discount_rate'] / 100);
                    ?>
                    <p class="price">Price: <span class="original-price">RS <?php echo $product['Price']; ?></span> <span class="discounted-price">RS <?php echo $discountedPrice; ?></span></p>
                <?php } else { ?>
                    <p class="price">Price: RS <?php echo $product['Price']; ?></p>
                <?php } ?>
            </div>
            <button type="button" name="add" class="button add-to-cart" id="add-to-cart-<?php echo $product['Product_ID']; ?>">
                Add to cart
                <i class="fa-solid fa-cart-shopping fa-xl" style="color: #ffffff;"></i>
            </button>
        </div> 
    <?php endforeach; ?>
</section>
<section class="footer">
    <div class="box-container">
        <!-- Footer content goes here -->
    </div>
    <div class="credit"> created by <span>mr. web designer </span>Copyright © 2023 Web Developer Services (Pvt) Ltd. | All Rights Reserved</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
