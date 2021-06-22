<?php
require 'image.compare.class.php';
 
/*
	these two images are almost the same so the hammered distance will be less than 10
	try it with images like this:
		1. the example images
		2. two complatly different image
		3. the same image (returned number should be 0)
		4. the same image but with different size, even different aspect ratio (returned number should be 0)
	you will see how the returned number will represent the similarity of the images.
*/ 
$class = new compareImages;
$probability = $class->compare('students/1.jpg','students/2.jpg');
echo $probability;

  if ($probability <=10) {
  	// code...

  	echo "ugly face";

  }
  else
  {
  	echo "more ugly face";
  }
?>