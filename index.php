<?php

//Files original..
$img = 'img/singe.png';

//Setting new files..
$newImg = imagecreatetruecolor(150, 150);
$newfile = imagecreatefrompng($img);
imagecopyresampled($newImg, $newfile, 0, 0, 0, 0, 150, 150, 512, 512);
$newName = 'petit_singe.png';
imagepng($newImg, $newName);

//header('Content-Type: image/png');

imagedestroy($newImg);



?>