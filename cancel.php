<?php
session_start();
$connect=new mysqli('localhost','root','','supermarket_database');
if($connect->connect_error){
  echo("connection failed");
}else
{
  $id=$_SESSION['id'];
  $iid=$_GET['iid'];
  $quant=$_GET['q'];
  $sql1="delete from orders where username='$id' and itemid='$iid'";
  $res=$connect->query($sql1);
  $sql="update item_db set quantity=quantity+$quant where itemid='$iid'";
  $res=$connect->query($sql);
  if ($res) {
    echo '<script language="javascript">';
    echo 'alert("item cancelled successfully")';
    echo '</script>';
    header('Refresh: 1;url=orders.php');
  } else {
      echo "Error cancelling order: " . mysqli_error($connect);
  }
  $connect->close();
}
?>
