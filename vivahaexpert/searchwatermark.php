<?php
$img_name = "memphoto1/Sunset.jpg";
header("Content-type: image/jpeg");
 
// get image file
$img_src = imagecreatefromjpeg($img_name);

list($width, $height) = getimagesize($img_name);
/*$width_src = imagesx($img_src);
$height_src = imagesy($img_src);*/
$width_src = $width;
$height_src = $height;
// new image size = old image size
$width_dst = $width_src;
$height_dst = $height_src;
$quality = 80;
 
// create new image
$img = imagecreatetruecolor($width_src, $height_dst);
imagecopyresampled($img, $img_src, 0, 0, 0, 0, $width_dst, $height_dst, $width_src, $height_src);
 
// rectangle size for text box
$x1_rect = 0;
$y1_rect = $height_dst - 18;
$x2_rect = $width_dst;
$y2_rect = $height_dst;
 
$color = imagecolorallocate($img, 0, 0, 0);
$letter_color = imagecolorallocate($img, 163, 161, 161);
$text =$sitename;
//imagefilledrectangle($img, $x1_rect-5, $y1_rect-250, $x2_rect, $y2_rect, $color);
//imagettftext($img, 60, 0, $x1_rect-($x1_rect/2), $y1_rect-($y1_rect/2), $letter_color, "arial.ttf", $text);
imagettftext($img, 60, 35, $x1_rect+100, $y1_rect-50, $letter_color, "arial.ttf", $text);
// show in browser
imagejpeg($img, '', $quality);
 
imagedestroy($img_src);
imagedestroy($img);
	 
?>