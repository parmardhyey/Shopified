
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/be7796383d.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <link rel="stylesheet" href="SeLL.css">
    <title>Adminsell</title>
  
</head>

<body>
    <?php
    include 'Admin auth_session.php';
    include_once 'db.php';
   
    if (isset($_REQUEST['submit'])) {
        
        $bike = stripslashes($_REQUEST ['productname']??"");
         //escapes special characters in a string
        $bike = mysqli_real_escape_string($con, $bike);
       
        $price    = stripslashes($_REQUEST['price']);
        $price    = mysqli_real_escape_string($con, $price);
       
        $description    = stripslashes($_REQUEST['description']);
        $description   = mysqli_real_escape_string($con, $description);
        
        
        $filename =$_FILES["image"]["name"];
        $tempname =$_FILES["image"]["tmp_name"];
        $folder= "image/".$filename;
        move_uploaded_file($tempname,$folder);
        $query    = "INSERT into `sell` (productname,price,description,image)
                     VALUES ('$bike','$price', '$description','$folder')";
        $result = mysqli_query($con, $query);
        if (!$result) {
            die(mysqli_error($con));
        } else {
            echo "<script>window.alert('Your Ad Posted Successfully!'); 
            window.location='Adminsell.php';
            </script>";
                }
    } 
?>
   <header>
   <div class="header">
       <div><h2><img src="logo.png" width="175px"></h2></div>
       <div><h4 style="margin-top:2rem;"><a href="Admin feedback.php">Feedback</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="Admin logout.php">Logout</a> </h4>
       
    </div>
       
             
            </div><br>
      
        <div class="main">
            
            <div class="form">
            <form action="" method="post" enctype="multipart/form-data">

           

            <div>
            <label for="Bikename">Produtname:</label><br>
            <input type="text" id="bikename" name="productname" placeholder="produtname" required maxlength="20" size="20"><br><br>
            </div>

          

            

            <div>
            <label for="Price">Price:</label><br>
            <input type="number" id="Price" name="price" placeholder="Price" required  min="1" max="1000000" maxlength="6" size="6"><br><br>
            </div>

            

          
           

            <div >
            <label for="Description">Description:</label><br>
            <input type="text" id="Description" name="description" placeholder="Description" required maxlength="800" size="800"><br><br>
            </div>

           

           
            <div id="nameimage">
            <label for="Image">Image:</label><br>
            <input type="file" id="Image" name="image"  placeholder="Image" required>
            </div>

            <div  id="nameimage">
            <input type="submit" value="submit" id="select" name="submit">
            </div>
            </form>
            
        
            
</body>
</html>
