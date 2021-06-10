<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username,$password,'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error());
}
//$db = mysqli_select_db($con,'supermarket_database');
//$itemId = $_GET['subject'];
if(isset($_POST['submit']))
{
$itemId = $_POST['itemId'];
$quantity = $_POST['quantity'];
$cost = $_POST['cost'];
$discount = $_POST['discount'];
$sql = "UPDATE item_db SET quantity=$quantity,cost=$cost,discount=$discount,req='no' where itemId='$itemId'";

if (mysqli_query($con, $sql)) {
  echo '<script language="javascript">';
  echo 'alert("item updated successfully")';
  echo '</script>';
  header('Refresh: 0;url=edititeminfo.php');
} else {
    echo "Error updating item: " . mysqli_error($con);
}
}
$con->close();
?>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=edititeminfo.php');
  }
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
  .btn {
    background-color: orange;
    color: white;

    padding: 10px 10px;
    border-radius:8px;
    width: 10%;
    opacity: 0.9;
  }
  </style>
</head>
<body align="center"  class="bg_img">
  <center>
    <br><br>
    <h2>Editing an Item</h2><br><br>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

    <label for="itemId"><b>ItemID</b></label>
    <input type="text" name="itemId" required><br><br>

    <label for="quantity"><b>Quantity</b></label>
    <input type="number" name="quantity" required><br><br>

    <label for="cost"><b>Cost</b></label>
    <input type="number" name="cost" required><br><br>

    <label for="discount"><b>Discount</b></label>
    <input type="number" name="discount" required><br><br>

    <button type="submit" value="submit" name="submit" class="btn">Submit</button>
 </form>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <button type="submit" name="home" class="btn">Back</button>
    </form>
</body>
</html>
