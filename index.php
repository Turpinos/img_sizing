<?php
//Penser à supprimer les images du dossier "newImg" avant le rechargement de la page pour visaliser plus facilement le téléchargement des nouvelles images..
require_once('utilities.php');

//Files original, on charge normalement le fichier que l'utilisateur upload..
$imgUser = 'img/singe.png';

//On récupère les informations originales du fichier..
$arrayImgInfo =  getimagesize($imgUser);
$origineWidth = $arrayImgInfo[0];
$origineHeight = $arrayImgInfo[1];

//Déclaration de dimensions pour la version 400px..
$width = 400;
$height = 400;

littleImg($imgUser, $width, $height, $origineWidth, $origineHeight);

//Déclaration de dimensions pour la version miniature..
$width = 150;
$height = 150;

miniaImg($imgUser, $width, $height, $origineWidth, $origineHeight);

$dir = scandir('C:\MAMP\htdocs\img_sizing\newImg');

//A la fin du code, 2 image sont générées et sauvegardées dans le dossier "newImg"..
require_once('index.html.php');
?>