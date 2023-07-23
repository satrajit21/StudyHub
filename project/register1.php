<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <!-- CSS file -->
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome 5 CDN link to add social icons in html5 registration form -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
<div class="container">
        <dive class="formWraper">

            <!-- Left section of responsive registration form -->

            <div class="formDiv">
                <h2>Create Account</h2>
               

                <p class="text">Sign Up with Email Address</p>
  <div class="header">
  	<h2>Register</h2>
  </div>
  <form method="post" action="server1.php">
  	<div class="input-group">
  	  <label>I am a</label>
	  <select name="iama">
  	  	<option value="0">Student</option>
		<option value="1">Teacher</option>
	 </select>
  	</div>
	<div class="input-group">
  	  <button type="next" class="btn" name="reg_user">Next</button>
  	</div>
	  </div>
	  <!-- Right section of responsive registration form -->
	  <div class="welcomeDiv">
                <h2>Study Hub</h2>
                <p class="text" >Welcome to our classroom where the magic never stops and the adventure never ends.</p>

              
            </div>

        </dive>
    </div> 
</form>
</form>
</body>
</html>

