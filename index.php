<!--
	Jamie Curd | Homepage
	http://jamiecurd.tk/ 
	More Information At http://jamiecurd.tk/docs/
	Main HTML File
-->
<?php include "home/83720.php"; ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jamie Curd | Homepage</title>
	<!--Link Stylesheets And Fonts-->
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Meta Section-->
	<meta name="keywords" content="Jamie, Curd, Jamie Curd, jamiecurd.tk, jamie.curd@gmail.com">
	<meta name="description" content="Jamie Curd | 14 Year Old Boy Living In New Zealand">
	<meta charset="UTF-8">
	<meta name="author" content="Jamie Curd">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--Icons-->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/img/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/img/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="assets/img/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/icons/favicon-16x16.png">
	<link rel="manifest" href="assets/img/icons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="assets/img/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!--Mobile Site-->
	<script type="text/javascript">
	  <!--
	  if (screen.width <= 800) {
		window.location = "localhost:8080/m/";
	  }
	  //-->
	</script>
</head>

<body>
<header>
	<div class="navbar-fixed hide-on-med-and-down">
    <nav class="white hide-on-med-and-down">
    <div class="nav-wrapper container">
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="#contact" class="black-text">Contact</a></li>
      </ul>
	  <ul id="nav-mobile" class="right hide-on-med-and-down">
		<li><a href="#" class="black-text" onclick="Materialize.toast('Sorry But Sign Up Is Curently Disabled', 6000)"><strong>SIGN UP</strong></a></li>
		<li><a class="waves-effect waves-light btn grey lighten-2 black-text modal-trigger" href="#login"><strong>LOGIN</strong></a></li>
	  </ul>
    </div>
	</nav>
	</div>
	<div class="top-header">
	<div class="top-header-content">
		<img src="assets/img/logo.png" height="500" width="500"> 
	</div>
	</div>

  <!-- Login -->
  <div id="login" class="modal">
    <div class="modal-content">
      <h4 class="center flow-text">Login</h4>
    <form class="col s12" method="post" action="home/index.php" name="loginform" id="loginform">
	      <div class="center container">
        <div class="input-field col s6 center">
          <i class="material-icons prefix center">account_circle</i>
          <input id="username" type="text" class="center-align" name="username">
          <label for="username">Username</label> 
        </div>
		<div class="input-field col s6 center">
          <i class="material-icons prefix center ">vpn_key_circle</i>
          <input id="password" type="password" class="center-align" name="password">
          <label for="password">Password</label> 
        </div>
		<button class="btn" id="login-button login" name="login">Login</button>
    </form>
        </div>  
    </div>
    <div class="modal-footer">
      <a href="" class="modal-action modal-close waves-effect waves-dark btn-flat">Close</a>
    </div>
  </div>
</header>
<main>
<div class="container">
<br>
<h1 class="flow-text center-align">Contact Me</h1>
<div class="row">
    <form action="http://formspree.io/jamie.curd@gmail.com" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix grey-text">account_circle</i>
          <input id="Name" type="text" class="validate" name="Name">
          <label for="Name">Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix grey-text">email_circle</i>
          <input id="Email" type="email" class="validate" name="Email">
          <label for="Email" data-error="Invalid Email">Email</label>
        </div>
		</div>
		<div class="row">
        <div class="input-field col s12">
		<i class="material-icons prefix grey-text">mode_edit_circle</i>
          <textarea id="Message" class="materialize-textarea validate" length="200" name="Message"></textarea>
          <label for="Message">Message</label>
        </div>
      </div>
	<input class="waves-effect waves-green btn grey lighten-3 black-text right" type="submit" value="Send" name="Submit Box" onclick="Materialize.toast('Message Sent!', 4000)" ></input>
	<input type="hidden" name="_next" value="#contact"/>
	<input type="hidden" name="_subject" value="[Jamie Curd] New Message" />
    </form>
</main>
<footer class="page-footer grey lighten-4" id="contact">
	<div class="footer-copyright">
	<div class="black-text">
	<div class="container">
	© 2016 Jamie Curd
	</div>
    <a class="black-text text-lighten-4 right modal-trigger" href="#Notes">Notes</a>
    </div>
    </div>
  <!-- More Section -->
  <div id="Notes" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4 class="center"><strong>Notes</strong></h4>
      <p><strong>http://jamiecurd.tk</strong> use's a number of plugins/frameworks listed below is the applicable licenses for this site, if you have any questions or issues please contact me through the contact form or email me at <strong>jamie.curd@gmail.com</strong></p>
	  <br>
	  <h4 class="center"><strong>Materialize License</strong></h4>
	  <p class="center">Materialize is licensed under the MIT License</p>
	  <p>The MIT License (MIT)

Copyright (c) 2014-2016 Materialize

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.</p>
<br>
<h4 class="center"><strong>Accounts</strong></h4>
<p>Signing up for <strong>http://jamiecurd.tk</strong> is curently disabled, you are welcome to contact me to arrange the setup of an account for yourself.</p>
<br>
<h4 class="center"><strong>Images</strong></h4>
<p>All images on this site come from <strong>http://unsplash.com</strong>, Unsplash is a free image library where photographers post their pictures, all images a free and non-copyright</p>
<br>
<h4 class="center"><strong>Font Awesome Icons</strong></h4>
<p class="center">Font Awesome Icons are licensed under the MIT license</p>
	  <p>The MIT License (MIT)

Copyright (c) 2016 Font Awesome

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.</p>
<br>
<h4 class="center"><strong>Privacy Policy</strong></h4>
<p>The Latest Version Of Our Privacy Policy Is Avaliable <a href="http://jamiecurd.tk/assets/docs/jamiecurd.pdf" download="Jamiecurd">Here</a>, This Was Last Updated 12/04/16</p>



	</div>
    <div class="modal-footer">
      <a href="index.html" class="modal-action modal-close waves-effect waves-dark btn-flat ">Close</a>
    </div>
  </div>
</footer>
    <!--Import jQuery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.js"></script>
	<script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>
</html>