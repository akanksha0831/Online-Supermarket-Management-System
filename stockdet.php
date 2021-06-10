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
    padding: 10px;
    border-radius:8px;
    width: 10%;
    opacity: 0.9;
  }
  .container {
    position: absolute;
    left: 0;
    margin-left: 500px;
    margin-top : 30px;
    font-size:200%;
    max-width: 350px;
    padding: 25px;

  }
  </style>
</head>
<body class="bg_img" align="center">
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
          <td> <font face="Arial">quantity</font> </td>
          <td> <font face="Arial">option</font> </td>
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["itemId"];
        $field2name = $row["name"];
        $field3name = $row["quantity"];
        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'."<a href='reqstock.php?subject=$field1name'><button name='r'>request extra stock</button></a><br>".'</td>
              </tr>';
    }
    echo "</table>";
    echo "<br><br>";

}
?>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=emphome.php');
  }
  echo "<form method='post' action='stockdet.php'>
  <button type='submit' name='home' class='btn'>Back to Home</button>
  </form>";
  $result->free();
?>
</body>
</html>
