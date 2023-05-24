<?php

        include 'conn.php';
    
     $emaili = $_GET['emailidss'];
     $sqlmem =" DELETE FROM students WHERE emailid='{$emaili}'";
     $query = mysqli_query($conn, $sqlmem);
    if($query){

        echo "data deleted successfully";     
    }
else{
    
    echo "data not deleted ";
}


?>




