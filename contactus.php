<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect Us</title>
    <link rel="stylesheet" href="contactus.css">
</head>
<style>
    body{
    margin:0px;
    padding:0px;
    background : url('images/contact1.jpg');   
    }
    h1{
        margin-top:0px;
        text-align:center; 
        font-size:110px;
        color: #9b1e11;
    }
    .container h2{
        text-align:center;
    }
    .container {
        border:2px solid #412121;
        margin: 95px 476px;
        padding: 59px 73px;
        border-radius: 10px;
        width: 35%;
        
    }
    .container input{
        display: block;
    width: 75%;
    margin: auto;
    text-align: center;
    }
    /* div.third{ */
        /* border: 2px solid red; */
        /* text-align:center; */
        /* margin:2px 2px; */
        /* padding 2px 2px; */
    /* } */

</style>
<body>
<h1>Contect US</h1>
    

    <div class="container">
    <form action="" method="post">
    <h2>Please Enter you Details We will contect you.</h2>
    <div class="first">
    <input type="text" name="Name"require placeholder="Enter your name please!"><br>
    <br>
    </div>
    <div class="second">
    <input type="email" name="Email" id="" require placeholder="Enter your Email Please!"><br><br>
    </div>
    <div class="third">
        <input type="submit" value="Submit now">
    </div>
    </form>
    </div>
</body>
</html>