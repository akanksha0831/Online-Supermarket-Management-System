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
	<br><br><br><br>
  <div>
  <h1>WELCOME TO ONLINE SUPERMARKET<h1>
    <form action="http://localhost/supermarket_management_system/adminlogin.php">
      <button type="submit" class='btn'>Admin Login</button>
    </form>

    <form action="http://localhost/supermarket_management_system/emplogin.php">
      <button type="submit" class='btn'>Employee Login</button>
    </form>

    <form action="http://localhost/supermarket_management_system/login.php">
      <button type="submit" class='btn'>Customer Login</button>
    </form>
</div>
</body>
</html>
