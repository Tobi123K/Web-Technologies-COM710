<?php 

require_once("user_crud.php");

if (isset($_POST)){
	if (update_user($_POST['id'], $_POST)){
		echo "update succeded";
		header("location: dashboard.php");
	}
	else {
		echo "update failed";
	}
} else {
	echo "Post data was expected.";
}

?>