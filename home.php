<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
   
   <div class="header">
       <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="home.php"><img src="logo.png" width="200px"></a>
              </div>
              <nav>
               <ul id="MenuItems">
                   <li><a href="home.php">Home</a></li>
                   <li><a href="products.php">Products</a></li>
                     <li><a href="about.php">About</a></li>
                   <li><a href="feedback.php">Feedback</a></li>
                   <li><a href="logout.php">Logout</a></li>
                  
                   
               </ul>
              </nav>
              <a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a><?php echo $_SESSION['username']; ?>
              <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
          </div>
           <div class="row">
                <div class="col-2">

                    <h1>Give Your Workout<br>A New Style!</h1>
                    <p>Success isn’t always about greatness. It’s about consistency. Consistent<br>hard work gains success. Greatness will come.</p>
                    <a href="products.php" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
               
           </div>
           
       </div>
       </div>
<!------------------ featured categories --------------->
     <div class="categories">
         <div class="small-container">
           <div class="row">
               <div class="col-3">
                   <img src="images/category-1.jpg">
               </div> 
               <div class="col-3">
                  <img src="images/my1.jpg">
               </div> 
               <div class="col-3">
                   <img src="images/category-3.jpg">
               </div> 
           </div>
       </div>
     </div>
       
<!-------------- Our Featured Products -------------->
  
  
  <div class="small-container">
        <h2 class="title">Featured Products</h2>
           <div class="row">
               <div class="col-4">
                   
                   <a href="products.php"><img src="images/product-1.jpg"></a>
                   <h4><a href="">Red Printed T-Shirt</a></h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
               
               </div> 
               <div class="col-4">
                   <img src="images/m5.jpg">
                   <h4>blak jacket</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                  
               </div> 
               <div class="col-4">
                   <img src="images/product-3.jpg">
                   <h4>HRX Gray Trackpants</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                   
               </div> 
                <div class="col-4">
                   <img src="images/tshirt_1.jpg">
                   <h4>Back Printed T-Shirt</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                  
               </div> 
           </div>
        <h2 class="title">Latest Products</h2>
             <div class="row">
               <div class="col-4">
                   <img src="images/shirt-1.jpg">
                   <h4>fancy shirt</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                  
               </div> 
               <div class="col-4">
                   <img src="images/product-6.jpg">
                   <h4>Black Printed T-Shirt</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                      `
               </div> 
               <div class="col-4">
                   <img src="images/product-4.jpg">
                   <h4>Blue Printed T-Shirt</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                  
               </div> 
                <div class="col-4">
                   <img src="images/tshirt-2.jpg">
                   <h4>Black v t-shirt</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                
               </div> 
           </div>
           <div class="row">
               <div class="col-4">
                   <img src="images/tshirt-3.jpg">
                   <h4>fancy shirt</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                  
               </div> 
               <div class="col-4">
                   <img src="images/black%20hoodie.jpg">
                   <h4>Black hoodie</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
                
               </div> 
               <div class="col-4">
                   <img src="images/product-11.jpg">
                   <h4>Gray Nike Shoes</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-half-o"></i>
                   </div>
               
               </div> 
                <div class="col-4">
                   <img src="images/product-12.jpg">
                   <h4>HRX Black Trackpants</h4>
                   <div class="rating">
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star"></i>
                       <i class="fa fa-star-o"></i>
                   </div>
                  
               </div> 
           </div>
       </div>
       
<!----------offer--------------->
  
   <div class="offer">
       <div class="small-container">
           <div class="row">
           <div class="col-2">
               <img src="images/exclusive.png" class="offer-img">
           </div>
           <div class="col-2">
               <p>Exclusively Available on RedStore</p>
               <h1>Smart Band 4</h1>
               <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.</small>
               <br>
               <a href="products.php" class="btn">Buy Now &#8594;</a>
           </div>
       </div>
       </div>
       
   </div>
   
<!----------testimonial--------------->   
  
   <div class="testimonial">
       <div class="small-container">
       <div class="row">
           <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                      <div class="rating">
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star-o"></i>
                       </div>
                       <img src="images/user-1.png">
                       <h3>Sean Parker</h3>
           </div>
            <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                      <div class="rating">
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star-o"></i>
                       </div>
                       <img src="images/user-2.png">
                       <h3>Mike Smith</h3>
           </div>
            <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                      <div class="rating">
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star-o"></i>
                       </div>
                       <img src="images/user-3.png">
                       <h3>Mabel Joe</h3>
           </div>
       </div>
       </div>
   </div>
<!----------Brands--------------->     
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-philips.png">
                </div>
            </div>
        </div>
    </div>
<!----------Footer---------------> 

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col1">
               <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col2">
               <img src="logo.png">
                <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.</p>
            </div>
            <div class="footer-col3">
               <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col4">
               <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter<li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        
    </div>
    
</div>



<!-------------js for toggle menu-------------->

<script>
    
    var MenuItems = document.getElementById("MenuItems");
    
    MenuItems.style.maxHeight = "0px";
    
    function menutoggle()
    {
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }else
            {
                MenuItems.style.maxHeight = "0px"
            } 
    }
    
</script>



</body>
</html>
