<html >
<head>
<title>Onine Quiz</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/> 
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <style>
body{
    background : url('images/bg1.jpg');    
}
.welcome{
  color:white;
  margin-top:305px;
  margin-left:359px;
  font-size:94px;
}
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  </style> 
</head>
<body>
<h1 class="welcome">Welcome To My Quiz </h1>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">            
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo 'adminlogin.php'; ?>" >ADMIN</a></li>   
        <li><a href="<?php echo 'Studentsignin.php'; ?>" >SIGN IN</a></li>
        <li><a href="<?php echo 'studentsignup.php'; ?>" >SIGN UP</a></li>
         <li><a href="<?php echo 'teacherlogin.php'; ?>" >TEACHER</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
require_once("footer.php");
?>
