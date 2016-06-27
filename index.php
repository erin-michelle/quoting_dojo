<?php
	session_start();
	require_once('new-connection.php')

?>


<!DOCTYPE html>
<html>
<head>
	<title>Quoting Dojo</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	  <style type="text/css">
	  	

		  .btn btn-default  {
		  		display: inline-block;
		  		vertical-align: top;

		  	}


	  	.btn btn-default  {
	  		display: inline-block;
	  		vertical-align: top;

	  	}


	  	img {

	  	}
	  </style>
</head>
<body>
	<div class="container">
	  <h2>Welcome to Quoting Dojo, homie.</h2>
	  <form class="form-horizontal" role="form" action="process.php" method="post">
	    <div class="form-group">
	      <label class="control-label col-sm-2">Your name:</label>
	      <div class="col-sm-10">
	        <input type="text" class="form-control" name="name">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="control-label col-sm-2">Your quote: </label>
	      <div class="col-sm-10">          
	        <input type="text" class="form-control" name="quote">
	      </div>
	    </div>
	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="btn btn-default" value="add">Add my quote!</button>
	      </div>
	    </div>
	  </form>
	  <form action="main.php" method="post">
	   <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="btn btn-default" value="skip">Skip to quotes!</button>
	      </div>
	    </div>
	   </form> 
	</div>

	<?php

	if(isset($_SESSION['errors'])) {
		foreach ($_SESSION['errors'] as $error) {
			echo $error;
		}
	}	

	 $_SESSION = array();
	?>

	<img src="http://www.renders-graphiques.fr/image/upload/normal/La_Paz.png">
</body>
</html>
