<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Boutique</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h1>Création d'un article</h1>
        </div>

        <form action="displayarticle1.php" method="post" enctype="multipart/form-data">
            <p><label>l'image de l'article : <input type="file" name="photo_article" required /></label></p>
            <p><label>Le nom de l'article : <input type="text" name="nom_article" required placeholder="Nom de l'article"/></label></p>
            <p><label>Le prix de l'article : <input type="text" name="prix_article" required placeholder="Prix en Euros"/></label></p>
            <p><input type="submit" value="Envoyer l'article"></p>
        </form>

    </div>
</div>
</body>
</html>
