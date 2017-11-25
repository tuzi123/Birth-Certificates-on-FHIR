<?php
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>iHealth Birth Certificate App</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>

 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">iHealth</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
<!--         <li><a href="#contact">Contact</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php 
          // session_start();
            if(!isset($_SESSION["username"]))
            {
              ?>
             <li><a href="register.php">Register  <i class="fa fa-user-plus"></i></a></li>
             <li><a href="login.php">Login  <i class="fa fa-user"></i></a></li>
             <?php
            }
            else{
              ?>
             <li><a href="">hello, <?=$_SESSION["username"];?></a></li>    
             <li><a href="logout.php">Logout<i class="fa fa-user"></i></a></li>
             <?php
            }
        ?>
      </ul>
    </div>
  </div>
 </nav>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="title">
 				<h1>iHealth</h1>
 				<h3>Easy Birth Registration App</h3>
 				<hr>
 				<button class="btn btn-default btn-lg" onclick="javascript:window.location.href='search.php'; return false;"> Get Started!</button>
 			</div>
 		</div>
 	</div>
 </div>

 

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>