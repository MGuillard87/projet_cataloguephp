<?php


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
//   try {
//    if ( !empty($_POST['case'])){
//
    if (isset($_POST["case"])) { ?>
    // La case est cochée: afficher les articles
      <div class="row panier" >
            <div class="col">
                <img src="<?php  echo $_POST["case['image']"]; ?>" width="300" class="rounded corners img-fluid" alt="article à acheter">
            </div>

            <div class="col">
                <h2><?php echo $_POST['$article["name"]'];?></h2>
            </div>
            <div class="col">
                <h2><?php echo $_POST['$article["price"]']." euros" ; ?> </h2>
            </div>
    </div>
</div>
<?php }
    else {
    // La case est décochée
    }




//catch(Exception $e){
//        die('Erreur : '.$e->getMessage());
//}
?>

    </body>
</html>

