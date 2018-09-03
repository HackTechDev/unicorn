<?php

$width = 38;
$height = 37;
$nbimg = 8;

$img = imagecreatetruecolor($width * $nbimg, $height);
imagesavealpha($img, true);
$color = imagecolorallocatealpha($img, 0, 0, 0, 127);
imagefill($img, 0, 0, $color);

for($i=0; $i < $nbimg; $i++) {

    $name = "frame_" . $i. "_delay-0.3s.gif";
    
    echo $name . "\n";

    $src = imagecreatefromgif($name);
    imagecopy($img, $src, $i * $width, 0, 0, 0, $width, $height);

}
imagepng($img, "poop.png"); 
imagedestroy($img);
?>
