<?php
$liste_articles = [
    ["image"=>"images/chapeau_chat.jpg", "name"=>"Chapeau", "price"=>10],
    [ "image"=>"images/pull_cerf.jpg", "name"=>"Pull", "price"=>5],
    ["image"=> "images/nounours.jpg", "name"=>"Nounours", "price"=>1500]
];
// création de la fonction pour afficher les articles
function afficheArticle($catalogue_articles){
    foreach ($catalogue_articles as $article){
     ?>
        <div class="row" >
            <div class="col">
                <img src="<?php  echo $article["image"]; ?>" width="300" class="rounded corners img-fluid" alt="article à acheter">
            </div>

            <div class="col">
                <h2><?php echo $article["name"];?></h2>
            </div>

            <div class="col">
                <h2><?php echo $article["price"]." euros" ; ?> </h2>
            </div>
        </div>
    <?php }
} ?>
