<!--
	Jamie Curd | Homepage
	http://jamiecurd.tk/ 
	More Information At http://jamiecurd.tk/docs/
	User Page
-->
<?php include "83720.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<title>Jamie Curd | User</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>  
<body>  

<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
    // let the user access the main page
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    // let the user login
}
else
{
    // display the login form
}
?>
<?php
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
{
     ?>
</body>
</html>

<html lang="en-US">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
<header>
	<div class="navbar-fixed hide-on-med-and-down">
    <nav class="white hide-on-med-and-down">
    <div class="nav-wrapper container">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="../index.php#contact" class="black-text">Contact</a></li>
      </ul>
	  <ul id="nav-mobile" class="right hide-on-med-and-down">
		<li class="black-text">Welcome, <strong><?=$_SESSION['Username']?></strong></a></li>
		<li><a class="waves-effect waves-light btn grey lighten-2 black-text modal-trigger" href="logout.php"><strong>LOGOUT</strong></a></li>
	  </ul>
    </div>
	</nav>
	</div>
	<div class="user-header">
	<div class="user-header-content">
		<img src="../assets/img/logo.png" height="400" width="400"> 
	</div>
	</div> 
 </header>
 
<main>
<br><br>
<!--Notices-->
<div class="col s6">
<div class="container">
     <div class="row">
        <div class="col s6 m6">
          <div class="card grey lighten-2">
            <div class="card-content black-text">
              <span class="card-title">Notices</span>
			              <div class="card-action"></div>
      <p><i class="material-icons prefix">vpn_key</i> If You Wish To Have Something Changed, Please Contact Me.</p>
	  <p><i class="material-icons prefix">warning</i> jamiecurd.tk is hosted on a non-secure server, please consider using a different password to what you normally use.</p>
            </div>
          </div>
        </div>

<!--User Info-->
        <div class="col s6 m6">
          <div class="card grey lighten-2">
            <div class="card-content black-text">
              <span class="card-title">User Info</span>
			              <div class="card-action"></div>
      <p><i class="material-icons prefix">assignment_ind</i> Username: <strong><?=$_SESSION['Username']?></strong></p>
	  <p><i class="material-icons prefix">mail</i> Email: <strong><?=$_SESSION['EmailAddress']?></strong></p>
            </div>
          </div>
        </div>
      </div>
<!-- Contact-->
        <div class="col s12 m12">
          <div class="card grey lighten-2">
            <div class="card-content black-text">
              <span class="card-title">Contact Me</span>
			              <div class="card-action"></div>
						  <form action="http://formspree.io/jamie.curd@gmail.com" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix grey-text">account_circle</i>
          <input id="Name" type="text" class="validate" name="Name">
          <label for="Name">Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix grey-text">email_circle</i>
          <input id="Email" type="email" class="validate" name="Email" value="<?=$_SESSION['EmailAddress']?>">
          <label for="Email" data-error="Invalid Email"></label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s12">
		<i class="material-icons prefix grey-text">mode_edit_circle</i>
          <textarea id="Message" class="materialize-textarea validate" length="200" name="Message"></textarea>
          <label for="Message">Message</label>
        </div>
      </div>
	  		<div class="row">
        <div class="input-field col s12">
	<input class="waves-effect waves-green btn grey lighten-3 black-text right" type="submit" value="Send" name="Submit Box" onclick="Materialize.toast('Message Sent!', 4000)" ></input>
	</div>
	</div>
	<input type="hidden" name="_next" value="#contact"/>
	<input type="hidden" name="_subject" value="[Jamie Curd] New Message" />
    </form>
            </div>
          </div>
        </div>
      </div>
</div>
</main>

<footer class="page-footer grey lighten-4" id="contact">
	<div class="footer-copyright">
	<div class="black-text">
	<div class="container">
	© 2016 Jamie Curd
	</div>
	</div>
	</div>
</footer>
  
<html>
<body>	  
     <?php
}
elseif(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
     
    $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");
     
    if(mysql_num_rows($checklogin) == 1)
    {
        $row = mysql_fetch_array($checklogin);
        $email = $row['EmailAddress'];
         
		$_SESSION['Username'] = $username;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;
         
	         $url='index.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">';
    }
    else
    {
	         $url='../index.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">';
    }
}
else
{
	         $url='../index.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">';
}

    ?>
</body>
</html>