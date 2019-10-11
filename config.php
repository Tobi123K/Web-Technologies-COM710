<?php

$db_user = "tkaduk";
$db_pass ="dae8Id9t";
$db_name ="tkaduk";

//create a PDO instance
	$db = new PDO("mysql:host=localhost;dbname=tkaduk;", "tkaduk", "dae8Id9t");
	//This code is for information about $db problems.
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);