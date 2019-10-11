<?php

require_once("user_crud.php");

$id = $_GET['id'];
$user = retrieve_user($id);

?>


<!DOCTYPE hmtl>
<html>
<head>
	<title> Update User Form</title>
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
				<a class="nav-link" href="https://edward2.solent.ac.uk/~tkaduk/about/About_YogaME.php">About</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#">Our Feedback</a>
			</li>

		</ul>
	</div>
</div>
</nav>
<!--------- LOGIC ----------------->


<div>
	
	<form action="process_edit_user.php" method="post">
		<div class="container">
			<!-- This code use Boostrap for CSS formating --> 
			<div class="row">
				
				<div class="col-sm-3">
				<div>
				<h1>Edit your data</h1>
				<p> Please, provide your data for udpating.</p>
				<hr class="mb-3">
				
				<input id="id" type="hidden" name="id" value="<?php echo $id; ?>" />
				
				<label for="firstname"><b>First Name</b><label>
				<input class="form-control" id="firstname" type="text" name="firstname" value="<?php echo $user['firstname']; ?>" required />
				
				<label for="lastname"><b>Last Name</b><label>
				<input class="form-control" id="lastname" type="text" name="lastname" value="<?php echo $user['lastname']; ?>" required />
				
				<label for="email"><b>Email Address</b><label>
				<input class="form-control" id="email" type="email" name="email" value="<?php echo $user['email']; ?>" required />
				
				<label for="phonenumber"><b>Phone Number</b><label>
				<input class="form-control" id="phonenumber" type="text" name="phonenumber" value="<?php echo $user['phonenumber']; ?>" required />
				
				<label for="password"><b>Password</b><label>
				<input class="form-control" id="password" type="text" name="password" value="<?php echo $user['password']; ?>" required />
				<hr class="mb-3">
				<input class="btn btn-primary" type="submit" id="update" name="update" value="Update" />
				
			</div>
		</div>
	</form>
</div>
	<!--     Google Hosted Libraries from JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Here is a link to the sweetalert2@8 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){
			// Code for validation of data which will be insreted to the form
			var valid = this.form.checkValidity();
			
			
			if(valid){
				
				// variables related to id in the labe field for the form questions
			var firstname = 	$('#firstname').val();
			var lastname = 		$('#lastname').val();
			var email = 		$('#email').val();
			var phonenumber = 	$('#phonenumber').val();
			var password = 		$('#password').val();
			
			
				e.preventDefault();
				
				$.ajax({
					type: "POST",
					url: 'process_registration.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber, password: password},
					success: function(data){
						Swal.fire({
									'title': 'Successfully',
									'text': 'User was created!',
									'type': 'succes'
									})
					},
					error: function(data) {
						Swal.fire({
									'title': 'Error',
									'text': 'User was not created',
									'type': 'error'
									})
						
					}
				});
				
			}else{
				
			}
				
			
		
		
		});
		
	});

</script>
</body>
</html>
