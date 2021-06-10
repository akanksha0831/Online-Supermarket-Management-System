<?php
session_start();
if(isset($_POST['q']))
{
  $_SESSION['quantity']=$_POST["q"];
}
if(isset($_POST['submit']))
{
  header('Refresh: 0;url=viewitems.php');
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
<br><br><br><br><br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
enter quantity:<input type="number" name="q"><br><br>
<button type="submit" value="submit" name="submit" class="btn">Submit</button>
</form>
</body>
</html>
