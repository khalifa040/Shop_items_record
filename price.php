<?php
include "connect.php";
  $id = $_POST['id'];
  $price = $_POST['price'];
if(is_numeric($price))
   {   
    // update the price of item
    
    $transac = "UPDATE `Syrup` SET price = $price WHERE `id` = '$id'";
    if(mysqli_query($con,$transac))
     { 
      echo "<script>alert('Item number updated!'); window.location.assign('index.php');</script>";
      die;
      }	
      echo "<script>alert('Error!'); window.location.assign('index.php');</script>";		
      
     }
    else {
    echo "<script>alert('Empty value or not number!'); window.location.assign('index.php');</script>";
    }
      ?>
    
 