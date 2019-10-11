<!doctype html>
<?php
	//"require_once" connect proces.php file and it has to be in the same folder.
	// as well as <form action"process.php">
	require_once('database.php');
	?>
<html lang="en">
  <head>
		<!-- Required meta tags -->
	
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

    <title>Appoitment CRUD</title>
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
<!-- Message Section -->
			<?php session_start(); ?>
	
			<?php
			if (isset($_SESSION['message'])): ?>
			<div class="alert alert-<?=$_SESSION['msg_type']?>">
			<?php
			echo $_SESSION['message'];
			unset($_SESSION['message']);
			?>
			</div>
			<?php endif ?>
<!-- ------------------------------------ --->
<!-- CONTENT -->


			<div class="container">
			
			<div class="row justify-content-center">
				<p><a href="registration.php" class="btn btn-info">Create a new user</a></p>
				
				<table class="table">

					<thead>
						<tr>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<!--<th>Password</th>-->
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<?php
					require_once("user_crud.php");
					$result = retrieve_users();
					//$result->execute();
					foreach($result as $row) {
					?>
					<tr>
						<td><?php echo $row['firstname']; ?></td>
						<td><?php echo $row['lastname']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['phonenumber']; ?></td>
						
						<td>
							<a href="edit_user_form.php?id=<?php echo $row['id'];?>"
							class="btn btn-info">Edit</a>
							<a href="process_delete_user.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					
					
					<?php
					}
					?>
				</table>
			</div>
			<br>
			<br>
			<div class="row justify-content-center">
				<p><a href="book_appoitment_form.php" class="btn btn-info">Book Appoitment</a></p>
				<table class="table">
					<thead>
						<tr>
							
							<th>Name</th>
							<th>Date</th>
							<th>Time</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<?php
					require_once("appoitments_crud.php");
					$result = retrieve_appointments();
					//$result->execute();
					foreach($result as $row) {
					?>
					<tr>
						<td><?php echo $row['user_id']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['time']; ?></td>
						
						<td>
							<a href="edit_appoitment_form.php?id=<?php echo $row['id'];?>"
							class="btn btn-info">Edit</a>
							<a href="process_delete_appoitment.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					
					
					<?php
					}
					?>
					</thead>
				</table>
			</div>

			
  
	<!--<div class="row justify-content-left">
    <form>
		
	
		<div class="gorm-group">
		<label>First Name</label>
		<input type="text" name="first_name" class="form-control" value="First Name">
		</div>
		
		<div class="gorm-group">
		<label>Last Name</label>
		<input type="text" name="lastname" class="form-control" value="Last Name" >
		</div>
		
		<div class="gorm-group" >
		<label for="time">Email</label>
		<input type="text" name="email" class="form-control" value="myemail@solent.uk">

		<div class="gorm-group" >
		<label for="time">Phone number</label>
		<input type="text" name="phonenumber" class="form-control" value="666 666">
		</div>
		
		<div class="form-group">
		
		<button type="sumbit" name="view" class="btn btn-primary">View</button>

		<button type="sumbit" name="edit" class="btn btn-primary">Edit</button>

		<button type="sumbit" name="delete" class="btn btn-danger">Delete</button>
		
		</div>
	</form>
	</div>
	-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</div>
  </body>
</html>