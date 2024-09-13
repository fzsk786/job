
<?php
if(isset($_POST['code']))
{
    

 $server= "localhost:3308";
 $username= "root";
 $password= "";

 $con=mysqli_connect($server,$username,$password);
 if(!$con)
 {
    die("connection to this database failed due to" . 
    mysqli_connect_error());
 }
 $code=$_POST['code'];
    $result=mysqli_query($con,"SELECT * FROM `job`.`sub` WHERE ofid=$code");


 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFFERS</title>
    <style>
      .form{
         background: linear-gradient(to top, rgb(247, 245, 245)90%,rgba(121, 118, 116, 0.8)10%);
	max-width: 100%;
	min-height: 230px;
	display: flex;
	
	align-items: flex-start;
	 
    font-style: roboto;
    color:black;
}
.left{
	flex-basis: 90%;
    
    

}
.right{
	flex-basis: 30%;
	padding-top: 70px;
}

.right .btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}


.role
{
    font-size: 30px;
    font-style: italic;
    

}
.comp,.city,.address{
    margin-bottom: 0.5px;
    margin-top: 0.5px;
    font-size: 20px;
}
.type,.exp,.pout{
   
    margin-bottom: 0.5px;
    margin-top: 0.5px;
    font-size: 20px;
}
.code
{
    font-size:20px;
    
}








   
 
  
  
      </style>
 </head>
 <body>
    <?php
    if(mysqli_num_rows($result)>0)
    {
        ?>
     
        
    <?php
    $i=0;
    while($row=mysqli_fetch_array($result))
    {
        ?>
        <div class="form">
         <div class="left">
            
            <p class="role"><?php echo "first-name :",$row["fname"]; ?></p><br>
             
            <p class="comp"><?php echo "last name::",$row["lname"]; ?></p><br>
            <p class="address"><?php echo "email id:",$row["email"]; ?></p><br>
            <p class="city"><?php echo "passed-out:",$row["pass"]; ?></p><br>
            <p class="type"><?php echo "city:",$row["city"]; ?></p>
          </div>
    <div class="right">
           
            
            
          

           
<a href="download.php?file=<?php echo rawurlencode(trim($row["file_name"])); ?>" style="display: inline-block; padding: 10px 20px; background-color: #ff0000; color: #fff; text-decoration: none; border-radius: 5px; font-size: 16px;">DOWNLOAD CV</a>




    </div>
            
    </div>
    
    <?php
    $i++;
    }
    ?>

    <?php
    }
    else
    {
        echo "no one grab the opperunity";
    }
    ?>
    </body>
    </html>
   <?php
}
?>


    
                

    
 