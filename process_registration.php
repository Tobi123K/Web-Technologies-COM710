<?php
	//This code connect to the database on the edward2 sever
	require_once('user_crud.php');
//syntax for function for submit button
	if(isset($_POST) && create_user($_POST) == 1){
			echo 'success';
	}else{
		echo 'No data';
	}

