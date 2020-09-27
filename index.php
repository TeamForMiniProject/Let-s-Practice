<!-- <?php
// session_start();
// if(isset($_SESSION['un'])){
//    header("Location:index.php");
// }
?> -->
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
<?php
    require_once("header.php"); 
?>   
    <h1>Welcome To My Quiz </h1> 
</body>
</html>

<?php

require_once("footer.php");
?>