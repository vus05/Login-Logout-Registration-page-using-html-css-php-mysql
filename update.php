<html>
<head>
    <link rel="stylesheet" href="style.css">
  
</head>

<body>
   
   
    <form method="POST", class="frm">
    <!--update start code-->
    
    <?php

include 'conn.php';
        
        $emailidss = $_GET['emailids'];
        $shoquery = "select * from students where emailid='{$emailidss}'";
        $showdata = mysqli_query($conn, $shoquery);
        $arrdata = mysqli_fetch_array($showdata);
        
      
        
    
   if(isset($_POST["submit"])){
       
/*     $emailidssUpdate = $_GET['emailids'];*/
       
       $fname=$_POST["fname"]; 
        $email= $_POST["email"];  
       $phone=$_POST["phone"]; 
       $password=$_POST["password"]; 
       $cpassword=$_POST["cpassword"];
       
       //blank field start line
       
  
       
         $query="update students set emailid='$email', fname='$fname', phonenumber='$phone',password='$password', cpassword='$cpassword' where emailid='$emailidss'";
        
        $result= mysqli_query($conn, $query);
           

       
   
   }
        else{
            
            echo 'no';
        }
       ?>
    
    
    
    <!--update last line code-->
    
    
    
    
    
    <h1>&nbsp;&nbsp;&nbsp;&nbsp; Registration Form</h1>
        FirstName &nbsp;&nbsp;&nbsp;&nbsp; <input type="text"  name="fname" placeholder="FirstName" value="<?php echo $arrdata['fname']; ?>" required><br><br>
    Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Provide valid email Address rahul@co.in" placeholder="FirstName" value="<?php echo $arrdata['emailid']; ?>" required><br><br>
    Contact No.&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="phone" pattern="[0-9]{10}" title="Ten digits Number" placeholder="Phone number" value="<?php echo $arrdata['phonenumber']; ?>"><br><br>
    Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="password" placeholder="password" value="<?php echo $arrdata['password']; ?>" required><br><br>
    ConPassword&nbsp;<input type="text" name="cpassword" placeholder="cpassword" value="<?php echo $arrdata['cpassword']; ?>"   required><br><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" name="submit"  value="update"><br>
   <a href="login.php" style="font-size:20px;"><b>Login</b></a>
    
</form>
   
    </body>
</html>

