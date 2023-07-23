<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectstudent";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}

else{
	$iama=$_REQUEST['iama'];
	//echo $iama;}
	if($iama==0){
		header('location: register.php');
		/*echo "Click to fill student details";?>
		<p>
  		 <a href="register.php">Click</a>
  		</p><?php*/
	}
	else{
		header('location: registerteacher.php');}
}

// Closing the connection.
$conn->close();
?>
		