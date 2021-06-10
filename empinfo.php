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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$mysqli = new mysqli("localhost", $username, $password, 'supermarket_database');
$query = "SELECT * FROM employee_db";

echo '<br><br><br><h3 align="center">Details of Employees</h3><br>';
echo '<table align="center" border="1" cellspacing="2" cellpadding="2">
      <tr>
          <td> <font face="Arial">empId</font> </td>
          <td> <font face="Arial">name</font> </td>
          <td> <font face="Arial">salary</font> </td>
          <td> <font face="Arial">option</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["eid"];
        $field2name = $row["name"];
        $field3name = $row["salary"];
        $field4name = $row["eid"];
        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'."<a href='delemp.php?subject=$field4name'><button>remove employee</button></a><br>".'</td>
              </tr>';
    }
    echo "</table>";
    echo "<br><br>";

}
?>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=adminhome.php');
  }
  echo "<form method='post' action='empinfo.php'>
  <button type='submit' name='home' class='btn'>Back to Home</button>
  </form>";
  $result->free();
?>


</body>
</html>
