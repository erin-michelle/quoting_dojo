<?php
	session_start();
	require_once('new-connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	h3 {
		font-family: futura;

	}

	p {
		font-family: futura;
	}

	</style>


</head>
<body>

</body>
</html>

<?php

	// echo "It works, loca.<br>";

	$query2 = 'SELECT * FROM users';
	$users = fetch_all($query2);

	echo "<h3>Pearls of Wisdom: </h3><br><br>";

	foreach ($users as $user) {
	echo "<p>". $user['name'] . " -- ". $user['quotes']. " " .$user['created_at']. "</p>" . "<hr>";
		}
		

?>
