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
$query = "SELECT * FROM item_db";

echo '<br><br><br><h3 align="center">Details of Items</h3><br>';
echo '<table align="center" border="1" cellspacing="2" cellpadding="2">
      <tr>
          <td> <font face="Arial">ItemId</font> </td>
          <td> <font face="Arial">name</font> </td>
          <td> <font face="Arial">stock requested</font> </td>
          <td> <font face="Arial">option1</font> </td>
          <td> <font face="Arial">option2</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["itemId"];
        $field2name = $row["name"];
        $field3name = $row["req"];
        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'."<a href='edititem.php?subject=$field1name'><button>edit</button></a><br>".'</td>
                  <td>'."<a href='delitem.php?subject=$field1name'><button>delete</button></a><br>".'</td>
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
