<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Pharmacy" name="keywords">
    <meta content="Pharmacy" name="description">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <script src="https://kit.fontawesome.com/1a54d23b69.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../js/log.js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../jquery-3.6.1.js"></script>
<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Favicon -->
    <link href="../logo.png" rel="icon">
    <link rel="stylesheet" href="../style.css">
    <script src="file.js"></script>
    <title>Pharmacy</title>
</head>
<body>
<div class="" style="text-align: center; background: #120F2D ; padding: 5px; color: #fff;">
 <marquee>Pharmacy</marquee>
</div>
<br>
  <img src="../logo.png" class="logo">
  <br>
  <br>
    <nav id="nv" class="nv">
    <button class="nvbtn languagesbtn">+ Tablets</button>
    <button class="nvbtn onlinebtn">+ Syrup</button>
    <button class="nvbtn anouncebtn">+ Water</button>
    <button class="nvbtn abbtn">+ About</button>
  <!--  <br><br>
    <button class="nvbtn tlog tlog1">Login</button>
    <button class="nvbtn tlog tlog2">SignUp</button>
  -->  </nav>
    
    <a href="javascript:void(0);" class="icon" onclick="nav()">

    <i> <img src="../bar.png" class="bar"></i>
    </a>
   

<h4 class="record_title">Syrup</h4>

<div class="w-90 div_center">

<div class="flex-space-between">
<div>ID</div>
 <div>Name</div>
 <div>Price</div>
 <div>Number</div>
</div>

<?php
 include "connect.php";
 $query = "SELECT * FROM Syrup";
 $exec = mysqli_query($con, $query);
 
 if($exec)
  {
 if(mysqli_num_rows($exec) > 0)
 {
 
 while($rows = $exec->fetch_assoc())
 {
 echo "
  <div class='record'>
  <div class='flex-space-between'>
  <div>".$rows['id']."</div>
  <div>".$rows['name']."</div>
  <div>".$rows['price']."</div>
  <div>".$rows['num_']."</div>
  </div>
  <br><hr>
  Update price<br>
  <form action='price.php' method='post'>
  <input type='hidden' value='".$rows['id']."' name='id'>
  <input class='r_input' name='price' type='number' placeholder='0'><button class='btn_green'>update</button>
  </form>
  <div class='flex-space-between'>
  <div>
  IN<br>
  <form action='increase.php' method='post'>
  <input type='hidden' value='".$rows['id']."' name='id'>
  <input class='r_input' name='number' type='number' placeholder='0'><button class='btn_green'>in</button>
  </form>
  </div>
  <div>
  OUT<br>
  <form action='decrease.php' method='post'>
  <input type='hidden' value='".$rows['id']."' name='id'>
  <input class='r_input' name='number' type='number' placeholder='0'><button class='btn_green'>out</button>
  </form>
  </div>
  <div>
  DEL<br>
  <button class='btn_red del'><a href='del.php?id=".$rows['id']."'>del</a></button>
  </div>
  </div>
  </div><br>";
 }
 }
 else {
 echo "<center class='red'>no record available in the database!</center>";
 }
 
 }
 ?>
</div>
 
 <div class="div_center w-90">
 <h4>Add New Item</h4>
  <form action="inserts.php" method="post">
   <label>Name
   <br>
   <input class="i_in" name="name" type="text" placeholder="type the name">
   </label>
   <br>
   <label>Price
   <br>
   <input class="i_in" name="price" type="Number" placeholder="type the price">
   </label>
   <br>
   <label>Number of Item
   <br>
   <input class="i_in" name="number" type="Number" placeholder="type number">
   </label>
   <br>
   <button class="btn_green">Send</button>
  </form>
 </div>
 
 <hr>
 <center>
 <small style="text-align: center;">
 &copy; Pharmacy, Kwanan mugu, Mubi state.<br>
 Designed by Khalifa Tech.
 <br><a href="https://github.com/khalifa040/portfolio"><i class="fa-brands fa-github"></i></a></small>
 </center>
 
</body>
</html>