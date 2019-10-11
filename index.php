<!DOCTYPE html>
<html>
	<html lang="en">
<head>
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
	<!--	<nav>
			<div class="col-sm-3">
			
				<div class="btn-toolbar mb-4" role="toolbar" >
				<div class="btn-group mr-4" role="group">
				<button type="button" class="btn btn-primary" onclick="location.href='loginForm/login.php';" value"Log in">Login</button>
				<button type="button" class="btn btn-primary" onclick="location.href='registrationForm/registration.php';" value"Registration">Registration</button>
				<button type="button" class="btn btn-primary" >About</button>
				<button type="button" class="btn btn-primary" >Contact</button>
				</div>
	-->
<!-- Navigation -->
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
<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
<div class ="row welcome text-center">
<div class ="col-lg-24">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class= "active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
	<li data-target="#slides" data-slide-to="2"></li>
</ul>
</div>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/background.png">
	</div>
	<div class="carousel-item">
		<img src="img/background2.png">
	</div>
	<div class="carousel-item">
		<img src="img/background3.png">
	</div>
</div>
</div>
</div>
<div class="container-fluid padding">
<div class="row text-center padding">
	<div class="col-12">
		<h2>Connect</h2>
	</div>
	<div class="col-12 social padding">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>	
	</body>
	<!--- Footer -->
<footer>
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-md-6">
		<hr class="light">
		<h5>Contact</h5>
		<hr class="light">
		<p>444-666-555</p>
		<p>YogaME@myemail.com</p>
		<p>101 Little Box</p>
		<p>Southampton, Hampshire, 999</p>
	</div>
	<div class="col-md-6">
		<hr class="light">
		<h5>Opening Hours</h5>
		<hr class="light">
		<p>Monday-Sunday: 9am - 9pm</p>
	</div>
</div>
</div>
</footer>
	</body>
</html>