<?php

//Conversion de l'image originale en taille inférieur (400px dans ce cas)..
function littleImg($imgUser, $width, $height, $origineWidth, $origineHeight){

    $newImg = imagecreatetruecolor($width, $height);
    $newfile = imagecreatefrompng($imgUser);

    imagealphablending($newImg, false);

    imagecopyresampled($newImg, $newfile, 0, 0, 0, 0, $width, $height, $origineWidth, $origineHeight);

    imagesavealpha($newImg, true);
    
    $newName = 'newImg/little_singe'.$width.'x'.$height.'.png';

    return imagepng($newImg, $newName);
    imagedestroy($newImg);

}

//Conversion de l'image originale en taille inférieur (150px dans ce cas)..
function miniaImg($imgUser, $width, $height, $origineWidth, $origineHeight){
    
    $newImg = imagecreatetruecolor($width, $height);
    $newfile = imagecreatefrompng($imgUser);

    imagealphablending($newImg, false);

    imagecopyresampled($newImg, $newfile, 0, 0, 0, 0, $width, $height, $origineWidth, $origineHeight);

    imagesavealpha($newImg, true);

    $newName = 'newImg/minia_singe'.$width.'x'.$height.'.png';

    return imagepng($newImg, $newName);
    imagedestroy($newImg);

}

?>