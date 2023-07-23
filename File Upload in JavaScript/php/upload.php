<?php
  $file_name =  $_FILES['file']['name']; //getting file name
  $tmp_name = $_FILES['file']['tmp_name']; //getting temp_name of file
  //$file_up_name = time().$file_name; //making file name dynamic by adding time before file name
  move_uploaded_file($tmp_name, "files/".$file_name); //moving file to the specified folder with dynamic name
    $file_size = $_FILES['file']['size'];
    /* new file size in KB */
    $new_size = $file_size/1024;
    $file_type = $_FILES['file']['type'];
    $con=mysqli_connect("localhost","root","","upload");
    $ins="INSERT INTO file SET file_name='$file_name',type='$file_type',size='$new_size'";
    $con->query($ins);
?>
