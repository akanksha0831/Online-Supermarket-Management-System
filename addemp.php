<?php
$servername = 'localhost';
$username = 'root';
$password = '';
// Check connection
$con = mysqli_connect($servername,$username,$password,'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error());
}
$db = mysqli_select_db($con,'supermarket_database');
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
  $eid = $_POST['eid'];
  $ename = $_POST['ename'];
  $enumber = $_POST['enumber'];
  $eaddress = $_POST['eaddress'];
  $esal = $_POST['esal'];
  $eemail = $_POST['eemail'];
  $epass = $_POST['epass'];
  if(isset($eid)){
    $mysql_get_users = mysqli_query($con,"SELECT * FROM employee_db where eid='$eid'");
    $get_rows = mysqli_affected_rows($con);
    if($get_rows >=1)
    {
      header('Refresh: 0;url=adminhome.php');
      echo '<script language="javascript">';
      echo 'alert("employee id already exists")';
      echo '</script>';

    }
    else
    {
      if($eid!='' && $ename !='' && $enumber!='' && $eaddress!='' && $esal!='' && $eemail!='' && $epass!='')
      {
        //Insert Query of SQL
        // Username available
          $query = "insert into employee_db values ('$eid','$ename','$enumber','$eaddress','$esal','$eemail','$epass')";
          if ($con->query($query) === TRUE) {
            $msg="Login created successfully";
          }
          else {
            echo "Error: " . $query . "<br>" . $con->error;
          }
          if(isset($msg)){ // Check if $msg is not empty
            echo '<script language="javascript">';
            echo 'alert("Successfully added an employee")';
            echo '</script>';
                }
              }
            }
          }
        }
  $con->close();
 ?>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=adminhome.php');
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
    <h2>Adding an Employee</h2><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="eid"><b>EmpId</b></label>
    <input type="text" name="eid" required><br><br>

    <label for="ename"><b>Name</b></label>
    <input type="text" name="ename" required><br><br>

    <label for="enumber"><b>Mobile</b></label>
    <input type="tel" name="enumber" required><br><br>

    <label for="eaddress"><b>Address</b></label>
    <input type="text" name="eaddress" required><br><br>

    <label for="esal"><b>Salary</b></label>
    <input type="number" name="esal" required><br><br>

    <label for="eemail"><b>Email Id</b></label>
    <input type="email" name="eemail" required><br><br>

    <label for="epass"><b>Password</b></label>
    <input type="password" name="epass" required><br><br>

    <button type="submit" value="submit" name="submit" class="btn">Submit</button>
    <button type="reset" value="Reset" class="btn">Reset</button><br><br>

  </form>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <button type="submit" name="home" class="btn">Back to Home</button>
  <form>
  </center>
</body>
</html>
