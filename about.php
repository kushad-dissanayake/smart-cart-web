<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!---swiper css link---->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!----font awesome cdn link----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <!---link custom css file link--->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!----header section starts--->
     <!----header section starts--->
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
    </div>
</section>
    <!----header section close--->
    <section class="home">

        <div class="swiper home-slider">
            <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(img6.jpg) no-repeat">
                <div class="content">
                    <h3>About us</h3>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(img8.jpg) no-repeat">
                <div class="content">
                    <h3>we do our best</h3>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(img10.jpg) no-repeat">
                <div class="content">
                    <h3>smart cart technology</h3>
                </div>
            </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>
    <!--about section starts--->
    <section class="header-text">
    <div class="info">
        <h3>best customer service</h3>
        </div>
    </section>
    <sectin class="about">

        <div class="image">
            <img src="img4.jpg" alt="">
        </div> 

        <div class="content">
            <h3>why chose us?</h3>
            <p>BASKETSHOP Supermarket is proudly Sri Lankan, owned and operated over the last 50 years, delivering 
               the freshest quality products, along with great value, serving thousands of Sri Lankans every day.
               As a subsidiary of the Smartmarketing,</p> 
               <p>Smartmarketing operates 6 supermarkets; 10 of which are fully owned
               and 6 franchise outlets operating under the ‘Super B’ brand. Operating with the core purpose of improving the 
               quality of life for the nation, the supermarkets are conveniently located across the country providing our 
               shoppers with a world class retail experience.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fa-solid fa-map-location-dot fa-2xl" style="color: #034f34;"></i>
                        <span>top destinations</span>
                    </div>
                    <div class="icons">
                    <i class="fa-solid fa-hand-holding-dollar fa-2xl" style="color: #034f34;"></i>
                        <span>affordable price</span>
                    </div>
                    <div class="icons">
                        <i class="fa-solid fa-headset fa-2xl" style="color: #034f34;"></i>
                        <span>24/7 services</span>
                    </div>

                </div>
        </div>
    </section>
    <!--about section ends--->
 
    
    <!----footer section starts----->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href ="home.php"> <i class="fa-solid fa-angle-right fa-xl" style="color: #008a3c;"></i> Home</a>
                <a href ="about.php"> <i class="fa-solid fa-angle-right fa-xl" style="color: #008a3c;"></i> About</a>
                <a href ="services.php"> <i class="fa-solid fa-angle-right fa-xl" style="color: #008a3c;"></i> Services</a>
                <a href ="shopnow.php"> <i class="fa-solid fa-angle-right fa-xl" style="color: #008a3c;"></i> Shop Now</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href ="#"> <i class="fa-solid fa-angle-right fa-xl" style="color: #008a3c;"></i> ask questions </a>
                <a href ="#"> <i class="fa-solid fa-angle-right fa-xl" style="color: #008a3c;"></i> about us </a>
                <a href ="#"> <i class="fa-solid fa-angle-right fa-xl" style="color: #008a3c;"></i> privacy policy </a>
                <a href ="#"> <i class="fa-solid fa-angle-right fa-xl" style="color: #008a3c;"></i> terms of use </a>                
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href ="#"> <i class="fa-solid fa-phone fa-xl" style="color: #008b8b;"></i> +94-76-1784444 </a> 
                <a href ="#"> <i class="fa-solid fa-phone fa-xl" style="color: #008b8b;"></i> +94-76-2072444 </a>  
                <a href ="#"> <i class="fa-solid fa-envelope fa-xl" style="color: #0072c6;"></i> ksanjitha66@gmail.com </a>
                <a href ="#"> <i class="fa-solid fa-map-location-dot fa-xl" style="color: #008a3c;"></i> NO-11/116, Kalidasa road, Matara, Sri-Lanka </a>            
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href ="#"> <i class="fa-brands fa-facebook fa-xl" style="color: #3b5998;"></i> facebook </a>
                <a href ="#"> <i class="fa-brands fa-twitter fa-xl" style="color: #00acee;"></i> twitter </a>
                <a href ="#"> <i class="fa-brands fa-instagram fa-xl" style="color: #010203;"></i> instagram </a>
                <a href ="#"> <i class="fa-brands fa-linkedin fa-xl" style="color: #0a66c2;"></i> linkedin </a>
            </div>
        </div>

        <div class="credit"> created by <spam>mr. web designer </span>Copyright © 2023 Web Developer Services (Pvt) Ltd. | All Rights Reserved</div>
    </section>
     <!----footer section ends----->

<!----swiper js link--->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!----custom js file link---->
<script src="script.js"></script>
</body>
</html>