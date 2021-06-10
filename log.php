<?php
session_start();
?>
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
// Check connection
session_start();
//$_SESSION["id"]=$_POST['cname'];
$con = mysqli_connect($servername,$username,$password,'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$db = mysqli_select_db($con,'supermarket_database');
$cname = $_POST['cname'];
$cpass = $_POST['cpass'];

$_SESSION["id"] = $_POST["cname"];

$result = mysqli_query($con,"select * from customer_db where username ='$cname' and password = '$cpass'")
          or die("failed to query database ".mysqli_error());
$row = mysqli_fetch_array($result);
if(strcmp($row["username"],$cname)==0 && strcmp($row["password"],$cpass)==0){
  //echo "Login success!!! Welcome ".$row['username'];
  echo '<script language="javascript">';
  echo 'alert("customer logged in successfully")';
  echo '</script>';
  header('Refresh: 0;url=cushome.php');
}else{
  echo "failed to login!";
  header('Refresh: 0;url=login1.php');
}
 ?>
