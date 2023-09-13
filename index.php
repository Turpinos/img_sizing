<?php

$img = 'img/singe.png';

echo "<img src='".$img."' alt='singe'> <br/>";

$largeur = getimagesize($img);
$width = '400';
$height = '400';
$newImg = imagecreatetruecolor($width, $height);
$miniaWidth = '150';
$miniaHeight = '150';

($img);
echo "<br/>";
imagepng($newImg, null, 1);
var_dump($largeur);

?>