<?php
session_start();
$connect=new mysqli('localhost','root','','supermarket_database');
if($connect->connect_error){
  echo("connection failed");
}
if(isset($_POST['submit'])){

  $id=$_SESSION["id"];
  $sql1="select * from cart where username ='$id'"or die(mysql_error());
  $res=$connect->query($sql1);
  while(($row=$res->fetch_assoc()))
  {
  $itemid = $row['itemid'];
  $itemname = $row['itemname'];
  $quantity = $row['quantity'];
  $cost = $row['cost'];
  $discount = $row['discount'];
  $orderdate = $row['orderdate'];

  $sql2="insert into orders values('$id','$itemid','$itemname','$quantity','$cost','$discount','$orderdate')";
  $res1=$connect->query($sql2);
  }
  echo '<script language="javascript">';
  echo 'alert("Order placed!!! THANK YOU FOR SHOPPING")';
  echo '</script>';
//  header('Refresh: 1;url=pay.php');
}
$connect->close();
if(isset($_POST['home'])){
    header('Refresh: 0;url=cushome.php');
  }
  //$result->free();
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
    width: 15%;
    opacity: 0.9;
  }
  </style>
</head>
<body align="center" class="bg_img">
  <br><br><br><br><br><br>
<form action="pay.php" method="post">
<b>Enter cart number:</b><input type="text"><br><br>
<button type='submit' name='submit' class='btn'>Pay with this card</button><br><br>
<form method='post' action='cushome.php'>
<button type='submit' name='home' class='btn'>Back to Home</button>
</form>
</form>
</body>
</html>
