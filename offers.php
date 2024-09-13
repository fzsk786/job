<?php
 $server= "localhost:3308";
 $username= "root";
 $password= "";

 $con=mysqli_connect($server,$username,$password);
 if(!$con)
 {
    die("connection to this database failed due to" . 
    mysqli_connect_error());
 }
    $result=mysqli_query($con,"SELECT * FROM `job`.`post`");
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFFERS</title>
    <style>
      .form{
	background: linear-gradient(to top, rgb(234, 224, 224)90%,rgba(232, 75, 75, 0.8)10%);
	max-width: 100%;
	min-height: 230px;
	display: flex;
	
	align-items: flex-start;
	 
    font-style: roboto;
    color:brown;
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
    font-size: 50px;
    padding-top: 1px;

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
            
            <p class="role"><?php echo $row["role"]; ?></p><br>
            <p class="comp"><?php echo "company:",$row["name"]; ?></p><br>
            <p class="address"><?php echo "address:",$row["address"]; ?></p><br>
            <p class="city"><?php echo "city:",$row["city"]; ?></p><br>
          </div>
    <div class="right">
            <p class="type"><?php echo "work-type:",$row["type"]; ?></p>
            <p class="exp"> <?php echo "experence:",$row["exp"],"years"; ?></p><br>
            <p class="pout"><?php echo "passed-out:",$row["over"]; ?></p><br>
            <p class="code" ><?php echo "OFFER ID:",$row["pass"]; ?></p><br>
            <a href="apply.php" style="display: inline-block; padding: 10px 20px; background-color: #ff0000; color: #fff; text-decoration: none; border-radius: 5px; font-size: 16px;">APPLY</a>
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
        echo "no offers avalible";
    }
    ?>
    </body>
    </html>


    
                

    
 