<?php

	require_once("database.php");
	//CREATE USER FUNCTION
	function create_appointment($data) {
		// Reference to our database connection
		global $db;

		// Query we wish to run
		$sql = "INSERT INTO `Appointments`(`user_id`, `date`, `time`) VALUES (:user_id, :date, :time)";

		// Execute query
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':user_id', $data['user_id']);
		$stmt->bindParam(':date', $data['date']);
		$stmt->bindParam(':time', $data['time']);
		$stmt->execute();
	}
	// SELECT ONE APPOITMENT FUNCTION
	function retrieve_appointment($id) {
		
		
		// connection to database
		global $db;
		
		// Query we wish to run
		$sql = "SELECT * FROM `Appointments` WHERE id = :id";
		
		// Execute query
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		
		// Return the result
		return $stmt->fetch();
	}
	// SELECT MANY APPOITMENTS FUNCTION (This is used to display on the dashboard)
	function retrieve_appointments() {
		
		// connection to database
		global $db;
		// Query we wish to run
		$sql = "SELECT * FROM `Appointments`";
		
		// Execute query
		$stmt = $db->prepare($sql);
		$stmt->execute();

		// Return the result
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	// DELETE ONE APPOITMENT FUNCTION
	
	function delete_appointment($id) {
		
		// connection to database
		global $db;
		
		// Execute query
		$sql = "DELETE FROM `Appointments` WHERE id=:id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $id);
		$result = $stmt->execute();
		
	}
	//UPDATE APPOITMENT FUNCTION
	function update_appointment($id, $data) {
		global $db;
		
		$sql = "UPDATE `Appointments` SET user_id=:user_id=, data=:date, time=:time WHERE id=:id";
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':user_id', $data['user_id']);
		$stmt->bindParam(':date', $data['date']);
		$stmt->bindParam(':time', $data['time']);
		$stmt->execute();
		$result = $stmt->execute();

		return $result;
	}
?>
	