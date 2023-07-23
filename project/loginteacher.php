<?php include('serverteacher.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <head>
  <title>Registration system PHP and MySQL</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome 5 CDN link to add social icons in html5 registration form -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
        <dive class="formWraper">
<!-- Right section of responsive registration form -->
<div class="welcomeDiv">
                <h2>Study Hub</h2>
                <p class="text"  >Welcome to our classroom where the magic never stops and the adventure never ends.</p>
            </div>
            <!-- Left section of responsive registration form -->

            <div class="formDiv">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="loginteacher.php">
  	<?php include('errors.php'); ?>
  	<div class="formGroup">
  		
		  <i class="far fa-user"></i>
  		<input type="text" name="username" placeholder="Username" >
  	</div>
  	<div class="formGroup">
  		
		  
		<i class="fas fa-lock"></i>
  		<input type="password" name="password" placeholder="Password" >
  	</div>
  	<div class="formGroup">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="registerteacher.php">Sign up</a>
  	</p>
  </form>
</body>
</html>