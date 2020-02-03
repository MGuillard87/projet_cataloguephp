<?php
// inclure les fonctions et les données via un fichier pour les utiliser dans ce fichier
include ('catalogue_fonction.php');

// Toujours vérifier que les informatons utilisées existent: var_dump très utile dans ce cas
//var_dump($liste_articles)
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
            <h1>Boutique</h1>
        </div>
    </div>
    <?php

    // affichage des variables nommées plus haut ?>
    <?php      // création de la foreach for pour afficher chaque article avec sa photo, son prix et son nom
    try {
        if (!empty($_POST)) {
            //Toujours vérifier que les informatons utilisées existent et contiennent des données
//            var_dump($_POST);
    // Si $_POST contient une/des données: la case est cochée et on peut afficher les articles

    // On va boucler dans la superVariable $_POST pour aller chercher l'information/donnée qui nous intéresse

            foreach ($_POST as $key => $selective){
                // on enregistre dans une variable les informations récupérées
                $article=$liste_articles[$key] ?>
                <div class="row panier">
                    <div class="col">
                        <img src="<?php echo $article['image']; ?>" width="300" class="rounded corners img-fluid"
                             alt="article à acheter">
                    </div>

                    <div class="col">
                        <h2><?php echo $article['name']; ;?></h2>
                    </div>

                    <div class="col">
                        <h2><?php echo $article['price'] . " euros"; ?> </h2>
                    </div>
                </div>
<?php

            }
        }
        else {

    }

    } catch(Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
    }
    ?>




    </body>
</html>

