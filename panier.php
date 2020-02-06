<?php
// inclure les fonctions et les données via un fichier pour les utiliser dans ce fichier
include('catalogue_fonction.php');
//var_dump($_POST['quantites']);

//foreach ($liste_articles as $clef=> $produits){
//    var_dump($clef);
//   var_dump( $produits);
//    foreach ($produits as $clefs=> $quantites){
//        var_dump($clefs);
//        var_dump( $quantites);
//    }
//}
//die();
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
        <form method="post" action="panier.php">
<?php
// Toujours vérifier que les informatons utilisées existent: var_dump très utile dans ce cas
//var_dump($liste_articles)

// affichage des variables nommées plus haut
// création de la foreach for pour afficher chaque article avec sa photo, son prix et son nom
try {
    //Toujours vérifier que les informatons utilisées existent et que les variables contiennent des données
    //            var_dump($_POST);
    // Si $_POST contient une/des données: la case est cochée et on peut afficher les articles

    // On va boucler dans la superVariable $_POST pour aller chercher l'information/donnée qui nous intéresse
    // Création de la variable sum pour calculer le total panier
// affiche le panier pour la première fois
        $sum = 0;
        if (!empty($_POST)) {
            foreach ($_POST['articles'] as $key => $selective) {
                    // on enregistre dans une variable les informations récupérées
                    $article = $liste_articles[$key];
                    // apppel de la fonction permettant de retourner le total du panier
                if (isset( $_POST['quantites'][$key])){
                    $quantite = $_POST['quantites'][$key];
                }else {
                    $quantite = 0;
                }
                $prix= $article['price'];
                    $sum = totalPanier($sum, $prix, $quantite)// revoir le calcul avec fonction
                    ?>
                    <div class="row panier">
                        <div class="col align-self-center">
                            <img src="<?php echo $article['image']; ?>" width="300" class="rounded corners img-fluid"
                                 alt="article à acheter">
                        </div>

                        <div class="col align-self-center">
                            <h2><?php echo $article['name'];; ?></h2>
                        </div>

                        <div class="col align-self-center">
                            <h2><?php echo $article['price'] . " euros"; ?> </h2>
                        </div>

                        <div class="col align-self-center">
                            <input type="hidden" name="articles[<?php echo $key ?>]" id="case" value=""/>
                            <input type="number" name="quantites[<?php echo $key ?>]" min="1" value="<?php echo  $quantite ?>"/><br><label
                                for="case">Quantité</label>
                        </div>
                    </div>
                    <?php
                }
        }
        // Affichage du total panier
        ?>
                <div class="row">
                    <div class="col-sm-12 ">
                        <h1>Total commande: <?php echo($sum); ?> euros</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 ">
                        <input type="submit" value="confirmer la commande"/>
                    </div>
                </div>
            </form>

        <?php


        //    }
    } catch (Exception $e) {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }
    ?>
</body>
</html>

