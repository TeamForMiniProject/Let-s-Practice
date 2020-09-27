<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/adminlogin.css">
</head>
<style>
    body{
    margin:0px;
    padding:0px;
    background : url('images/adminback01.jpg'); 
}
h2{
    text-align:center;
    color:white;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    
    margin-left: -125px;
}
label{
    display:block;
    text-align:center; 
    line-height: 7%;
    font-size: .85em;
     margin-left:-313px;
     font-size:18px;
     color:white;
}
.input-user{
    text-align:center;
   
    
}
.input100{
    text-align:center;
    border-radius: 18px;
    width: 408px;
    height: 32px;
}
.input-btn{
    text-align:center;
}
.btn100{
    border-radius: 34px;
    width: 209px;
    height: 40px;
}
.btn100:hover{
    background-color:brown;
}
.check1{
    color:white;
    font-size: 20px;
}
.check{
    color:white;
}
</style>
<body>
    <?php
    require_once("header.php");
    ?>
<form action="register.php" name="f1" method="POST">
<br><br><br>

<h2>Register with your Details :</h2>
<br>
<label for="username">User Name</label><br>
<div class="input-user" data-validate="Username">
          <input class="input100" type="text" name="username" class="form-control" placeholder="Enter your Username" required><br>
          <span class="focus-input100"></span>
</div>
<br>  
<label for="username"> Full Name</label><br>
<div class="input-user" data-validate="Username">
          <input class="input100" type="text" name="name" class="form-control" placeholder="Enter your name" required><br>
          <span class="focus-input100"></span>
</div>
<br>
<label for="username">Mobile</label><br>
<div class="input-user" data-validate="Username">
          <input class="input100" type="number" name="mobile" class="form-control" placeholder="Enter your Mobile number" required><br>
          <span class="focus-input100"></span>
</div>
<br>
<label for="password">Password</label><br>

<div class="input-user" data-validate="Password">
          <input class="input100" type="password" class="form-control"  name="password" placeholder="Enter Password" required><br>
          <span class="focus-input100"></span>
</div>
<br>
<div class="input-user">
<span class="check1">I'm A :</span>
<input type="radio" name="usertype" value="student" class="custom-radio" requireed>&nbsp; <span class="check"> Student |</span>
<input type="radio" name="usertype" value="teacher" class="custom-radio" requireed>&nbsp; <span class="check">teacher </span>

</div>


<br>
<div class="input-btn">
          <button class="btn100" type="submit" name="submit1">
            Register Now
          </button>
        </div>
        
</div>

</form>
</body>
</html>
<?php
if(isset($_POST["submit1"])){
    echo "testing";
}

?>
<?php
include('connection.php');
if(isset($_POST['submit1'])){
    $username = $_POST['username'];
    $qry="SELECT * FROM `registration` WHERE `username`='$username'";
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    if($row >0){
        ?>
        <script>
        alert('Username Already exits');
        window.open('register.php','_self');
        </script>
    <?php
    }
    else{
        $username = $_POST['username'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $usertype =$_POST['usertype'];
        $password = $_POST['password'];
        $query = "INSERT INTO `registration`(`username`, `name`, `mobile`, `password`, `usertype`) VALUES ('$username','$name','$mobile','$password','$usertype')";
        $run = mysqli_query($con,$query);
        ?>
        <script>
        alert('Registration Successful');
        window.open('register.php','_self');
        </script>
        <?php
    }

}
?>
<?php

require_once("footer.php");
?>
