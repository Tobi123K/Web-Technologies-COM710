<?php 

require_once("user_crud.php");

if (isset($_GET['id'])){
	$id = $_GET['id'];
	if (delete_user($id)) {
		echo "deleted";
		header("Location: dashboard.php");
	}
	else {
		echo "Could not delete user";
	}
} else {
	echo "An id was expected.";
}

?>