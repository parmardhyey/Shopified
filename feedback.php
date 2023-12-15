
<?php
    include("auth_session.php");
    require('db.php');
    $id=  $_SESSION['uid'];
    $sql = "SELECT username FROM `users` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $bikename   = stripslashes($_REQUEST['productname']);
        $bikename    = mysqli_real_escape_string($con, $bikename);
        $rating   = stripslashes($_REQUEST['rating']);
        $rating    = mysqli_real_escape_string($con, $rating);
        $review = stripslashes($_REQUEST['review']);
        $review = mysqli_real_escape_string($con, $review);
        $query    = "INSERT into `feedback` (username,productname,rating,review)
                     VALUES ('$username','$bikename','$rating','$review')";
        $result   = mysqli_query($con, $query);
        if (!$result) {
            die(mysqli_error($con));
         } else {
            echo "<script>window.alert('Feedback submited!'); 
                  window.location='feedback.php';
                  </script>";
                }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK</title>
    <link rel="stylesheet" href="STyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
   <style>
       .offer{
    background: radial-gradient(#fff,#ffbcd7);
    margin-top: 0px;
   
}
.col-2 .offer-img{
    padding: 50px;
}
small{
    color: rgb(185, 185, 185);

}
label{
    font-size:1rem;
    font-weight:900;
    color:rgb(3, 7, 73);
}
#username,#productname,#Review{
    padding:1.4rem;
    border-radius:0.7rem;
    border:1px solid #dbdbdb;
 
}
#select{
  background-color: #d44e40;
  width:8rem;
  font-size: 1rem;
  border: none;
  color: white;
  border-radius: 5px;
  text-decoration: none;
  cursor: pointer;
margin:20px;
margin-left:13rem;
 
}
.value {
    position: absolute;
    bottom:10rem;
    display: inline-block;
    border-bottom: 4px dashed #bdc3c7;
     width:60px;
     margin-left:1.5rem;
     text-align:center;
    font-weight: bold;
    font-size: 3rem;
    text-shadow: white 2px 2px 2px;
    color:rgb(3, 7, 73);

}
input[type="range"] {
  -webkit-appearance: none;
  background-color: rgb(230,230,230);
  width: 21rem;
  padding: 0.6rem;
  border-radius:1rem;

}
input[type="range"]::-webkit-slider-thumb {
  -webkit-appearance: none;
  background-color: #d44e40;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  border: 2px solid white;
  cursor: pointer;
  transition: .3s ease-in-out;
}​
  input[type="range"]::-webkit-slider-thumb:hover {
    background-color: white;
    border: 2px solid #e74c3c;
  }
  input[type="range"]::-webkit-slider-thumb:active {
    transform: scale(1.4);
  }
  .Feedback{
    color:rgb(3, 7, 73);
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
     
<!----------offer--------------->
  
   <div class="offer">
       <div class="small-container">
           <div class="row">
           <div class="col-2">
              
           </div>
           <div class="col-2">
           <div class="main"><br>
            <div class="Feedback">
                <h2>Feedback</h2><br>
            </div>
        
             <div class="form">
            <form method="Post">
            <div >
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" placeholder="Username" maxlength="20" size="20" required value=<?php echo "'$username'" ?>><br>
            </div>
            
            <div>
            <label for="productname">Product Name:</label><br>
            <input type="text" id="productname" name="productname" placeholder="product Name" maxlength="20" size="20" required><br>
            </div>

              <div >
              <label for="Rating">Rating:</label><br>
              <input type="range" min="0" max="10" step="0" value="0" name="rating"  id="range" required ><p class="value">0</p><br>
              </div> 


              <div  class="Review">
            <label for="Review">Review:</label><br>
            <input type="text" id="Review" name="review" placeholder="Review" maxlength="100" size="100" required><br>
            </div>
            
            <input type="submit" value="Submit" id="select">
            </form>
            </div>
            
        </div>
       <script>
           var elem = document.querySelector('input[type="range"]');
            var rangeValue = function(){
             var newValue = elem.value;
            var target = document.querySelector('.value');
            target.innerHTML = newValue;
            }
            elem.addEventListener("input", rangeValue);
       </script>
     
             
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
            <a href="home.php" style="font-weight:900;font-size:2rem;">shopified</a><br><br>
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






</body>
</html>

