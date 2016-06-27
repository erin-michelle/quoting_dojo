<?php
	 session_start();
	 require_once('new-connection.php');



	$name = $_POST['name'];
	$quote = $_POST['quote'];

	$errors = array();


	if ($_POST["name"] == null) {
	   $errors[]= "What's your name, esé? <br>";  
	}

	if ($_POST["quote"] == null) {
	    $errors[]= "Bestow upon me your infinite wisdom, buey.<br>";   
	}

	if(!empty($errors)) {
			$_SESSION['errors'] = $errors;
			header ('Location: index.php');
		}

	/////////////////////////////////////////////////////////
// var_dump($_SESSION);
	if(!empty($name)){
	
		$query = "INSERT INTO users (name, quotes, created_at, updated_at)
          VALUES('{$_POST['name']}', '{$_POST['quote']}', NOW(), NOW())";
          run_mysql_query($query);
          header ('Location: main.php');
	}

	
	if($_POST['skip']) {
		header('location:main.php');
	}

	// var_dump($_SESSION);

	

?>

