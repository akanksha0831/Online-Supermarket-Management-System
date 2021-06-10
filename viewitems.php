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
  .container {
    position: absolute;
    left: 0;
    margin-left: 500px;
    margin-top : 30px;
    font-size:200%;
    max-width: 350px;
    padding: 25px;

  }
  .btn {
    background-color: orange;
    color: white;
    padding: 10px 10px;
    border-radius:8px;
    width: 25%;
    opacity: 0.9;
  }
  </style>
</head>
<body align="center" class="bg_img">
  <div >
<?php
$servername = "localhost";
$username = "root";
$password = "";
session_start();
	$connect = new mysqli("localhost", $username, $password, 'supermarket_database');
	if($connect->connect_error){
		echo("connection failed");
	}else
	{

		$c=0;
		$query = "SELECT * FROM item_db" or die(mysql_error());
		$result=$connect->query($query);
	}


echo '<br><br><br><h3 style="color:Blue;font-size:200%"><b>Items available in the supermarket</b></h3><br>';
echo '<table align="center" border="2" cellspacing="2" cellpadding="2">
      <tr>
          <td> <font face="Arial" color="red"><b>Item Id</b></font> </td>
          <td> <font face="Arial" color="red"><b>Name</b></font> </td>
          <td> <font face="Arial" color="red"><b>Cost</b></font> </td>
          <td> <font face="Arial" color="red"><b>Description</b></font> </td>
          <td> <font face="Arial" color="red"><b>Discount</b></font> </td>
          <td> <font face="Arial" color="red"><b>Quantity Available</b></font> </td>
          <td> <font face="Arial" color="red"><b>Quantity required</b></font> </td>
          <td> </td>
      </tr>';

if ($result = $connect->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["itemId"];
        $field2name = $row["name"];
        $field3name = $row["cost"];
        $field4name = $row["description"];
        $field5name = $row["discount"];
        $field6name = $row["quantity"];

      //  $field7name = $_POST['q'];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'."<a href='quant.php'><button>quantity</button></a><br>".'</td>
                  <td>'."<a href='addtocart.php?subject=$field1name'><button>add to cart</button></a><br>".'</td>
              </tr>';
    }
    echo "</table>";
    echo "<br><br>";

}
?>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=cushome.php');
  }
  echo "<form method='post' action='cushome.php'>
  <button type='submit' name='home' class='btn'>Back to Home</button>
  </form>";
  $result->free();
?>

</div>
</body>
</html>
