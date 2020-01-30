<?php
$liste_articles = [
    ["image"=>"images/chapeau_chat.jpg", "name"=>"Chapeau", "price"=>10],
    [ "image"=>"images/pull_cerf.jpg", "name"=>"Pull", "price"=>5],
    ["image"=> "images/nounours.jpg", "name"=>"Nounours", "price"=>1500]
];
// création de la fonction pour afficher tous les articles
function afficheArticle($catalogue_articles){
    foreach ($catalogue_articles as $article){
        afficheart ( $article["image"], $article["name"], $article["price"]);
    }
}

//fonction qui affiche 1 article
function afficheArt($nom, $prix, $img){
        ?>
        <div class="row" >
            <div class="col">
                <img src="images/<?= $img ?>" width="300" class="rounded corners img-fluid" alt="article à acheter">
            </div>

            <div class="col">
                <h2><?= $nom?></h2>
            </div>

            <div class="col">
                <h2><?= $prix." euros" ; ?> </h2>
            </div>
        </div>
    <?php
} ?>
