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
$query = "SELECT * FROM customer_db";

echo '<br><br><br><h3 align="center">Details of Customers</h3><br>';
echo '<table align="center" border="1" cellspacing="2" cellpadding="2">
      <tr>
          <td> <font face="Arial">username</font> </td>
          <td> <font face="Arial">phone</font> </td>
          <td> <font face="Arial">email Id</font> </td>
          <td> <font face="Arial">option</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["username"];
        $field2name = $row["phone"];
        $field3name = $row["emailId"];
        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'."<a href='delcus.php?subject=$field3name'><button>remove customer</button></a><br>".'</td>
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
  echo "<form method='post' action='cusinfo.php'>
  <button type='submit' name='home' class='btn'>Back to Home</button>
  </form>";
  $result->free();
?>


</body>
</html>
