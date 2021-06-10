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
    margin-top : 30px;
    font-size:200%;
    max-width: 350px;
    padding: 25px;

  }
  </style>
</head>
<body class="bg_img" align="center">
<div class="container">
<h3>WELCOME EMPLOYEE<h3>
  <form action="http://localhost/supermarket_management_system/stockdet.php">
    <button type="submit" class="btn">Stock details</button>
  </form>
  <form action="http://localhost/supermarket_management_system/manageacc.php?">
    <button type="submit" class="btn">Manage Accounts</button>
  </form>
  <form action="http://localhost/supermarket_management_system/transaction.php">
    <button type="submit" class="btn">Transaction Details</button>
  </form>
  <form action="http://localhost/supermarket_management_system/logout.php">
    <button type="submit" class="btn">Logout</button>
  </form>
</div>
</body>
</html>
