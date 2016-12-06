<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery.min.js"></script>
  	
</head>
<body>
<div class="jarak">
  	
	    <div class="col-xs-1 col-sm-3 col-md-4"></div>
	    <div class="col-xs-10 col-sm-6 col-md-4">
	    	<form action="" method="POST">
			  <div class="form-group">
			    <label for="username">Username:</label>
			    <input type="text" class="form-control" id="username" name="Username" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label for="password">Password:</label>
			    <input type="password" class="form-control" id="password" name="Password" placeholder="Password">
			  </div>
			  <button type="submit" class="btn btn-default" name="Submit">Login</button>
			</form><br>
			
	    </div>
	    <div class="col-xs-1 col-sm-3 col-md-4"></div>
  	</div>	
</div>

<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('admin' => 'psmits');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:home.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
	?>
</body>
</html>