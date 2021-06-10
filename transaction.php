<?php
$servername = "localhost";
$username = "root";
$password = "";
$mysqli = new mysqli("localhost", $username, $password, 'supermarket_database');
session_start();
if(isset($_POST['submit1']))
{
  $cid = $_POST['cid'];
  $_SESSION["id"]=$cid;
  header('Refresh: 0;url=user.php');
}
else if(isset($_POST['submit2']))
{
  $itemid = $_POST['itemid'];
  $_SESSION["id"]=$itemid;
  header('Refresh: 0;url=item.php');
}
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
    margin-top: 20px;
    font-size:200%;
    max-width: 350px;
    padding: 25px;

  }
  </style>
</head>
<body  class="bg_img" align="center">
  <div class="container">
  <center>

    <h2></h2><br><br>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

    <label for="cid"><b>Enter Username</b></label>
    <input type="text" name="cid">
    <a href='user.php'><button type="submit" value="submit" name="submit1" class="btn">Go</button></a><br>


    <label><b>or</b><label><br>

    <label for="itemid"><b>Enter Item Id</b></label>
    <input type="text" name="itemid"><br>
    <a href='item.php'><button type="submit" value="submit" name="submit2" class="btn">Go</button></a><br><br>

 </form>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
      <button type="submit" name="home" class="btn">Back</button>
    </form>
  </div>
</body>
</html>
