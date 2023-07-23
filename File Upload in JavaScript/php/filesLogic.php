<?php
$conn=mysqli_connect("localhost","root","","upload");
$sql="SELECT * FROM file";
$result=mysqli_query($conn,$sql);
$files=mysqli_fetch_all($result,MYSQLI_ASSOC);
if(isset($_GET['file_id']))
{
    $id=$_GET['file_id'];
    $sql="SELECT * FROM file WHERE Id=$id";
    $result=mysqli_query($conn,$sql);
    $file=mysqli_fetch_assoc($result);
    $filepath='files/'.$file['file_name'];
    if(file_exists($filepath))
    {
        header('Content-Type: application/octet-stream');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename='.basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length:'.filesize('files/'.$file['file_name']));
        readfile('files/'.$file['file_name']);
        exit;
    }
}
?>