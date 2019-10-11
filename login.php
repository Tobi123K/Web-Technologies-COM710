<!DOCTYPE html>
<html>

<head>
	<title> User Login Form - YogaME</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About_YogaME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>


 <!-- NAVIGATION -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand" href="index.php"><img src ="img/yoga_logo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto"> <!-- ml auto is for alingment on the side-->
			<li class="nav-item active">
				<a class="nav-link" href="login.php">Login</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="registration.php">Registration</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="About_YogaME.php">About</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">Our Feedback</a>
			</li>

		</ul>
	</div>
</div>
</nav>
	<form action="process_login.php" method="post">
		<div class="container">
			<!-- This code use Boostrap for CSS formating --> 
			
				<div class="col-sm-3">
				
				<h1>Login Form</h1>
				<br>
				<p> Please, provide your data.</p>
				<hr class="mb-3">
				

				<label for="fistname"><b>First name</b><label>
				<input class="form-control" id="firstname" type="text" name="firstname" required><br>
				
				<!--<label for="lastname"><b>Last name</b><label>
				<input class="form-control" id="lastname" type="text" name="lastname" required><br>-->
				
				<label for="password"><b>Password</b><label>
				<input class="form-control" id="password" type="text" name="password" required><br>
				
				<input class="btn btn-primary" type="submit" name="Submit" value="Sign Up">
				</div>
		</div>
	</form>
</div>
