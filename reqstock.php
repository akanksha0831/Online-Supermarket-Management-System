<?php
$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername,$username,$password,'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error());
}
$db = mysqli_select_db($con,'supermarket_database');
$id = $_GET['subject'];
$sql = "UPDATE item_db SET req='yes' where itemId='$id'";

if (mysqli_query($con, $sql)) {
  echo '<script language="javascript">';
  echo 'alert("stock requested successfully")';
  echo '</script>';
  header('Refresh: 0;url=stockdet.php');
} else {
    echo "Error updating item: " . mysqli_error($con);
}
$con->close();
?>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=emphome.php');
  }
 ?>
