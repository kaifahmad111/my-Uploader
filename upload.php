<?php
//Move upload files to a nice directory
//$targetPath= "uploads/".($_FILES["inpFile"]["name"]);
//move_uploaded_file($_FILES["inpFile"]["tmp_name"], $targetPath);


$filename1=$_FILES['inpFile']['name'];
$tmp_name1=$_FILES['inpFile']['tmp_name'];
//echo $filename1."<br>";

$location='uploads/';
move_uploaded_file($tmp_name1,$location.$filename1);


?>

