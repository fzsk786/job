<?php
if(isset($_POST['email']))
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
 $email=$_POST['email'];
 $password=$_POST['password'];
 $type=$_POST['type'];

 $sql="INSERT INTO `job`.`reg`  (`email`, `password`, `type`) VALUES ('$email', '$password', '$type');";

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap');
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none;
}

body {
    background: url('BG5.jpg') no-repeat;
    background-position: center;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Roboto', sans-serif;
}

.container {
    background-color: transparent;
    backdrop-filter: blur(30px);
    border: 2px solid rgba(0, 0, 0, .2);
    width: 450px;
    padding: 40px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: auto;
    align-items: center;
    border-radius: 20px;
}

.container h1 {
    margin: 10px 0;
}

.input {
    width: 100%;
}

.input input {
    padding: 1rem;
    width: 100%;
    margin: 5px;
    border: 2px solid rgba(0, 0, 0, .2);
    border-radius: 20px;
    font-size: 20px;
    background-color: transparent;
    color: black;
}
.input {
    margin-bottom: 15px;
  }
  
select option{
    width: 100%; /* You can adjust the width value as needed */
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.login-btn {
    padding: 1rem;
    width: 100%;
    border-radius: 20px;
    border: 2px solid rgba(0, 0, 0, .2);
    font-size: 20px;
    font-weight: 600;
    margin-top: 30px;
    background-color: transparent;
    color: black;
}

.help {
    width: 100%;
    margin: 20px 0;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}

#rmbr-me {
    font-size: 20px;
    margin-left: 10px;
    color: black;
}

.help a {
    font-size: 20px;
    color: black;
}

.register {
    color: black;
    font-size: 22px;
    margin: 20px 0;
    text-decoration: underline;
}


            .style-sel {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    margin-top:15px ;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: transparent;


  }
        </style>
    <title>sign-up-D/b</title>
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="reg.php" method="post">
        <div class="input">
            <input type="email" name="email" id="email" placeholder="Email adress or phone number" required>
        </div>
        <div class="input">
            <input type="password" name="password" id="password" placeholder="Password" required>
        </div>
        <h5>ENTER YOUR ROLE<h5>
        
        <select class="style-sel" name="type"  id="type" >
                            
                            <option value="EMPLOYER"  >EMPLOYER</option>
                            <option value="RECRUTOR"  >RECRUTOR</option>
                            
                        </select>

        
        <div class="input">
            <button class="login-btn">submit</button>
        </div>
        <form>
        <div class="help">
            <div>
                <input type="checkbox" id="remember-me"><label id="rmbr-me" for="remember-me">Remeber me</label>
            </div>
            <a href="#" class="forgot-pass">Forgot Password?</a>
       
</body>

</html>
