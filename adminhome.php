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
    width: 100%;
    opacity: 0.9;
  }
  </style>
</head>
<body class="bg_img">
<div class="container">
<h3>WELCOME<h3>
  <form action="http://localhost/supermarket_management_system/addemp.php">
    <button type="submit" class="btn">Add Employee</button>
  </form>
  <form action="http://localhost/supermarket_management_system/additem.php">
    <button type="submit" class="btn">Add Item</button>
  </form>
  <form action="http://localhost/supermarket_management_system/edititeminfo.php">
    <button type="submit" class="btn">Edit Item Info</button>
  </form>
  <form action="http://localhost/supermarket_management_system/transaction1.php">
    <button type="submit" class="btn">View Transaction</button>
  </form>
  <form action="http://localhost/supermarket_management_system/empinfo.php">
    <button type="submit" class="btn">View Employee Info</button>
  </form>
  <form action="http://localhost/supermarket_management_system/cusinfo.php">
    <button type="submit" class="btn">View Customer Info</button>
  </form>
  <form action="http://localhost/supermarket_management_system/logout.php">
    <button type="submit" class="btn">Logout</button>
  </form>
</div>
</body>
</html>
