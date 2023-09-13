<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion png</title>
</head>
<body style="display: flex;">
    <!-- Affichage de l'image originale cible -->
    <?php echo "<img src='".$imgUser."' alt='Image à convertir'>"; ?>
    <?php foreach($dir as $img): ?>
        <!-- Affichage de toutes les nouvelles versions de l'image originale grâce à la boucle en ignorant les element "." et ".." que le array affiche -->
        <?php if($img != '.' && $img != '..'): ?>
            <?php echo "<section>"; ?>
            <img src="<?php echo "newImg/".$img ?>" alt="<?php echo "newImg/".$img ?>">
            <?php echo "</section>"; ?>
        <?php endif; ?>
    <?php endforeach; ?>
    
</body>
</html>