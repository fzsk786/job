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

    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $email=$_POST['email'];
    $role=$_POST['job_role'];
    $city=$_POST['city'];
    $code=$_POST['pincode'];
    

    if(move_uploaded_file($file_loc,$folder.$final_file))
    {
        $sql="INSERT INTO `sub` (`fname`, `lname`, `email`, `pass`, `city`, `ofid`, `file_name`, `type`, `size`) VALUES ('$fname', '$lname', '$email', '$role', '$city', '$code', ' $final_file', '$file_type', '$new_size');";
        mysqli_query($conn,$sql);

        echo "<h4 .</h4>";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Application Form</title>
    <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  body {
    background-color: #ccc;
  }
  .container {
    max-width: 900px;
    margin: 0 auto;
  }
  
  .apply_box {
    max-width: 600px;
    padding: 20px;
    background-color: white;
    margin: 0 auto;
    margin-top: 50px;
    box-shadow: 4px 3px 5px rgba(1, 1, 1, 0.1);
    border-radius: 10px;
  }
  
  .title_small {
    font-size: 20px;
  }
  
  .form_container {
    margin-top: 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
  }
  .form_control {
    display: flex;
    flex-direction: column;
  }
  
  label {
    font-size: 15px;
    margin-bottom: 5px;
  }
  
  input,
  select,
  textarea {
    padding: 6px 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
  }
  
  input:focus {
    outline-color: red;
  }
  
  .button_container {
    display: flex;
  
    justify-content: flex-end;
    margin-top: 20px;
  }
  button {
    background-color: red;
    border: transparent solid 2px;
    padding: 5px 10px;
    color: white;
    border-radius: 8px;
    transition: 0.3s ease-in;
  }
  button:hover {
    background-color: #ccc;
    border: 2px solid red;
    color: black;
    transition: 0.3s ease-out;
    cursor: pointer;
  }
  .textarea_control {
    grid-column: 1 / span 2;
  }
  .textarea_control textarea {
    width: 100%;
  }
  
  @media (max-width: 460px) {
    .textarea_control {
      grid-column: 1 / span 1;
    }
  } ;
      </style>
  </head>
  <body>
    <div class="container">
      <div class="apply_box">
        <h1>
          Job Application
          
        </h1>
        <form action="apply.php" method="post" enctype="multipart/form-data">
          <div class="form_container">
            <div class="form_control">
              <label for="first_name"> First Name </label>
              <input
                id="first_name"
                name="first_name"
                placeholder="Enter First Name..."
              />
            </div>
            <div class="form_control">
              <label for="last_name"> Last Name </label>
              <input
                id="last_name"
                name="last_name"
                placeholder="Enter Last Name..."
              />
            </div>
            <div class="form_control">
              <label for="email"> Email </label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter Email..."
              />
            </div>
            <div class="form_control">
              <label for="job_role"> passed-out </label>
              <select id="job_role" name="job_role">
                <option value="">passed-out</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
              </select>
            </div>
           
            <div class="form_control">
              <label for="city"> City </label>
              <input id="city" name="city" placeholder="Enter City Name..." />
            </div>
            <div class="form_control">
              <label for="pincode"> OFFER ID</label>
              <input
                type="number"
                id="pincode"
                name="pincode"
                placeholder="Enter OFFER ID"
              />
            </div>
          
            <div class="form_control">
              <label for="upload"> Upload Your CV </label>
              <input type="file" name="file" />
            </div>
          </div>
          <div class="button_container">
          <button type="submit"  name="upload">upload</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
