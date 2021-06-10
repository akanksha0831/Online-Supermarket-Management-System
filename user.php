  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $mysqli = new mysqli("localhost", $username, $password, 'supermarket_database');
  session_start();
  $cid=$_SESSION["id"];
  $query = "SELECT * FROM cart where username='$cid'";

  echo '<br><br><br><h3 align="center">Details of Customer</h3><br>';
  echo '<table align="center" border="1" cellspacing="2" cellpadding="2">
        <tr>
            <td> <font face="Arial">itemid</font> </td>
            <td> <font face="Arial">itemname</font> </td>
            <td> <font face="Arial">quantity</font> </td>
            <td> <font face="Arial">orderdate</font> </td>
        </tr>';

  if ($result = $mysqli->query($query)) {
      while ($row = $result->fetch_assoc()) {
          $field1name = $row["itemid"];
          $field2name = $row["itemname"];
          $field3name = $row["quantity"];
          $field4name = $row["orderdate"];
          echo '<tr>
                    <td>'.$field1name.'</td>
                    <td>'.$field2name.'</td>
                    <td>'.$field3name.'</td>
                    <td>'.$field4name.'</td>
                </tr>';
      }
      echo "</table>";
      echo "<br><br>";
  }
  ?>
  <?php
  if(isset($_POST['home'])){
      header('Refresh: 0;url=transaction.php');
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
      margin-left: 600px;
      margin-top: 20px;
      font-size:200%;
      max-width: 400px;
      padding: 35px;

    }
    </style>
  </head>
  <body align="center" class="bg_img">
    <div class="container">
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <button type="submit" name="home" class="btn">Back</button>
  </form>
</div>
</body>
  </html>
