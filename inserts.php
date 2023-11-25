
<?php

 include("connect.php");
 
 $name = $_POST['name'];
 $price = $_POST["price"];
 $number = $_POST["number"];
 if($_POST)
  {
   /* $ref = mysqli_real_escape_string($con,$_POST['ref']);
    $user = htmlspecialchars($_POST['username']);
    $username = mysqli_real_escape_string($con, $user);
    */
     
      $query = "INSERT INTO `Syrup` (`name`, `num_`, `price`) VALUES ('$name', $number, $price)";
     if(mysqli_query($con,$query))
      { 
      echo "<script>alert('Saved in the database!'); window.location.assign('index.php');</script>";
      die;
      }

     echo "<script>alert('Error!'); window.history.back();</script>";
}

?>