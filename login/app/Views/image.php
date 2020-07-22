header("Content-Type: image/png");

$im = imagecreatefromjpeg("a1.png");

imagejpeg($im);
imagedestroy($im);