<?php
require('Admin db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']??"");
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM  admin  WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['password'] = $password;
            // Redirect user to index.php
	    header("Location:Adminsell.php");
         }else{
	echo "<script>window.alert('Incorrect Username/Password!'); 
        window.location='Admin signin.php';
        </script>";
	}
 }
?>


<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
        <title>Login</title>
        <style>
      
            @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background: linear-gradient(to bottom right, #ffffff 0%, #ffffff 100%);
  font-family: "Open Sans", sans-serif;
 
}
#h1{
    padding-left: 1.5rem;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}
#span1{
    color:rgb(255, 145, 0);
}
#h2{
    color:black;
}
hr{
    border:0.1rem solid rgb(3, 7, 73);
 }
img {
  width: 100%;
 height: 100%;
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
  display: block;
}
a {
  margin-left: 30px;
  color: #3c63cc;
  font-weight: 600;
}
a:hover {
  margin-left: 30px;
  color: #2fa1fd;
}
.modernForm {
  max-width: 1200px;
  display: flex;
  margin: 50px auto;
  background-color: #dbdbdb;
  border-radius: 10px;
}
.imageSection {
  flex-basis: 50%;
  position: relative;
  color: white;
}
.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: rgba(104, 45, 151, 0.507);
  border-bottom-left-radius: 10px;
  border-top-left-radius: 10px;
  z-index: 0;
}
.textInside,
.service {
  position: absolute;
}
.textInside {
  bottom:60px;
  right: 40px;
  left:80px;
}
.tagLine {
  font-size: 1.4rem;
  font-weight: 600;
}
.price {
  font-size: 2rem;
  font-weight: 700;
}
.service {
  bottom: 30px;
  right: 50px;
}
.service p {
  font-weight: 700;
}
.contactForm {
  flex-basis: 45%;
  margin: auto;
  color: #555;
  padding-left: 30px;
}
.contactForm h1 {
  padding: 15px 0;
}
input[type="email"],
input[type="text"],
input[type="password"],
input[type="number"]{
  width: 100%;
  padding: 20px;
  border-radius: 5px;
  margin-top: 10px;
}
.name {
  position: relative;
  margin-bottom: 20px;
  font-weight: 700;
  color:black;
}
.iconName {
  position: absolute;
  right: 10px;
  bottom: 10px;
}

input[type="checkbox"] {
  margin-right: 10px;
}
#button{
  background-color: #d44e40;
  font-size: 1rem;
  border: none;
  color: white;
  padding: 10px 60px;
  border-radius: 5px;
  text-decoration: none;
  margin: 30px 20px;
  cursor: pointer;
  float: left;
  margin-top: 1rem;
  margin-left: 10.5rem;
}

.navbar{
    display: flex;
    align-items: center;
    margin-left: 5rem;
    margin-right: 5rem;
    padding: 0.8rem;
  
}
nav{
    flex: 1;
    text-align: right;
}
nav ul{
    display: inline-block;
    list-style-type: none;
}
nav ul li{
    display: inline-block;
    margin-right: 20px;
}
body{
    font-family: 'Poppins', sans-serif;
}
a{
    text-decoration: none;
    color: #555;
}
p{
    color: #555;
}
hr{
    border:1px solid black;
}
@media only screen and (max-width: 768px) {
  .modernForm {
    flex-wrap: wrap;
  }
  .imageSection,
  .contactForm {
    flex-basis: 100%;
  }
  .overlay,
  img {
    border-bottom-left-radius: 0;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .contactForm {
    padding-right: 30px;
  }
}

        </style>
    </head>
    <body>
    <div class="navbar">
              <div class="logo">
                  <a href="" style="font-weight:900;">Shopified</a>
              </div>
             
          </div>
            <hr>
    <div class="middle">
        <div class="modernForm">
            <div class="imageSection">
              <div class="image">
                <div class="overlay"></div>
               <img src="images/image1.png" alt="image">
              </div>
              <div class="textInside">
                <h1></h1>
                <p class="tagLine"></p>
              </div>
              <div class="service">
                <p><span class="price"></span> </p>
              </div>
            </div>           
           <div class="contactForm">
              <h1 id="h2">Admin Login</h1><br><br><br>
              <form action="" method="post">
               
                <div class="name">
                  <label for="username">Username:</label>
                  <input type="text" name="username" required placeholder="ex: Lindsey Wilson" />
                  <div class="iconName"><i class="fa-solid fa-envelope"></i></i></div>
                </div>
                <div class="name">
                  <label for="Password">Password:</label>
                  <input type="password" name="password"  required placeholder="****************"/>
                  <div class="iconName"><i class="fa-solid fa-lock"></i></div>
                </div>
               
                  <button id="button" type="submit">Login</button>&nbsp;
               
              </form>
            </div>
          </div>

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
            <a href="" style="font-weight:900;font-size:2rem;">Shopified</a><br><br>
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