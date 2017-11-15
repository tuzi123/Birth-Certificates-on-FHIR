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
        <li ><a href="about.php">About</a></li>
<!--         <li><a href="#contact">Contact</a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="active" href="register.php">Register  <i class="fa fa-user-plus"></i></a></li>
        <li><a href="login.php">Login  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

 <div class="login">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
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


<?php 

if(isset($_POST['login-submit'])){
  $username = $_POST["username"];
  $password = $_POST["password"];
if ($username&&$password){
	$connect = mysqli_connect("localhost","root","") or die("Couldn't connect to database!");
	$db = mysqli_select_db($connect,"registration") or die("Couldn't connect to database!");
	$query = mysqli_query($connect,"SELECT * FROM account WHERE username='".$username."' and password='".$password."'");
	$numrows = mysqli_num_rows($query);
	if ($numrows !==0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$dbusername = $row["username"];
			$dbpassword = $row["password"];
		}

		if($username==$dbusername && $password==$dbpassword)
		{
			session_start();
			$_SESSION['username'] = $username;
			header("Location:search.php");
		}
		else{
      ?>
        <div class="container">
            <div class="row"> 
              <div class="content">
                  <h2>Your password is incorrect!</h2>
                </div>
            </div>
         </div>
      <?php
    }
	}
	else{
    ?>
        <div class="container">
            <div class="row"> 
              <div class="content">
                  <h2>That user doesn't exists!</h2>
                </div>
            </div>
         </div>
      <?php
  }
}
else {
  ?>
        <div class="container">
            <div class="row"> 
              <div class="content">
                  <h2>Please enter a username and password!</h2>
                </div>
            </div>
         </div>
      <?php
}
}
 ?>

 </body>
</html>

