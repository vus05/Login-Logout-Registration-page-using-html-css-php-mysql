<?php

$servername="localhost";
$username="root";
$password="";
$database="kb";


$conn= new mysqli($servername,$username,$password,$database);

if($conn->connect_error){

echo "connection faild";
    
}

else{
//echo "connection done";
}


?>




