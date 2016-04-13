<!--
	Jamie Curd | Homepage
	http://jamiecurd.tk/ 
	More Information At http://jamiecurd.tk/docs/
	User Register Page
-->
<!--Require Login-->
<?php

session_start(); // start session cookies
require("classlogin.php"); // pull in file
$login = new Login; // create object login

$login->authorize(); // make user login

?>


<!--Main Section Begins-->
<?php include "83720.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jamie Curd | Register</title>
	<!--Link Stylesheets And Fonts-->
	<link rel="stylesheet" type="text/css" href="../assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/materialize.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Meta Section-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--Icons-->
	<link rel="apple-touch-icon" sizes="57x57" href="../assets/img/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../assets/img/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../assets/img/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../assets/img/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../assets/img/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../assets/img/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../assets/img/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/icons/favicon-16x16.png">
	<link rel="manifest" href="../assets/img/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../assets/img/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>

<body>  
	<div id="main">
	<a href="8516.php?action=clear_login">Logout</a>
	<?php
	if(!empty($_POST['username']) && !empty($_POST['password']))
	{
		$firstname = mysql_real_escape_string($_POST['firstname']);
		$username = mysql_real_escape_string($_POST['username']);
		$password = md5(mysql_real_escape_string($_POST['password']));
		$email = mysql_real_escape_string($_POST['email']);
		 
		 $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
		  
		 if(mysql_num_rows($checkusername) == 1)
		 {
			echo "<h1>Error</h1>";
			echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
		 }
		 else
		 {
			$registerquery = mysql_query("INSERT INTO users (firstname, Username, Password, EmailAddress) VALUES('".$firstname."', '".$username."', '".$password."', '".$email."')");
			if($registerquery)
			{
				echo "<h1>Success</h1>";
				echo "<p>Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.</p>";
			}
			else
			{
				echo "<h1>Error</h1>";
				echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
			}       
		 }
	}
	else
	{
		?>
		 
	   <h1>Register</h1>
		 
	   <p>Please enter your details below to register.</p>
		 
		<form method="post" action="8516.php" name="registerform" id="registerform">
		<fieldset>
			<label for="firstname">First Name:</label><input type="text" name="firstname" id="firstname" /><br />
			<label for="username">Username:</label><input type="text" name="username" id="username" /><br />
			<label for="password">Password:</label><input type="password" name="password" id="password" /><br />
			<label for="email">Email Address:</label><input type="text" name="email" id="email" /><br />
			<input type="submit" name="register" id="register" value="Register" />
		</fieldset>
		</form>
		 
		<?php
	}
	?>
	 
	</div>
</body>
</html>