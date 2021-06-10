<?php
$name = $_POST['aname'];
$pass = $_POST['apass'];
if(strcmp($name,'test')==0 && strcmp($pass,'t')==0){
	header('Refresh: 0;url=adminhome.php');
}else{
	header('Refresh: 0;url=adminlogin1.php');
}
?>
