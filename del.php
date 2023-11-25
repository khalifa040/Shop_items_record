<?php

include "connect.php";

$id = $_GET['id'];
    
      $query = "delete from Syrup where id = '$id'";
      if(mysqli_query($con,$query))
		{
		echo "<script>alert('Deleted!'); window.location.assign('index.php');</script>";
		die;
		}	
		echo "<script>alert('Not Deleted!'); window.location.assign('index.php');</script>";		
?>