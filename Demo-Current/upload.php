<?php

// new filename
$filename = 'pic_'.date('YmdHis') . '.jpg';

$url = '';
if( move_uploaded_file($_FILES['webcam']['tmp_name'],'upload/'.$filename) ){
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . 'upload/' . $filename;

}
// Return image url
// echo url;
$currentImage = 'upload/'.$filename;
require 'image.compare.class.php';
$class = new compareImages;
$probability = $class->compare('students/1.jpg',$currentImage);



$con=@mysqli_connect("localhost","root",'');
$db=@mysqli_select_db($con,"compare") or die(@mysqli_error( $con ));

$SQL="insert into compare (probability,image_url) values ('$probability','$currentImage')";

$result=@mysqli_query($con,$SQL) or die(@mysqli_error( $con ));

// while ($row=@mysqli_fetch_array($result)) {
// 	# code...
// }
header("Location:quiz.php?pp=$probability");



?>