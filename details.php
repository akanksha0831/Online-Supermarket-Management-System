<?php
session_start();
$con=new mysqli('localhost','root','','supermarket_database');
if($con->connect_error){
  echo("connection failed");
}
else {

$username=$_SESSION['id'];
$itemId=$_GET['iid'];
$quantity=$_GET["q1"];

if(isset($_POST['submit']))
{
  $quant=$_POST['q'];

  $sql1 = "UPDATE cart set quantity=$quant where itemid='$itemId' and username='$username'";
  $con->query($sql1);

  $sql2 = "UPDATE item_db set quantity=quantity+$quantity-$quant where itemId='$itemId'";
  $con->query($sql2);
}
}
$con->close();
?>
<html>
<body align="center">
<br><br><br><br><br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
enter quantity:<input type="number" name="q"><br><br>
<button type="submit" value="submit" name="submit" class="btn">Submit</button>
</form>
</body>
</html>
