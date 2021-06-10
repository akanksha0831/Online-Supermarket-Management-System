<html>
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
    width: 15%;
    opacity: 0.9;
  }
  </style>
</head>
<body align="center" class="bg_img">
<?php
	session_start();
	$connect=new mysqli('localhost','root','','supermarket_database');
	if($connect->connect_error){
		echo("connection failed");
	}else
	{
		$id=$_SESSION["id"];
		$c=0;
		$sql1="select * from orders where username ='$id'"or die(mysql_error());
		$res=$connect->query($sql1);
	}
	if($res->num_rows>0){
			$sum1=0;
			$sum2=0;
	echo "<br><br><h1>"."YOUR ORDERS..."."</h1>";
		echo "<table border='1' align='center'>
	<tr>
	<th>Id</th>
	<th>name</th>
	<th>quantity</th>
	<th>cost</th>
	<th>ordered date</th>
	<th>option</th>

	</tr>";

	while($row=$res->fetch_assoc())
	 {
		// $a=$row['quantity']*$row['cost'];
		// $b=$row['quantity']*$row['cost']*((100-$row['discount'])*0.01);
		echo "<tr>";
		echo "<td>" . $row['itemid'] . "</td>";
		echo "<td>" . $row['username'] . "</td>";
		echo "<td>" . $row['quantity'] . "</td>";
		echo "<td>" . $row['cost'] . "</td>";
    echo "<td>" . $row['orderdate'] . "</td>";
		echo "<td>"."<a href='cancel.php?iid=$row[itemid]&q=$row[quantity]'><button>cancel order</button></a><br>"."</td>";
	//	echo "<td>"."<a href='details.php?iid=$row[itemid]&q1=$row[quantity]'><button>edit</button></a><br>"."</td>";
		echo "</tr>";
	}

echo "</table>";

		}
		else{

			echo '<script>alert("Oopps!You havent oredered anything!!");window.location="cushome.php";</script>';;
		}
	$connect->close();
?></body></html>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=cushome.php');
  }
  echo "<br><br><br><form method='post' action='cushome.php'>
  <button type='submit' name='home' class='btn'>Back to Home</button>
  </form>";
?>
