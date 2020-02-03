<?php
include ('catalogue_fonction.php');


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
    foreach ($liste_articles as $key=> $article ){
//        var_dump($liste_articles);

        ?>
            <form method="post" action="panier.php">
                <div class="row" >
                    <div class="col">
                        <img src="<?php  echo $article["image"]; ?>" width="300" class="rounded corners img-fluid"  alt="article à acheter">
                    </div>

                    <div class="col">
                        <h2><?php echo $article["name"];?></h2>

                    </div>

                    <div class="col">
                        <h2><?php echo $article["price"]." euros" ; ?> </h2>
                    </div>
                    <div class="col">
                        <input type="checkbox" name="<?php echo $key?>" id="case" /> <label for="case" ></label>
                    </div>
                </div>
    <?php } ?>
                <div class="row-12" >
                    <input type="submit" value="commander" />
                </div>
            </form>
        </div>
    </body>
</html>
