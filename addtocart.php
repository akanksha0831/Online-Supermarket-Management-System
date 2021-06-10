<?php
$servername = 'localhost';
$username = 'root';
$password = '';
// Check connection
session_start();
$con = mysqli_connect($servername,$username,$password,'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error());
}
$db = mysqli_select_db($con,'supermarket_database');

$username = $_SESSION["id"];
$itemId = $_GET['subject'];
//$quantity = $_GET['sub'];

$sql = "SELECT * FROM item_db where itemId='$itemId'";
$result=$con->query($sql);
$row = $result->fetch_assoc();

$itemname = $row["name"];
$cost = $row["cost"];
$discount = $row["discount"];
$q = $row["quantity"];
$quant = $_SESSION['quantity'];
$query = "insert into cart values ('$username','$itemId','$itemname','$quant','$cost','$discount',now())";
$quantity = $q-$quant;
$sql1 = "UPDATE item_db set quantity=$quantity where itemId='$itemId'";
$con->query($sql1);
$_SESSION['quantity']=0;

if ($con->query($query) === TRUE) {
  $msg="item added successfully";
}
else {
  echo "Error: " . $query . "<br>" . $con->error;
}
if(isset($msg)){ // Check if $msg is not empty
  echo '<script language="javascript">';
  echo 'alert("item added to cart")';
  echo '</script>';
  header('Refresh: 0;url=viewitems.php');
}

  $con->close();
 ?>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=cushome.php');
  }
 ?>
