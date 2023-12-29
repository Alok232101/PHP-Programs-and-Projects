<?php
$im = imagecreate(500, 500);
$orange = imagecolorallocate($im, 255, 165, 0);
$black = imagecolorallocate($im, 0, 0, 0);
$white = imagecolorallocate($im, 255, 255, 255);
$green = imagecolorallocate($im,0,255,0);

imagefilledrectangle($im, 0, 0, 499, 499, $white);

imageellipse($im,250,250,340,340,$black);

imageline($im, 100, 320, 500, -700, $orange);
imagefill($im,250,250,$black);
imageline($im, 100, 320, 750,-595, $orange);

imageline($im, 110, 340, 400, 10, $orange);
imagefill($im,250,250,$black);
imageline($im, 110, 340, 450, 100, $orange);

imageline($im, 125, 360, 400, 170, $orange);
imagefill($im,250,250,$black);
imageline($im, 125, 360, 450, 250, $orange);

imageline($im, 145, 380, 500, 280, $orange);
imagefill($im,250,250,$black);
imageline($im, 145, 380, 550, 350, $orange);

imagefill($im,250,250,$orange);
header('Content-type: image/png');
imagepng($im);
?>