<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart - RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
       <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="home.php"><img src="logo.png" width="175px"></a>
              </div>
              <nav>
               <ul id="MenuItems">
                   <li><a href="home.php">Home</a></li>
                   <li><a href="products.php">Products</a></li>
                   <li><a href="about.php">About</a></li>
                   <li><a href="feedback.php">Feedback</a></li>
                   
               </ul>
              </nav>
              <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
              <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
          </div>
           <div class="row">
                <div class="col-2">

                    <h1>Who we are?<br></h1>
                    <p>we are a team of people who are tring to save the traditions. All the old Stuff that you see when you were young and thought those look cool but now you cant find them. We are in the hope that we will be able to provide the upmost quality and fast delivery of your product.

What we want to provide: Products mainly for Men and Women

How are the sellers: Local retailers of your place</p>
                    <a href="products.php" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
               
           </div>
       </div>
       
       
       
       
       
       </body>
</html>
