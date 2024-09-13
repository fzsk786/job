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
if(isset($_POST['upload']))
{
    $file=rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_type=$_FILES['file']['type'];
    $folder="upload/";

    $new_size=$file_size/1024;

    $new_file_name=strtolower($file);

    $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $sql="INSERT INTO `sap` (`file_name`, `type`, `size`) VALUES ('$final_file', '$file_type', '$new_size');";
        mysqli_query($conn,$sql);

        echo "<h4 style='color:green;'>FILE succesfully upload!!</h4>";
    }

}
else
{
    echo "error.please try agin";
}
?>