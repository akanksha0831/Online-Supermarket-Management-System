<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password, 'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error());
}
$email=$_GET['subject'];
$query = "DELETE FROM customer_db where emailId='$email'";
if (mysqli_query($con, $query)) {
  echo '<script language="javascript">';
  echo 'alert("customer deleted successfully")';
  echo '</script>';
  header('Refresh: 1;url=cusinfo.php');
} else {
    echo "Error deleting customer: " . mysqli_error($con);
}
$con->close();
?>
