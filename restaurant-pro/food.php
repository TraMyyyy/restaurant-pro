<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href="css/style-food.css">
</head>
<body>
    <!-- Logo and menu start here -->
    <section class = "navbar">
        <div class = "container ">
        <div class = "logo">
            <img src="images/logo.png" alt="Restaurant Logo" class = "img-responsive">
        </div>

        <div class = "menu text-right">
            <ul>
                <li>
                    <a href="home.php">Home</a>
                </li>

                <li>
                    <a href="categories.php">Categories</a>
                </li>

                <li>
                    <a href="food.php">Foods</a>
                </li>

                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>

        <div class = "clearfix"></div>
        </div>
       
    </section>
    <!-- Logo and menu end here -->

     <!-- Search start here -->
     <section class = "food-search">
        <div class ="container">
           <form action="">
               <center><input type="search" name = "search" placeholder = "Search for Food...">
               <input type="submit" name = "submit" value = "Search" class = "btn btn-primary">
               </center>
           </form>
        </div>
    </section>
    <!-- Search end here -->
  <!-- Food menu start here -->
  <section class = "food-menu">
         <div class = "container ">
            <div class = "food-me">
                <strong><center>Food Menu</center></strong>
            </div>

            <div class = "me-box float-container img-curve">
                <div class = "food-img">
                    <img src="images/menu-pizza.jpg" alt="Chicken Pizza" class = "img-responsive img-curve">
                </div>
                <div class = "food-dis">
                    <h4>Food Title</h4>
                    <p class = "food-price">$2.3</p>
                    <p class ="food-detail">Made with Italian Sauce, Chicken and organic vegetable...</p>

                    <a href="order.php" class = "btn btn-primary">Order Now</a>
                </div>
                <div class = "clearfix"></div>
            </div>

            <div class = "me-box float-container img-curve">
                <div class = "food-img">
                    <img src="images/menu-burger.jpg" alt="Smoky Burger" class = "img-responsive img-curve">
                </div>
                <div class = "food-dis">
                    <h4>Smoky Burger</h4>
                    <p class = "food-price">$1.9</p>
                    <p class ="food-detail">Made with Italian Sauce, Chicken and organic vegetable...</p>

                    <a href="order.php" class = "btn btn-primary">Order Now</a>
                </div>
                <div class = "clearfix"></div>
            </div>

            <div class = "me-box float-container img-curve">
                <div class = "food-img">
                    <img src="images/menu-momo.jpg" alt="Chicken Steam Momo" class = "img-responsive img-curve">
                </div>
                <div class = "food-dis">
                    <h4>Chicken Steam Momo</h4>
                    <p class = "food-price">$2.3</p>
                    <p class ="food-detail">Made with Italian Sauce, Chicken and organic vegetable...</p>

                    <a href="order.php" class = "btn btn-primary">Order Now</a>
                </div>
                <div class = "clearfix"></div>
            </div>

            <div class = "me-box float-container img-curve">
                <div class = "food-img">
                    <img src="images/menu-pizza.jpg" alt="Vegetable Pizza" class = "img-responsive img-curve">
                </div>
                <div class = "food-dis">
                    <h4>Vegetable Pizza</h4>
                    <p class = "food-price">$2.3</p>
                    <p class ="food-detail">Made with Italian Sauce, Chicken and organic vegetable...</p>

                    <a href="order.php" class = "btn btn-primary">Order Now</a>
                </div>
                <div class = "clearfix"></div>
            </div>

            <div class = "me-box float-container img-curve">
                <div class = "food-img">
                    <img src="images/menu-burger.jpg" alt="Vegetable Burger" class = "img-responsive img-curve">
                </div>
                <div class = "food-dis">
                    <h4>Vegetable Burger</h4>
                    <p class = "food-price">$2.3</p>
                    <p class ="food-detail">Made with Italian Sauce, Chicken and organic vegetable...</p>

                    <a href="order.php" class = "btn btn-primary">Order Now</a>
                </div>
                <div class = "clearfix"></div>
            </div>

            <div class = "me-box float-container img-curve">
                <div class = "food-img">
                    <img src="images/menu-momo.jpg" alt="Vegetable Momo" class = "img-responsive img-curve">
                </div>
                <div class = "food-dis">
                    <h4>Vegetable Momo</h4>
                    <p class = "food-price">$2.3</p>
                    <p class ="food-detail">Made with Italian Sauce, Chicken and organic vegetable...</p>

                    <a href="order.php" class = "btn btn-primary">Order Now</a>
                </div>
                <div class = "clearfix"></div>
            </div>
            <div class ="clearfix"></div>
            </div>

    </section>
    <!-- Food menu end here -->

    <!-- Social media start here -->
    <section class = "social">
        <div class = "container ">
        <ul>
           <li>
               <a href="#" >
                   <img src="images/facebook.png" alt="">
                </a>
            </li>
        <li>
               <a href="#" >
                   <img src="images/instagram.png" alt="">
               </a>
            </li>
        <li>
               <a href="#" >
                   <img src="images/twitter.png" alt="">
               </a>
            </li>
            
        </ul>

        
        </div>
    </section>
    <!-- Social media end here -->

    <!-- Footer start here -->
    <section class = "footer">
        <div class = "container ">
        <center><p>All rights reserved. Designed By <a href="#">CSE.TLU</a></p></center>
         </div>
    </section>
    <!-- Footer end here -->
</body>
</html>