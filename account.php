
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - RedStore | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
       <div class="container">
          <div class="navbar">
              <div class="logo">
                  <a href="account.php"><img src="logo.png" width="200px" height="100px"></a>
              </div>
              <nav>
               <ul id="MenuItems">
                  
               </ul>
              </nav>
             
              <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">
          </div>
          
          
       </div>
       
       
<!--------------Cart Items details--------------->
<div class="accout-page">
    <div class="container">
  
       <div class="row">
         
          <div class="col-2">
             <img src="images/image1.png" width="100%">
          </div>
          
           <div class="col-2">
              <div class="form-container">
                 <div class="form-btn">
                     <span onclick="login()">Login</span>
                     <span onclick="register()">Register</span>
                     <hr id="indicator">
                 </div>
                 
               <form id="LoginForm" action="signin.php" method="post">
                   <input type="text" placeholder="username" name="username"  required>
                   <input type="password" placeholder="Password" name="password" required>
                   <button type="submit" class="btn">Login</button>
                   <a href="">Forgot password</a>
               </form>

               <form id="RegForm" action="signup.php" method="post" >
                   <input type="text" placeholder="username" name="username"  required>
                   <input type="email" placeholder="Email" name="email" required>
                   <input type="password" placeholder="Password" name="password" required>
                   <button type="submit" class="btn">Register</button>
               </form>
              </div>
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
     
</script>
<!------------------- form toggle ----------->
    <script>
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("indicator");
        
        function register(){
                RegForm.style.transform = "translateX(0px)";
                LoginForm.style.transform = "translateX(0px)";
                Indicator.style.transform = "translateX(100px)"
            };
        function login(){
                RegForm.style.transform = "translateX(300px)";
                LoginForm.style.transform = "translateX(300px)";
                Indicator.style.transform = "translateX(0px)"
            };
            
    </script>
    
    
    
</body>
</html>

