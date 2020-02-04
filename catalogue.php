<?php
include ('catalogue_fonction.php');
var_dump($liste_articles);
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
    // affichage des variables nommées plus haut
   // création de la foreach for pour afficher chaque article avec sa photo, son prix et son nom
    foreach ($liste_articles as $key=> $article ){
//        var_dump($liste_articles); ?>

                <div class="row" >
                    <div class="col">
                        <img src="<?php  echo $article["image"]; ?>"  id="" width="300" class="rounded corners img-fluid"  alt="article à acheter">
                    </div>

                    <div class="col align-self-center">
                        <h2><?php echo $article["name"];?></h2>

                    </div>

                    <div class="col align-self-center"">
                        <h2><?php echo $article["price"]." euros" ; ?> </h2>
                    </div>
                    <div class="col align-self-center"">
                        <input type="checkbox" name="articles['<?php echo $key?>']"/> <label for="case" ></label>
                    </div>
                </div>
    <?php } ?>
                <div class="row-12 align-self-center"" >
                    <input type="submit" value="commander" />
                </div>
            </form>
        </div>
    </body>
</html>
