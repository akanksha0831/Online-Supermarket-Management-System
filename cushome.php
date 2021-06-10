<?php
session_start();
 ?>
<html>
<head>
  <style>
  .bg_img{
  	background-image:url("admin.jpg");
  	min-height: 645px;
  	background-position: center;
  	background-repeat:no-repeat;
  	background-attachment:fixed;
  	background-size:cover;
  	position:relative;
  }
  .container {
    position: absolute;
    left: 0;
    margin-left: 500px;
    margin-top : 30px;
    font-size:200%;
    max-width: 350px;
    padding: 25px;

  }
  .btn {
    background-color: orange;
    color: white;
    padding: 10px 10px;
    border-radius:8px;
    width: 100%;
    opacity: 0.9;
  }
  </style>
</head>
<body  align="center" class="bg_img">
<div class="container">
<h3>WELCOME DEAR CUSTOMER<h3>
  <form action="http://localhost/supermarket_management_system/viewitems.php">
    <button type="submit" class="btn">View Items</button>
  </form>
  <form action="http://localhost/supermarket_management_system/viewcart.php?">
    <button type="submit" class="btn">Go to cart</button>
  </form>
  <form action="http://localhost/supermarket_management_system/orders.php">
    <button type="submit" class="btn">Your orders</button>
  </form>
  <form action="http://localhost/supermarket_management_system/logout.php">
    <button type="submit" class="btn">Logout</button>
  </form>
</div>
</body>
</html>
