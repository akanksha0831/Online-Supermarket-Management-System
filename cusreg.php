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
   $cname = $_POST['cname'];
   $cpass = $_POST['cpass'];
   $cemail = $_POST['cemail'];
   $cnumber =$_POST['cnumber'];
   if(isset($cemail)){
     $mysql_get_users = mysqli_query($con,"SELECT * FROM customer_db where emailId='$cemail'");
     $get_rows = mysqli_affected_rows($con);
     if($get_rows >=1)
     {
       header('Refresh: 0;url=cusreg.php');
       echo '<script language="javascript">';
       echo 'alert("customer id already exists")';
       echo '</script>';

       //echo "user exists";
       //exit();
     }
     else
     {
       if($cname !='' && $cpass!='' && $cemail!='' && $cnumber!='')
       {
         //Insert Query of SQL
         // Username available
           $query = "insert into customer_db values ('$cname','$cpass','$cnumber','$cemail')";
           if ($con->query($query) === TRUE) {
             $msg="Login created successfully";
           }
           else {
             echo "Error: " . $query . "<br>" . $con->error;
           }
           if(isset($msg)){ // Check if $msg is not empty
             echo '<script language="javascript">';
             echo 'alert("Registered successfully")';
             echo '</script>';
             echo "You will be redirected with in 5 seconds";
                   header('Refresh: 2;url=login.php');
                 }
               }
             }
           }
      }
   $con->close();
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
   input[type=text], input[type=password], input[type=tel], input[type=email] {
     width: 100%;
     padding: 15px;
     margin: 2px 0 22px 0;
     border: none;
     background: #f1f1f1;
   }

   input[type=text]:focus, input[type=password]:focus, input[type=tel]:focus, input[type=email]:focus {
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
   <div >

     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="container">
        <h3>Registration</h3>
       <label for="cname"><b>Username</b></label></br>
       <input type="text" placeholder="Enter Username" name="cname" required>
       <label for="cpass"><b>Password</b></label></br>
       <input type="password" placeholder="Enter Password" name="cpass" required>
       <label for="cnumber"><b>Phone Number</b></label></br>
       <input type="tel" placeholder="Enter Number" name="cnumber" required>
       <label for="cemail"><b>Email ID</b></label></br>
       <input type="email" placeholder="Enter Email ID" name="cemail" required>
       <button type="submit" name="submit" value="submit" class="btn">Register</button></br>
     </form>
   </div>
 </body>
</html>
