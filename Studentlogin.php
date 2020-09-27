<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="css/Studentlogin.css">
</head>
<style>
    body{
    margin:0px;
    padding:0px;
    /* background-color:powderblue; */
    background : url('images/adminback1.jpg');
}
</style>
<body>
    
    <div class="container">
        <h1>Please Enter your Details</h1>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="" id="" placeholder="Enter your Roll No">
            </div>
            <td> <b> Please! Choose std</b></td>
            <div class="form-group1">
                
                <select name="Std" id="">
                    
                    <option value="1">1st</option>
                    <option value="2">2nd</option>
                    <option value="3">3rd</option>
                    <option value="4">4th</option>
                    <option value="5">5th</option>
                    <option value="6">6th</option>
                    <option value="7">7th</option>
                    <option value="8">8th</option>
                </select>
            </div>
        <button class="btn">
            Show me now
        </button>

        </form>
    </div>
</body>
</html>