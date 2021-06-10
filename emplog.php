<?php
$servername = 'localhost';
$username = 'root';
$password = '';
// Check connection
$con = mysqli_connect($servername,$username,$password,'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$db = mysqli_select_db($con,'supermarket_database');
$eid = $_POST['eid'];
$epass = $_POST['epass'];

$result = mysqli_query($con,"select * from employee_db where eid ='$eid' and password = '$epass'")
          or die("failed to query database ".mysqli_error());
$row = mysqli_fetch_array($result);
if(strcmp($row["eid"],$eid)==0 && strcmp($row["password"],$epass)==0){
  //echo "Login success!!! Welcome ".$row['name'];
  echo '<script language="javascript">';
  echo 'alert("Login success!!!")';
  echo '</script>';
  header('Refresh: 0;url=emphome.php');
}else{
  echo "failed to login!";
  header('Refresh: 0;url=emplogin1.php');
}
 ?>
