
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect Us</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="css/index.css">
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
    margin-left: 56px;
}
label{
    display:block;
    text-align:center; */
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
</style>
<body>
    <?php
    require_once("header.php");
    ?>
    <div class="container">
    <form action="process.php" name="f1" method="POST">
<br><br><br>

<h2>Please Enter your Details! We will contect you..</h2>
<br><br><br><br>
<label for="username">Name</label><br><br>
<div class="input-user" data-validate="Username">
          <input class="input100" type="text" name="un" class="form-control" placeholder="Enter your name please!" required><br>
          <span class="focus-input100"></span>
</div>
<br><br>   
<label for="password">Email</label><br><br>

<div class="input-user" data-validate="Password">
          <input class="input100" type="email" class="form-control"  name="ps" placeholder="Enter your email please!" required><br>
          <span class="focus-input100"></span>
</div>

<br><br>
<div class="input-btn">
          <button class="btn100" type="submit">
            Submit Now
          </button>
        </div>
  

</form>
    </div>
</body>
</html>
<?php

require_once("footer.php");
?>