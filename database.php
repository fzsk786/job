<?php
 $server= "localhost:3308";
 $username= "root";
 $password= "";
 $dbname="job";

 $conn=mysqli_connect($server,$username,$password,$dbname);
 if(!$conn)
 {
    die("connection to this database failed due to" . 
    mysqli_connect_error());
 }
 ?>