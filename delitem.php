<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username,$password,'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error());
}
$db = mysqli_select_db($con,'supermarket_database');
$itemId = $_GET['subject'];

$sql = "DELETE from item_db where itemId='$itemId'";

if (mysqli_query($con, $sql)) {
  echo '<script language="javascript">';
  echo 'alert("item deleted successfully")';
  echo '</script>';
  header('Refresh: 0;url=edititeminfo.php');
} else {
    echo "Error deleting item: " . mysqli_error($con);
}
$con->close();
?>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=adminhome.php');
  }
 ?>
