<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="css/style-order.css">
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

    <!-- Order start here -->
    <section class = "order">
        <div class = "container">
            <div class="title ">
             <h1><center>Fill this form to confirm your order</center></h1>
             </div>
            <fieldset class = "float-container img-curve">
                <legend>Selected Food</legend>
                 <div class ="food-images">
                 <img src="images/menu-pizza.jpg" alt="" class ="img-responsive img-curve">
                 </div>
                 <div class = "food-dis">
                    <h4>Food Title</h4>
                    <p class = "food-price">$2.3</p>
                    <h5>Quantity:</h5>
                    <input type="number" name = "number" value= "1" min="1" class = "selected-food">
            </div>
                <div class ="clearfix"></div>
            </fieldset>
            
            <fieldset class = "float-container img-curve">
                <legend>Delivery Details</legend>
                <div class ="details">
                    <div class = "info">
                    <h5>Full name:</h5>
                    <input type="text" name ="full-name" placeholder = "Ex: Nguyen Van A">
                    <h5>Phone number:</h5>
                    <input type="tel" name ="phone-number" placeholder = "Ex: 012345678">
                    <h5>Email:</h5>
                    <input type="email" name ="email" placeholder = "Ex: nguyenvana@gmail.com">
                    <h5>Address:</h5>
                    <textarea type="text" name ="address" placeholder = "Ex: Street, City, Country..." ></textarea>
                </div>
            <input type="submit" name ="confirm" value = "Confirm Order" class = "btn btn-primary">
            </fieldset>
                
                
                
                <div class ="clearfix"></div>
             </div>
             <div class =  "clearfix"></div>
        </div>
    </section>
    <!-- Order end here -->
    <!-- Social media start here -->
    <section class = "social">
        <div class = "container">
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

        <div class = "clearfix"></div>
        </div>
    </section>
    <!-- Social media end here -->

    <!-- Footer start here -->
    <section class = "footer">
        <div class = "container">
        <center><p>All rights reserved. Designed By <a href="#">CSE.TLU</a></p></center>
         </div>
    </section>
    <!-- Footer end here -->
</body>
</html>