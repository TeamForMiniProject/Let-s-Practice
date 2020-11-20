<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Login Page</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/adminlogin.css">
</head>
<style>
    body{
    margin:0px;
    padding:0px;
    background-image: url('images/adminback01.jpg');
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
.check{
    color:white;
}
.check1{
    color:white;
    font-size:20px;
}
</style>
<body>
    <?php
    require_once("header.php");
    ?>
<form action="Studentsignin.php" name="f1" method="POST">
<br><br><br>

<h2> Student Login Here :</h2>
<br><br><br><br>


<label for="username">Email-ID</label><br><br>
<div class="input-user" data-validate="Username">
          <input class="input100" type="email" name="email" class="form-control" placeholder="Enter Email Id" required><br>
          <span class="focus-input100"></span>
</div>
<br><br>   
<label for="password">Password</label><br><br>

<div class="input-user" data-validate="Password">
          <input class="input100" type="password" class="form-control"  name="password" placeholder="Enter Password" required><br>
          <span class="focus-input100"></span>
</div>
<br>
<br><br>
<div class="input-btn">
          <button class="btn100" type="submit" name="login">
            Sign In
          </button>
        </div>
</form>
</body>
</html>

<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}

include_once 'dbConnection.php';
if(isset($_POST['login'])){
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];

$password=md5($password); 
$result = mysqli_query($con,"SELECT name FROM user WHERE email = '$email' and password = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
header("location:account.php?q=1");
}
else
header("location:$ref?w=Wrong Username or Password");
}
?>

<?php
require_once("footer.php");
?>
