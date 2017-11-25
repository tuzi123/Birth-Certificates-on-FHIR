<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>About iHealth Birth Certificate App</title>
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
        <li ><a href="index.php">Home</a></li>
        <li class="active"><a href="about.php">About</a></li>
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

 <div class="content">
 	<div class="row">
 		<div class="col-lg-12">
 			<div>
        <h3>Easy Birth Registration App</h3>
        <p>The collection and submission of birth certificate information to state vital statistics agencies is currently the responsibility of birth certificate clerks, typically staff in medical records departments of hospitals. For each birth occurring in a hospital, birth clerks are required to abstract clinical information from the records of both the mother and the newborn.  This information is hand-written onto a facility worksheet.  A second worksheet,  the mother’s worksheet,  is completed by the mother and father, if applicable, and contains demographic information about the parents and the desired name of the newborn child. Both worksheets are entered into a web-based form called an electronic birth registration system (EBRS) and submitted to the state health department birth certificate registry</p>
        <img class="about" src="img/aboutImage.jpg">
        <br><br>
        <p>The process of manually abstracting information from mother and child records is labor intensive and error prone, and dates back to the time of paper medical records.  Birth clerks also must be trained on the precise definitions of information required to be reported on the birth certificate, and their performance is routinely audited by the state with a focus on maintaining and improving quality.</p>
        <p>This web applicaion develops the FHIR resource mappings and birth certificate logic to support a SMART-on-FHIR application for birth certificate clerks. A birth certificate clerk in the EHR would launch the birth certificate app. The app would then fetch the necessary data elements, using the EHR's FHIR port. Other data (e.g. mother's worksheet) could then be manually entered by the birth certificate clerk directly into the app. The general workflow of this app is shown in the following figure.</p>
        <br>
        <img class="about" src="img/workflow.png">

 			</div>
 		</div>
 	</div>
 </div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
