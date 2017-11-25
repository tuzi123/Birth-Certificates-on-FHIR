<?php 
session_start();
if(!isset($_SESSION["username"])){
	header("Location:login.php");
}
else{
 ?>
	<!DOCTYPE html>
<html>
<head>
	<title>iHealth Birth Certificate App</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link rel="stylesheet" type="text/css" href="app.css">
  <script src='http://code.jquery.com/jquery-2.1.4.min.js'></script>
    <!-- <script src='../dist/fhir-client.js'></script> -->
  <script src="fhir-client.js"></script>
  <script type="text/javascript" src="populateForm.js"></script>

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
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">  
        <li><a href="">hello, <?=$_SESSION["username"];?></a></li>    
        <li><a href="logout.php">Logout<i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
 
 
 
<div class="search">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="ID-form" action="form.php" method="GET" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="BabyID" id="babyID" tabindex="1" class="form-control" placeholder="Baby's ID" required>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="search-submit" id="search-submit" tabindex="4" class="form-control btn btn-login" value="Search" > 

                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
<?php 
}
?>

