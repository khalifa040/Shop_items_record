
<?php
include "connect.php";
  $id = $_POST['id'];
  $numb = $_POST['number'];
if(is_numeric($numb))
   {
      
    $query = "select * from Syrup where id = '$id' limit 1";
    $result = mysqli_query($con,$query);
    $row_n = $result->fetch_assoc();
    // carry out transaction
    // update the number of item
    $updated_number = $row_n['num_'] + $numb;
    
    $transac = "UPDATE `Syrup` SET num_ = $updated_number WHERE `id` = '$id'";
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
    
 