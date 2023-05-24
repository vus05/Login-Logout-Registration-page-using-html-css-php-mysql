<?php

include 'conn.php';


?>



<html>
<head>
    <link rel="stylesheet" href="style.css">
  
</head>

<body class="regg">
   
   
    <form method="POST", class="frm">
    <h1>&nbsp;&nbsp;&nbsp;&nbsp; Registration Form</h1>
        FirstName &nbsp;&nbsp;&nbsp;&nbsp; <input type="text"  name="fname" placeholder="FirstName" required><br><br>
    Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Provide valid email Address rahul@co.in" placeholder="FirstName" required><br><br>
    Contact No.&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="phone" pattern="[0-9]{10}" title="Ten digits Number" placeholder="Phone number"><br><br>
    Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="password" placeholder="password" required><br><br>
    ConPassword&nbsp;<input type="text" name="cpassword" placeholder="cpassword" required><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" name="submit" ><br>
   <a href="login.php" style="font-size:20px;"><b>Login</b></a>
    
</form>
   
    </body>
</html>

<?php
    
   if(isset($_POST["submit"])){
       
       $fname=$_POST["fname"]; 
        $email= $_POST["email"];  
       $phone=$_POST["phone"]; 
       $password=$_POST["password"]; 
       $cpassword=$_POST["cpassword"];
       
       //blank field start line
       
       if ($email != '' && $password != '' && $cpassword != ''){
              // blank field last line
      
       
       
       //password valiadation
       if($password===$_POST["cpassword"]){
     
           //echo "password matched successfully";
/*                          echo '<script>';
echo 'alert("password matched successfully");';
echo '</script>';*/

           
           
           //email validation start
           
 
        $email_Query="select * from students where emailid='$email'";
         
           $result_Email_Query=mysqli_query($conn, $email_Query);
           
           if(mysqli_num_rows($result_Email_Query)>0){
           
           //echo "emailId already exists";
               
               echo '<script>';
echo 'alert("emailId already exists");';
echo '</script>';

               

            }
           else{
               //echo "emailId not exists ";

               
               //inserted data in table
               
             $sql="insert into students(fname,emailid,phonenumber,password,cpassword) values('$fname','$email','$phone','$password','$cpassword')";
           
        $result= mysqli_query($conn, $sql);
           
           if($result){
               //echo "data inserted successfully";
           
               
               
echo '<script>';
echo 'alert("data inserted successfully");';
echo '</script>';

               
               
               
           }
           else{
               
               echo "data not inserted";
           }
               //last line of inserted data 
             }

           //last line of email validation

           //data insert query
           
           }
       
       else{
           echo '<script>';
echo 'alert("password not matched");';
echo '</script>';
       } 
       }
       else{
        echo   "enter the value";
       }
       
       
       
       
   
   }
       ?>