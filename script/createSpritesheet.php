<?php

$width = 115;
$height = 79;
$nbimg = 12;

$img = imagecreatetruecolor($width * $nbimg, $height);
imagesavealpha($img, true);
$color = imagecolorallocatealpha($img, 0, 0, 0, 127);
imagefill($img, 0, 0, $color);

for($i=0; $i < $nbimg; $i++) {

    $name = "frame_" . str_pad($i, 2, '0', STR_PAD_LEFT) . "_delay-0.03s.gif";
    
    echo $name . "\n";

    $src = imagecreatefromgif($name);
    imagecopy($img, $src, $i * $width, 0, 0, 0, $width, $height);

}
imagepng($img, "unicorn.png"); 
imagedestroy($img);
?>
