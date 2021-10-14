<?php 
//Load this script like this 
// img.php?img=media/owl.jpg&r=0.3

$img="";  
$ratio = 1; // Ratio value 0 to 1 , it is similar to 0 to 100 %


//get image source file
if (isset($_GET['img'])) {
	$img=test_input($_GET['img']);
}

//get ration/percentage 
if (isset($_GET['r'])) {
	$ratio=test_input($_GET['r']);
}

if ($img) {
		$img = img_to_base64($img);  
	    // Content type 
	    header('Content-Type: image/jpeg');
	    $data = explode( ',', $img );
	    $data = base64_decode($data [1]);
	    //$data = base64_decode($img);
	    $im = imagecreatefromstring($data);
	    $width = imagesx($im);
	    $height = imagesy($im);
	    $newwidth = $width * $ratio;
	    $newheight = $height * $ratio;
	    //echo $data; 
	    $thumb = imagecreatetruecolor($newwidth, $newheight);

	    // Resize
	    imagecopyresized($thumb, $im, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

	    // Output
	    imagejpeg($thumb);
}

//convert image to base64
function img_to_base64($path){  
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	return $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
}

// Test User Input
function test_input($data) { 
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}