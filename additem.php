<?php
$servername = 'localhost';
$username = 'root';
$password = '';
// Check connection
$con = mysqli_connect($servername,$username,$password,'supermarket_database');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error());
}
$db = mysqli_select_db($con,'supermarket_database');
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
  $itemId = $_POST['itemId'];
  $name = $_POST['name'];
  $quantity = $_POST['quantity'];
  $cost = $_POST['cost'];
  $description = $_POST['description'];
  $discount = $_POST['discount'];
  $req = 'no';
  if(isset($itemId)){
    $mysql_get_users = mysqli_query($con,"SELECT * FROM item_db where itemId='$itemId'");
    $get_rows = mysqli_affected_rows($con);
    if($get_rows >=1)
    {
      header('Refresh: 0;url=adminhome.php');
      echo '<script language="javascript">';
      echo 'alert("item id already exists")';
      echo '</script>';
    }
    else
    {
      if($itemId!='' && $name !='' && $quantity!='' && $cost!='' && $description!='' && $discount!='')
      {
        //Insert Query of SQL
        // Username available
          $query = "insert into item_db values ('$itemId','$name','$quantity','$cost','$description','$discount','$req')";
          if ($con->query($query) === TRUE) {
            $msg="item inserted successfully";
          }
          else {
            echo "Error: " . $query . "<br>" . $con->error;
          }
          if(isset($msg)){ // Check if $msg is not empty
            echo '<script language="javascript">';
            echo 'alert("Successfully added an item")';
            echo '</script>';
                }
              }
            }
          }
        }
  $con->close();
 ?>
<?php
if(isset($_POST['home'])){
    header('Refresh: 0;url=adminhome.php');
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
    width: 10%;
    opacity: 0.9;
  }
  </style>
</head>
<body align="center"  class="bg_img">
  <center>
    <br><br>
    <h2>Adding an Item</h2><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="itemId"><b>ItemId</b></label>
    <input type="text" name="itemId" required><br><br>

    <label for="name"><b>Name</b></label>
    <input type="text" name="name" required><br><br>

    <label for="quantity"><b>Quantity</b></label>
    <input type="number" name="quantity" required><br><br>

    <label for="cost"><b>Cost</b></label>
    <input type="number" name="cost" required><br><br>

    <label for="description"><b>Description</b></label>
    <input type="text" name="description" required><br><br>

    <label for="discount"><b>Discount</b></label>
    <input type="number" name="discount" required><br><br>

    <button type="submit" value="submit" name="submit" class="btn">Submit</button>
    <button type="reset" value="Reset" class="btn">Reset</button><br><br>

  </form>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <button type="submit" name="home" class="btn">Back to Home</button>
  <form>
  </center>
</body>
</html>
