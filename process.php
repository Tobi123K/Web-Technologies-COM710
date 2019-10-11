<?php
	//This code connect to the database on the edward2 sever
	require_once('config.php');
?>
<?php
	session_start();
	//$update = false;
	//$id = 0; 
	//$user_id='';
	//$date='';
	//$time='';
	
	//Create CRUD (Insert)
	if (isset($_POST['save'])){
		$user_id 	= $_POST['user_id'];
		$date		= $_POST['date'];
		$time		= $_POST['time'];
		
	
		$sql = "INSERT INTO Appointments (user_id, date, time) VALUES('$user_id', '$date', '$time')";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$user_id, $date, $time]);
		
		// Session which tempory keep our variable
		$_SESSION['message'] = "Record has been saved!";
		$_SESSION['msg_type'] = "success";
		
		header("location: index.php");
		
	}
	
	//Delete CRUD
	if (isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "DELETE FROM Appointments WHERE id=$id";
		$stmtdelete = $db->prepare($sql);
		$result = $stmtdelete->execute([$id]);
		
		$_SESSION['message'] = "Record has been deleted!";
		$_SESSION['msg_type'] = "danger";
		
		header("location:index.php");
	}

	// FUNCTION EDIT AND UPDATE DOEN'T WORK
	if (isset($_GET['edit'])){
		$id = $_GET['edit'];
		$update = true;
		$sql = "SELECT * FROM Appointments WHERE id=$id";
		$stmtedit = $db->prepare($sql);
		$result = $stmtedit->execute([$id]);
		if (count($result)==1){
			($row = $result = $sth->fetch(PDO::FETCH_ASSOC));
			$id_user = $row['id_user'];
			$date = $row['date'];
			$time = $row['time'];


		}
	}
	// FUNCTION EDIT AND UPDATE DOEN'T WORK
		if (isset($_POST['id'])){
		$id = $_POST['id'];

		$id_user = $row['id_user'];
		$date = $row['date'];
		$time = $row['time'];
		
		$sql = "UPDATE Appointments SET (user_id, date, time) VALUES('$user_id', '$date', '$time'); WHERE id=$id ";
		$stmtupdate = $db->prepare($sql);
		$result = $stmtupdate->execute([$user_id, $date, $time]);
		
		$_SESSION['message'] = "Record has been update!";
		$_SESSION['mgs_type'] = "warning";
	
		header('location: index.php');
		
	}
?>	