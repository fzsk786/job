<?php
if(isset($_POST['pass']))
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
 $role=$_POST['role'];
 $name=$_POST['name'];
 $address=$_POST['address'];
 $city=$_POST['city'];
 $type=$_POST['type'];
 $exp=$_POST['exp'];
 $pass=$_POST['pass'];
 $over=$_POST['over'];

 $sql="INSERT INTO `job`.`post` (`role`, `name`, `address`, `city`, `type`, `exp`, `pass`, `over`) VALUES ('$role', '$name', ' $address', '$city', '$type', ' $exp', ' $pass', ' $over');";

 if($con->query($sql)==true)
 {
    echo ".";
 }
 else
 {
     echo "ERROR: $sql <br> $con->error";
 }
 $con->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Payment getway form design in Hindi</title>
	<style>
		*{padding:0; margin:0; box-sizing: border-box; font-family:sans-serif;}
header{
	width: 100vw;
	min-height: 100vh;
	background: #34495e;
	font-size: 1.2rem;
	display: flex;
	justify-content: center;
	align-items: center;
}
.container{
	background: white;
	max-width: 800px;
	min-height: 500px;
	display: flex;
	justify-content:space-between;
	align-items: flex-start;
	padding: 0.5rem 1.5rem;
}
.left{
	flex-basis: 50%;
}
.right{
	flex-basis: 50%;
	padding-top: 100px;
}
.right zip{
	
	justify-content: flex-end;
	align-items: flex-end;
	padding-top: 100%;
}
form{
	padding: 1rem;
}

h3{
	margin-top: 1rem;
	color:#2c3e50;
	}

form input{
	width: 100%;
	padding: 0.5rem 0.7rem;
	margin: 0.5rem 0;
	outline: none;
}

#zip{
	display: flex;
	margin-top: 0.5rem;
}
#zip select{
	padding: 0.5rem 0.7rem;
}
#zip input[type="number"]{
	padding: 0.5rem 0.7rem;
	margin-left: 5px;	
}
input[type="submit"]{
	width: 100%;
	padding: 0.7rem 1.5rem;
	background: #34495e;
	color: white;
	border: none;
	outline: none;
	margin-top: 1rem;
	cursor: pointer;
}

input[type="submit"]:hover{
	background: #2c3e50;
}
#right input
{
	width: 100%;
	padding: 0.5rem 0.7rem;
	margin: 0.5rem 0;
	outline: none;

}







		</style>
</head>
<body>
<header>
    

	<div class="container">
       

		<div class="left">
            <h3>POST A JOB</h3>
			<form action="post.php" method="post">
				JOB ROLE
				<input type="text" name="role" id="role" placeholder="Enter job role">
				COMPANY NAME
				<input type="text" name="name" id="name" placeholder="Enter company name">

				Address
				<input type="text" name="address" id="address" placeholder="Enter address">
				
				City
				<input type="text" name="city" id="city" placeholder="Enter City">
				<div id="zip">
					<label>
					
						job type
						<select id="type" name="type">
							
							<option value="REMOTE" >REMOTE</option>
							<option value="ON-SITE" >ON-SITE</option>
							
						</select>
					</label>
						<label>
						EXPIRENCE
						<input type="text" name="exp" id="exp" placeholder="enter employes expirence">
					</label>
				</div>
			
		</div>
		<div class="right">
			<img src="logo.png"  height="100" width="200" > 
			
          
        
			<p id="opp" class=" bg-danger"></p>
            

        
			<script>
		const hour = Math.floor(Math.random() * 1000000 );
		document.getElementById("opp").innerHTML=hour;
		document.getElementById("mybutton").onclick=function()
		{
		var myname=document.getElementById("cap").value;
	
		
		
		
		
		document.getElementById("demo").innerHTML = "hsjsjs";
			
		
		}
		
			
		</script>
		
	
			
          
           
				
				
				<p>enter the notification code</p>
			<input type="password" name="pass" id="pass" style= 'width:300px;height: 35px;' placeholder="Enter notification code" required>
				
				
			<div id="zip">
					<label>
						passed-out
						<select name="over" id="over">
							
                            <option>-2022</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
						</select>
					</label>
						
				</div>
				<input type="submit"  value="Post it!">
			</form>
			
		</div>
	</div>
</header>
</body>
</html>