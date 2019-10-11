<?php
	

	require_once("user_crud.php");

	
	//echo "Attempting to login user....";

	$record = retrieve_user_by_login($_POST['firstname'], $_POST['password']);

	if ($record && $record != null) {
		echo "found";

		session_start();
		$_SESSION["user_id"] = $record['id'];
		header("Location: dashboard.php");
	}
    else {
		echo "not found";
	}
?>

