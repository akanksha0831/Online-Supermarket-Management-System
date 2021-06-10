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
  right: 0;
  margin: 60px;
  font-size:200%;
  max-width: 350px;
  padding: 25px;
  
}
</style>
</head>
<body class="bg_img">
<div>
<form action="emplog.php" method="post" class="container" >
  <p><span style="color:red;">* Login Failed</span></p>
<h3>EMPLOYEE LOGIN</h3>
<label for="eid"><b>EmployeeId</b></label></br>
<input type="text" placeholder="Enter EmployeeId" name="eid" required>
<label for="epass"><b>Password</b></label></br>
<input type="password" placeholder="Enter Password" name="epass" required>
<button type="submit" value="Submit" class="btn">Login</button></br>
<button type="reset" value="Reset" class="btn">Reset</button><br>
</form>
</div>
</body>
<html>
