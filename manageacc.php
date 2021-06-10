<?php
$servername = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($servername, $username, $password, 'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error());
}
$db = mysqli_select_db($con,'supermarket_database');
if(isset($_POST['submit']))
{

$oldpass = $_POST['oldpass'];
$newpass = $_POST['newpass'];
$sql = "UPDATE employee_db SET password='$newpass' where password='$oldpass'";

if (mysqli_query($con, $sql)) {
  echo '<script language="javascript">';
  echo 'alert("password updated successfully")';
  echo '</script>';
  header('Refresh: 0;url=manageacc.php');
} else {
    echo "Error updating password: " . mysqli_error($con);
}
}
$con->close();
?>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=emphome.php');
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
  input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 2px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  .btn {
    background-color: orange;
    color: white;
    padding: 10px 10px;
    border-radius:8px;
    width: 100%;
    opacity: 0.9;
  }
  .container {
    position: absolute;
    left: 0;
    margin-left: 500px;
    margin-top : 20px;
    font-size:200%;
    max-width: 350px;
    padding: 25px;

  }
  </style>
</head>
<body align="center" class="bg_img">
  <div class="container">
    <br><br>
    <h3>Edit password</h3><br>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

    <label for="oldpass">Old Password</label>
    <input type="password" name="oldpass" required><br>

    <label for="newpass">New Password</label>
    <input type="password" name="newpass" required><br><br>

    <button type="submit" value="submit" name="submit" class="btn">Submit</button>
 </form>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <button type="submit" name="home" class="btn">Back</button>
    </form>
  </div>
</body>
</html>
