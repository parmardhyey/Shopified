<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Shirt - RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
       <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="index.html"><img src="logo.png" width="225px"></a>
              </div>
              <nav>
               <ul id="MenuItems">
                   <li><a href="home.php">Home</a></li>
                   <li><a href="products.php">Products</a></li>
                   <li><a href="about.php">About</a></li>
                   <li><a href="feedback.php">Feedback</a></li>
                 
               </ul>
              </nav>
              
          </div>
          
       </div>
       
       
<!--------------single-product--------------->

 <?php
                require('db.php');
                 $pid=$_GET['insideid']??"";
              $sql="SELECT * FROM `sell` where id=$pid";
               $result=mysqli_query($con,$sql);
               if($result){
                   while($row=mysqli_fetch_assoc($result)){
                       
                       $productname=$row['productname'];
                       $price=$row['price'];
                       $image=$row['image'];
                       $description=$row['description'];
                       
                       echo'
                       
                   
               
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="'.$image.'" id="ProductImg">
            </div>
            
        </div>
        <div class="col-2">
            <p>Home / T-Shirt</p>
            <h1>'.$productname.'</h1>
            <h4>'.$price.'</h4>
            
            <select>
               <option>Select Size</option>
               <option>XXL</option>
               <option>XL</option>
               <option>Large</option>
               <option>Medium</option>
               <option>Small</option>
           </select>
            
            <input type="number" value="1">
            <a href="cart.php" class="btn">Add To Cart</a>
            
            <h3>PRODUCT DETAILS <i class="fa fa-indent"></i></h3>
            <br>
            <p>'.$description.'</p>
        </div>
    </div>
     
             
                       ';
                   
                   }
               }

           ?>



<!----------------- title -------------->
<div class="small-container">
 
    
</div>
    
<!-------------- Our Products -------------->

   
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
        <p class="copyright"><a href="https://www.youtube.com/c/EasyTutorialsVideo?sub_confirmation=1">Copyright 2020 - Easy Tutorials</a></p>
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
    
//-------------Produc Gallery------------
    
    var ProductImg = document.getElementById("ProductImg");
    
    var SmallImg = document.getElementsByClassName("small-img");
       
 
        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        
        }

  //-------------End Produc Gallery------------  
    
    
    
    
</script>



</body>
</html>

