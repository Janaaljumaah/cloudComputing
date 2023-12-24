<?php
session_start();
error_reporting(0);
include( "connectdbs.php");
$profile=$_SESSION['User_name'];
if ($profile==true){

}
else
{
    header('location:signin.php');
}

$sql = "SELECT * FROM `register` WHERE username='$profile'";
  $result = mysqli_query($connection,$sql);
  $data=mysqli_fetch_assoc($result);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home </title>
</head>

<body>
    <div class="container2">
        <div class="box2 title">
      <header>PROJECT   PLANNER</header>
      <h1><?php echo "Welcome back " . $profile . "!"; ?></h1>
 

    </div> 

    <div class="nav">
        <ul>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Members</a></li>
            <li><a href="#">Tasks</a></li>
        </ul>
   </div>

   <div class="logout-container">
        <a href="logout.php" class="logout-button">Logout</a>
    </div>
             

    
             
</body>

</html>