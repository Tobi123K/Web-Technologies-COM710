<!DOCTYPE hmtl>
<html>
<head>
	<title> Booking Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand" href="https://edward2.solent.ac.uk/~tkaduk/Main_Page_YogaME.php"><img src ="img/yoga_logo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse"
	data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto"> <!-- ml auto is for alingment on the side-->
			<li class="nav-item active">
				<a class="nav-link" href="https://edward2.solent.ac.uk/~tkaduk/loginForm/login.php">Login</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="https://edward2.solent.ac.uk/~tkaduk/registrationForm/registration.php">Registration</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="https://edward2.solent.ac.uk/~tkaduk/About_YogaME.php">About</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">Our Feedback</a>
			</li>

		</ul>
	</div>
</div>
</nav>
<div>
	
	<form action="process_book_appoitment.php" method="post">
		<div class="container">
			<!-- Booking form --> 
			<div class="row">
				<div class="col-sm-3">
				<div>
				<h1>Booking</h1>
				<p> Please, choose book your yoga classes.</p>
				<hr class="mb-3">
				<label for="user_id"><b>First Name</b><label>
				<input class="form-control" id="user_id" type="text" name="user_id" required>
				
				
				<label for="date"><b>date</b><label>
				<input class="form-control" id="date" type="text" name="date" required>
				
				<label for="time"><b>time</b><label>
				<input class="form-control" id="time" type="email" name="time" required>

				<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				
			</div>
		</div>
	</form>
</div>