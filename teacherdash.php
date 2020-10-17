<!DOCTYPE html>
<html>
<head>
    <title>Teacher panel</title>
</head>
<style>
 .menu{
    height: 100%;
    width: 0;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x:hidden;
    transition: 0.4s;
    }
    a{
        color: white;
    }
    .button{
        cursor: pointer;
        font-size: 30px;
        border: none;
        margin-left: 10px;
        margin-top: 20px;
    }
    #cross{
        font-size: 50px;
        margin-left:160px;    
        }
    .menu a{
        padding:20px 20px 20px 20px;
        display:block ;
        font-size: 20px;
        color: #818181;
        text-decoration: none;
        transition: 0.4s;
    }
    .menu a:hover{
        color: white;
    }
    body{
        background-color: #ECF0F1 ;
        margin: 0;
        padding: 0;
;
    }
    #horizontal{
        margin-top: 40px;
        width: 100%;
        border:1px solid black;
    }
    #photograph{
        height: 180px;
        width: 180px;
        background-color: white;
        margin-left:100px;
        margin-top: 20px;
        margin-bottom: 15px;
        border-radius: 50%;
    }
    #user-details{
        margin-left: 40px;
        margin-top: 10px;
        font-size: 20px;
        color: white;
        font-family: "Comic Sans MS", cursive, sans-serif;
    }
    .status-icons{
        display: inline-block;
    }
    .status{
        margin-left: 300px;
        margin-top: 10px;
    }
   #upcoming{
       background-color:#00bfff ;
       color: white;
   }
   #start-next{
    background-color:#ff0000 ;
    color: white;
   }
   #going-on{
    background-color:#F39C12 ;
    color: white;
   }
   #finished{
background-color:#0cbb06;
color: white;
   }
   #right-background{
    width: 400px;
    height: 730px;
    background-color:#11697A;
    padding-right: 0;
    float: right;
}
#panel{
    text-align: center;
    padding-top: 0;
}
#top{
    margin-left: 350px;
    font-size: 40px;
    color: #4C4C4C;
}
#allrights{
    margin-top: 100px;
    font-size: 25px;
}
#date{
    margin-top:100px;
    color: #818181;
    margin-left: 20px;
}
</style>
<body >
<div id="right-background">
</div>
<div id="menu-bar" class="menu">
        <a href="javascript:void(0)" onclick="cancel()"id="cross">×</a>
        <a href="">Dashboard</a>
        <a href="">Quiz History</a>
        <a href="">Contact us</a>
        <a href="">Log-Out</a>
        <a href="" id="allrights">&copy;All rights reserved </a>
</div>
<button class="button" onclick="star()">☰</button>
<span id="top">Teacher Dashboard</span>
<div id="horizontal"></div>
<!-- <div class="status">
<div class="status-icons" ><input id="upcoming" type="submit" value="Upcoming"  name="upcoming"></div>
<div class="status-icons"><input id="start-next" type="submit" value="Start in next 1 min"></div>
<div class="status-icons"><input id="going-on" type="submit" value="Going-on"></div>
<div class="status-icons"><input id="finished" type="submit" value="Finished"></div> -->
<span id="date"></span>
</div>
<script>
    var d=new Date();
    document.getElementById("date").innerHTML=d;
    function star(){ 
    document.getElementById("menu-bar").style.width="250px";
    }
    function cancel(){
        document.getElementById("menu-bar").style.width="0";
    }
    </script>
</body>
</html>
