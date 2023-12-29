<?php
$im = imagecreate(500, 500);
$orange = imagecolorallocate($im, 255, 165, 0);
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);
$green = imagecolorallocate($im,0,255,0);
//imagefilledrectangle($im, 0, 0, 150, 150, $white);  

imagerectangle($im, 50, 50, 150, 150, $white); //for border color
imagefill($im, 100, 100, $black);

//imageline($im, 0, 0, 150, 150, $white);
//imageline($im, 0, 150, 150, 0, $white);
imageellipse($im,300,300,350,350,$green);
imagefill($im,250,250,$green);

header('Content-type: image/png');
imagepng($im);
?>