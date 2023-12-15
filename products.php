<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .col-4{
            box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        }
        </style>
</head>
<body>
       <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="index.php"><img src="logo.png" width="175px"></a>
              </div>
              <nav>
               <ul id="MenuItems">
                   <li><a href="home.php">Home</a></li>
                   <li><a href="products.php">Products</a></li>
                  <li><a href="about.php">About</a></li>
                   <li><a href="feedback.php">Feedback</a></li>
                  
               </ul>
              </nav>
              <a href="cart.html"><img src="images/cart.png" width="30px" height="30px"></a>
              <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
          </div>
          
       </div>
<!----------------- title -------------->
<div class="small-container">    
             
           <div class="row">
               
              <?php
                require('db.php');

              $sql="SELECT * FROM `sell`";
               $result=mysqli_query($con,$sql);
               if($result){
                   while($row=mysqli_fetch_assoc($result)){
                       $id=$row['id'];
                       $productname=$row['productname'];
                       $price=$row['price'];
                       $image=$row['image'];
                       $description=$row['description'];
                       
                       echo'
                       
                   
               <div class="col-4">
                   
                   <a href="productsdetails.php?insideid='.$id.' "><img src="'.$image.'"></a>
                   <h4><a href="productdetails.php? insideid='.$id.'">'.$productname.'</a></h4>
                  
                   <p>Rs'.$price.'</p>
               </div> 
     
             
                       ';
                   
                   }
               }

           ?>
           </div>
           
           <div class="page-btn">
              
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

