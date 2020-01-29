<?php
session_start();
try {
    //Test 1:  Tester si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['photo_article']) AND $_FILES['photo_article']['error'] == 0) {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['photo_article']['size'] <= 1000000) {
            // Test 2: Tester si l'extension est autorisée: interdire à tout prix que les gens puissent envoyer des fichiers PHP, sinon ils pourraient exécuter des scripts sur notre serveur
            $infosfichier = pathinfo($_FILES['photo_article']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees)) {
                // Si extension autorisée: on peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['photo_article']['tmp_name'], 'images/' . basename($_FILES['photo_article']['name']));
                echo "Votre article a bien été envoyé !";
            } else {
                // Si l'extension n'est pas autorisée: on ne valide pas le fichier et on envoie le client vers une page d'erreur
                echo "L'extension du fichier n'est pas pris en compte par notre site";
            }
        }
    }
    if (isset($_POST['nom_article'])) {
         if (intval($_POST['prix_article']) > 0){
         } else {
             header('Location: addArticle1.php');
             echo "Vous n'avez pas entré de prix";

             }
         }
} catch(Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

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
        <div class="col">
            <h1>Votre article</h1>
        </div>
    </div>
    <div class="row">
        <?php // affichage des variables nommées plus haut ?>
        <div class="col">
            <p><img src="<?php echo 'images/' . basename($_FILES['photo_article']['name']); ?>" alt="Un article" /></p>
        </div>
        <div class="col">
            <?php
            //Pour lutter contre la faille XSS (attention au code HTML que vous recevez): Pour échapper le code HTML, il suffit d'utiliser la fonction 'htmlspecialchars'
            ?>
            <p><?php echo htmlspecialchars($_POST['nom_article']); ?></p>
        </div>
        <div class="col">
            <p><?php echo htmlspecialchars($_POST['prix_article']); ?></p>
        </div>
    </div>
    <div class="row">
        <p>Pour ajouter un nouvel article <a href="addArticle1.php">cliquez ici</a></p>
    </div>
</div>
</body>
</html>
