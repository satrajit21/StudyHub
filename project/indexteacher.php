<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: loginteacher.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: loginteacher.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
		<!-- Font Awesome 5 CDN link to add social icons in html5 registration form -->
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="style1.css">
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
	<h1>Online Learning</h1>
</div>
	<h3>Welcome to our Home Page!</h3>	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<a href="http://localhost:3000/action.html">
    <button name="class" type="submit" value="submit" style="font-size:15px;"class="btn">
        Class
    </button>

      <a href="http://localhost/File%20Upload%20in%20JavaScript/" style="color: red;">
      <button name="upload" type="submit" value="submit" style="font-size:15px;"class="btn">
        Upload
    </button>

    <a href="http://localhost/File%20Upload%20in%20JavaScript/php/" style="color: red;">
    <button name="download" type="submit" value="submit" style="font-size:15px;"class="btn">
        Download
    </button>

      <a href="http://localhost/project/loginteacher.php">
      <button name="logout" type="submit" value="submit" style="font-size:15px;"class="btn">
        Log Out
    </button>
    <?php endif ?>
</div>

</body>
</html>