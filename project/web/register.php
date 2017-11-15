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
        <li><a class="active" href="register.html">Register  <i class="fa fa-user-plus"></i></a></li>
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
                <form id="register-form" action="register.php" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
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
if(isset($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["email"])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$connect = new mysqli('localhost','root',"") or die(myspqli_error());
	$db = mysqli_select_db($connect,'registration') or die("DB error");
	$query = mysqli_query($connect, "SELECT * FROM account WHERE username='".$username."'");
	$numrows = mysqli_num_rows($query);
	if ($numrows ==0)
	{
		$sql = "INSERT INTO account(username,password,email) VALUES('$username','$password','$email')";
		$result = mysqli_query($connect,$sql);
		if($result)
		{   header("Location:login.html");
			?>
            <div class="container"> 
            	<div class="row">
            		<div class="content">
            	            <h2>Your account was created successfully!</h2>
            	        </div>
            	</div>
            </div>
			<?php
		}
		else{
			?>
            <div class="container"> 
            	<div class="row">
            		<div class="content">
            	            <h2>Your account was not created: an error occured</h2>
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
            	             <h2>The username already exists, please choose another one.</h2>
            	        </div>
            	</div>
            </div>
			<?php
	}

} 
else
    {
	   ?>
	   <script type="text/javascript">alert("All fields are required");</script>
	   <?php 
    }
?>

</body>
</html>
