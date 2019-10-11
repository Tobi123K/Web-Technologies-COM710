<?php

	require_once("database.php");
	//Create User
	function create_user($data) {
		// Reference to our database connection
		global $db;

		// Query we wish to run
		$sql = "INSERT INTO `Users`(`firstname`, `lastname`, `email`, `phonenumber`,`password`) VALUES (:firstname, :lastname, :email, :phonenumber, :password)";

		// Execute query
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':firstname', $data['firstname']);
		$stmt->bindParam(':lastname', $data['lastname']);
		$stmt->bindParam(':email', $data['email']);
		$stmt->bindParam(':phonenumber', $data['phonenumber']);
		$stmt->bindParam(':password', $data['password']);
		$stmt->execute();
	}
	//Selecet One User
	function retrieve_user($id) {
		
		
		// connection to database
		global $db;
		
		// Query we wish to run
		$sql = "SELECT * FROM `Users` WHERE id = :id";
		
		// Execute query
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		
		// Return the result
		return $stmt->fetch();
	}
	// Fetch All Users
	function retrieve_users() {
		
		
		// connection to database
		global $db;
		
		// Query we wish to run
		$sql = "SELECT * FROM `Users`";
		
		// Execute query
		$stmt = $db->prepare($sql);
		$stmt->execute();

		// Return the result
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	// Fetch one user by login
	function retrieve_user_by_login($firstname, $password) {
		
		// connection to database
		global $db;
		
		// Query we wish to run
		// ":" stands for placeholder - Named Params
		$sql = "SELECT * FROM `Users` WHERE firstname = :firstname AND password = :password";
	
		// Execute query
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':firstname', $firstname);
		//$stmt->bindParam(':lastname', $lastname);
		$stmt->bindParam(':password', $password);
		
		$stmt->execute();
		
		// Return the result
		return $stmt->fetch();
	}
	
	//Delete User
	function delete_user($id) {
		global $db;

		$sql = "DELETE FROM `Users` WHERE id=:id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $id);
		$result = $stmt->execute();
		
		return $result;
	}

	//Update User
	function update_user($id, $data) {
		global $db;
		
		$sql = "UPDATE `Users` SET firstname=:firstname, lastname=:lastname, email=:email, phonenumber=:phonenumber, password=:password WHERE id=:id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':firstname', $data['firstname']);
		$stmt->bindParam(':lastname', $data['lastname']);
		$stmt->bindParam(':email', $data['email']);
		$stmt->bindParam(':phonenumber', $data['phonenumber']);
		$stmt->bindParam(':password', $data['password']);
		$result = $stmt->execute();

		return $result;
	}
?>