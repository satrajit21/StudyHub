<?php include('serverteacher.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <!-- CSS file -->
    <link rel="stylesheet" href="style1.css">
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
                <p>
                Already a member? <a href="loginteacher.php">Sign in</a>
  	</p>
            </div>
            <!-- Left section of responsive registration form -->

            <div class="formDiv">
                <h1>Create Account</h1>
  <div class="header">
  	<h2>Register</h2>
  </div>
  <form method="post" action="registerteacher.php">
  	<?php include('errors.php'); ?>
  	<div class="formGroup">
  	  
	<i class="far fa-user"></i>
  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
  	
    
    <div class="formGroup">
  	  <i class="far fa-envelope"></i>
  	  <input type="text" name="email" id="email" placeholder="email" value="<?php echo $email; ?>" >
      <p id="mailmsg">Email is <span id="text"></span></p>
  	</div>


  	<div class="formGroup">
  	  
		<i class="fas fa-lock"></i>
      <input type="password" name="password_1" id="password" placeholder="Password">
      <p id="message">Password is <span id="strength"></span></p>
  	</div>
  	<div class="formGroup">
  	  
		<i class="fas fa-lock"></i>
  	  <input type="password" name="password_2" placeholder="Confirm Password">
  	</div>
	  <div class="formGroup">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  
  </form>
  <script>
    
        var pass = document.getElementById("password");
        var msg = document.getElementById("message");
        var str = document.getElementById("strength");

        pass.addEventListener('input', () => {
          if(pass.value.length > 0){
            msg.style.display = "block";
          }
          else{
            msg.style.display = "none";
          }
          if(pass.value.length < 4){
            str.innerHTML = "weak";
            pass.style.borderColor = "#ff5925";
            msg.style.color = "#ff5925";
          }
          else if(pass.value.length >= 4 && pass.value.length < 8){
            str.innerHTML = "medium";
            pass.style.borderColor = "#FF8C00";
            msg.style.color = "#FF8C00";
          }
          else if(pass.value.length >= 8){
            str.innerHTML = "strong";
            pass.style.borderColor = "#26d730";
            msg.style.color = "#006400";
          }
        })
        
        var email = document.getElementById("email");
        
        

        email.addEventListener('input', () => {
          
          var mailmsg = document.getElementById("mailmsg");
          var text = document.getElementById("text");
          var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
          
          if(email.value.length > 0){
            mailmsg.style.display = "block";
          }
          else{
            mailmsg.style.display = "none";
          }

          if(email.value.match(pattern)){
            text.classList.add('valid');
            text.classList.remove('invalid');
            text.innerHTML = "valid.";
            email.style.borderColor = "#26d730";
            mailmsg.style.color = "#006400";
          }
          else{
            text.classList.add('invalid');
            text.classList.remove('valid');
            text.innerHTML = "invalid. Enter a valid email ID.";
            email.style.borderColor = "#ff5925";
            mailmsg.style.color = "#ff5925";
          }
        })
    </script>
</body>
</html>