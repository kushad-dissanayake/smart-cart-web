<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!---swiper css link---->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <!----font awesome cdn link----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <!---link custom css file link--->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">

</script>
</head>
<body>
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

    <!----header section ends--->

    <!----home section starts--->
    <section class="home">

        <div class="swiper home-slider">
            <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(img1.jpg) no-repeat">
                <div class="content">
                    <span>smart shopping,easy to pay,all things in one place</span>
                    <h3>offer in this season</h3>
                    <a href="product.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(img2.jpg) no-repeat">
                <div class="content">
                    <span>smart shopping,easy to pay,all things in one place</span>
                    <h3>easy to pay!</h3>
                    <a href="product.php" class="btn">discover more</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background:url(img3.jpg) no-repeat">
                <div class="content">
                    <span>smart shopping,easy to pay,all things in one place</span>
                    <h3>everything in one place</h3>
                    <a href="product.php" class="btn">discover more</a>
                </div>
            </div>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </section>
    <!---home section ends--->

    <!---home section starts--->
 
     <!----search bar start-->
     <div class="search-layout">
        <div>
            <div class="search-header">
                <h2>What are you looking for?</h2>
                <i class="fa-solid fa-clipboard fa-2xl" style="color: #010203;"></i>
                <p>Order online</p>
                <div>
                    <h3>Upload Now</h3>
                    <i class="fa-solid fa-angle-right fa-2xl" style="color: #010203;"></i>
                </div>
            </div>
            <form action="search.php" method="GET" class="search-bar">
                <i class="fa-solid fa-magnifying-glass fa-2xl" style="color: #010203;"></i>
                <input type="text" name="query" placeholder="Search for product"id="#">
                <input type="submit" value="Search">
            </form>
        </div>
    </div>
  <!----search bar end-->

    <!----categories section start---->
        <section class="categories">
            <h1 class="heading-title"> our shop categories </h1>

            <div class="box-container">

                <div class="box" id="dairy-box">
                    <img src="https://cargillsonline.com/VendorItems/MenuCategory/90735186-DY-P.jpg" alt="">
                    <h3>Dairy</h3>
                </div>
                <div class="box" id="snack-box">
                    <img src="https://cargillsonline.com/VendorItems/MenuCategory/18964025-SC-P.jpg" alt="">
                    <h3>Snacks & Confectionery</h3>
                </div>
                <div class="box" id="baby-box">
                    <img src="https://cargillsonline.com/VendorItems/MenuCategory/82047693-Baby%20Products.jpg" alt="">
                    <h3>Baby Products</h3>
                </div>
                <div class="box" id="tea-box">
                    <img src="https://cargillsonline.com/VendorItems/MenuCategory/63917452-TC-P.jpg" alt="">
                    <h3>Tea & Coffee</h3>
                </div>
                <div class="box" id="food-box">
                    <img src="https://cargillsonline.com/VendorItems/MenuCategory/19365870-sub%20cat.png" alt="">
                    <h3>Food Cupboard</h3>
                </div>
                <div class="box" id="cooking-box">                
                    <img src="https://cargillsonline.com/VendorItems/MenuCategory/06851397-CE-P.jpg" alt="">
                    <h3>Cooking Essentials</h3>
                </div>
                <div class="box" id="bakery-box">
                    <img src="https://cargillsonline.com/VendorItems/MenuCategory/17953084-BK-P.jpg" alt="">
                    <h3>Bakery</h3>
                </div>
                <div class="box" id="frozen-box">
                    <img src="https://cargillsonline.com/VendorItems/MenuCategory/74528061-FF-P.jpg" alt="">
                    <h3>Frozen Food</h3>
                </div>
                <div class="box" id="seeds-box">
                    <img src="https://cargillsonline.com/VendorItems/MenuCategory/78513942-SS-P.jpg" alt="">
                    <h3>Seeds & Spices</h3>
                </div>

            </div>  
        </section> 

    <!----categories section ends---->

    <!---home about section starts--->
    <section class="home-about">

        <div class="image">
            <img src="img4.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>BASKETSHOP Supermarket is proudly Sri Lankan, owned and operated over the last 5 years, delivering the freshest quality products,
               along with great value, serving thousands of Sri Lankans every day.As a subsidiary of the smartmarketing group, BASKETSHOP
               operates 3 supermarkets</p>
               <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!---home about section ends--->

    <!----home services section starts---->
    <sectin class="home-services">
        <h1 class="heading-title"> our packages</h1>

        <div class="box-container">

            <div class="box1">
                <div class="image">
                    <img src="img5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>special big sale 50%</h3>
                    <p>save big by saving food</p>
                        <a href="categories.php" class="btn">shop now</a>
                </div>
            </div>

            <div class="box1">
                <div class="image">
                    <img src="img9.jpg" alt="">
                </div>
                <div class="content">
                    <h3>special big sale 20%</h3>
                    <p>save big by saving food</p>
                        <a href="categories.php" class="btn">shop now</a>
                </div>
            </div>

            <div class="box1">
                <div class="image">
                    <img src="img7.jpg" alt="">
                </div>
                <div class="content">
                    <h3>special big sale 10%</h3>
                    <p>save big by saving food</p>
                        <a href="categories.php" class="btn">shop now</a>
                </div>
            </div>

        </div>

        <div class="load-more"><a href="categories.php" class="btn">load more</a></div>
    </section>
    <!----home services section ends---->

    <!----home offer section starts---->
    <section class ="home-offer">
        <div class ="content">
            <h3>upto 50% off</h3>
            <p>Check out the latest Supermarket promotions, offers, sales and discounts instantly
                from the Supermarket chains.</p>
                <a href="categories.php" class="btn">shop now</a>
        </div>
    </section>
    <!----home offer section starts---->
 
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