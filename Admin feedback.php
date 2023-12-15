<?php
    //include auth_session.php file on all user panel pages
    include("Admin auth_session.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/be7796383d.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <link rel="stylesheet" href="SeLL.css">
    <title>Adminsell</title>
    <style>
      table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  margin-left:17rem;
  margin-right:0rem;
  width:60%;

  margin-top:5rem;

}
hr{
    border:1px solid black;
}
td, th {
 border: 0.2px solid rgb(3, 7, 73);
  padding: 8px;
  color:rgb(3, 7, 73);
 
}
th{
    background-color: #f2f2f2;
    font-weight:bold; 
}
th{
    text-align:start;
    padding-right:5rem;
}


</style>
</head>


   <header>
   <div class="header">
       <div><h2><img src="logo.png" width="175px"></h2></div>
       <div><h4 style="margin-top:2rem;"><a href="Adminsell.php">Admin Sell</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="Admin logout.php">Logout</a> </h4>
       
    </div>
</div>
    <bottom>
        <div class="bottom">
            <div class="two">
            <table >
             <tr >
            <th>USERNAME</th>
            <th>PRODUCT NAME</th>
            <th>RATING</th>
            <th>REVIEW</th>
            </tr>
            <?php
                 require('Admin db.php');

               $sql="SELECT * FROM `feedback`";
                $result=mysqli_query($con,$sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $username=$row['username'];
                        $bikename=$row['productname'];
                        $rating=$row['rating'];
                        $review=$row['review'];
                        echo'<tr>
                        <td>'.$username.'</td>
                        <td>'.$bikename.'</td>
                        <td>'.$rating.'/10</td>
                        <td>'.$review.'</td>
                        </tr>';
                    }
                }

            ?>

</table>

        </div>
    </bottom>         
    
      
    
            
</body>
</html>
