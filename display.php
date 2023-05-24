<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        table, tr, td, th{
        border: 2px solid red;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
   <table>
<tr>
    <td>Serial No.</td>
    <td>firstName</td>
    <td>email</td>
    <td>phoneNumber</td>
    <td>password</td>
    <td>cpassword</td>
    <td>delete</td>
    <td>update</td>
</tr>  

<?php
include 'conn.php';
$sql="select * from students";
$queryExecution=mysqli_query($conn,$sql);
while($res=mysqli_fetch_array($queryExecution)){
?>
    <tr>
    <td><?php echo $res['sr']; ?></td>
    <td><?php echo $res['fname']; ?></td>
    <td><?php echo $res['emailid']; ?></td>
    <td><?php echo $res['phonenumber']; ?></td>
    <td><?php echo $res ['password']; ?></td>
    <td><?php echo $res['cpassword']; ?></td>
  
        <td><a href="update.php?emailids=<?php echo $res['emailid']; ?>">update</a></td>
   <td><a href="delete.php?emailidss=<?php echo $res['emailid']; ?>">delete</a></td> 
</tr>
 <?php   
    
/*    $i++;*/
}
?>
     
   </table>
   
    
</body>
</html>