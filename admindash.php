<?php

session_start();
if($_SESSION['fromMain'] == "false"){
    //send them back
    header("Location: adminlogin.php");
 }
 else{
    //reset the variable
    $_SESSION['fromMain'] = "false";
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("headerhome.php");
    ?>
</body>
</html>
<?php
require_once("footer.php");
?>