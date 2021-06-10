<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password, 'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error());
}
$id=$_GET['subject'];
$query = "DELETE FROM employee_db where eid='$id'";
if (mysqli_query($con, $query)) {
  echo '<script language="javascript">';
  echo 'alert("employee deleted successfully")';
  echo '</script>';
  header('Refresh: 1;url=empinfo.php');
} else {
    echo "Error deleting employee: " . mysqli_error($con);
}
$con->close();
?>
