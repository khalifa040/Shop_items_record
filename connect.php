<?php


  $dbhost = "0.0.0.0:3306";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "pharmacy";

   $con = mysqli_connect( $dbhost,$dbuser,$dbpass, $dbname);
   if(!$con)
      {
        die("failed to cennect");
      }