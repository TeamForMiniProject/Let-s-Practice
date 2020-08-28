<?php
if(isset($_POST["Admin"]))
{
    header('Location:adminlogin.php');
}
else if(isset($_POST["Student"])){
    header('Location:Studentlogin.php');
}
else if(isset($_POST["contact"])){
    header('Location:contactus.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Quiz Application</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<style>
    body{
    color:white;
    margin:0px;
    padding:0px;
    background : url('images/bg1.jpg');   
}
</style>
<body>
    <header class="header">
        <div class="left">
        <img src="images/Quiz-logo.jpg" alt="Quiz">
        </div>
        <div class="mid">
        <ul class="navbar">
        <li> <a href="<?php echo 'index.php'; ?>" >Home</a> </li>
        <li> <a href="">About Us</a> </li>
        <li> <a href="">Quiz Start</a> </li>
        <li> <a href="<?php echo 'contactus.php'; ?>">Contect us</a> </li>
        
        </ul>
        </div>
        <div class="right">
            <form action="" method="post">
            <input class="btn"type="submit" name="Admin"value="Admin Login">
            <input class="btn"type="submit" name="Student"value="Student Login">
            <input class="btn"type="submit" name="Admin2"value="Register Now">
            </form>
        </div>
    </header>
    <h1>Welcome To My Quiz </h1>
   

    
</body>
</html>