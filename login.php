
<?php
include "conn.php";
session_start();
error_reporting(0);
?>
<html>
<body class="loginbody">
<head>
        <link rel="stylesheet" href="style.css">
</head>
<form method="post" class="formlogin">
<h1>Login form</h1>
Email Address &nbsp;<input type="email" name="email" placeholder="Email Address" required><br><br>
Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="password" placeholder="Password" required><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit">
<a href="reg.php" style="font-size:20px;"><b>Register</b></a>
</form>
</body>
</html>
<?php

$email=$_POST["email"];
$password=$_POST["password"];
if(isset($_POST["submit"])){
    //Start email cheker it blank or not
  if($email!=0 && $password!=0){
      
    $sql="select * from students where emailid='$email' and password='$password'";
      
      $result=mysqli_query($conn, $sql);
      //now check the mail and password is exsit.
      if(mysqli_num_rows($result)>0){
          
          echo "loged in";
          
          //session start line
          //session start line
$row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["Username"] = $row['emailid'];
        $_SESSION["password"] = $row['password'];
        } else {
         $message = "Invalid Username or Password!";
        }
    
    if(isset($_SESSION["Username"]) && isset($_SESSION["password"])) {
    header("Location: home.php");
    }
//session end line code
          //session last line
          
          
          
      
      }
      else{
     //echo "Register first";
          echo '<script>';
          
          echo 'alert("Register first")';
       echo   '</script>';
    
      }
  
      
      
      
}
    
    
    
  //Last email cheker it blank or not    
    
    
}//1st if



?>



