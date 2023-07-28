<?php require_once '../views/header.php' ?>
<body>
    <?php
    $xmlFile ='https://www.jeuxactu.com/rss/ps5.rss';
    $xml = simplexml_load_file($xmlFile);
    var_dump($xml);
    $articles = $xml->channel->item;
    $title = $xml->channel->title;

 
    // Afficher les articles sélectionnés
    foreach ($articles as $article) {
        $articleTitle = $article->title;
        $articleLink = $article->link;
        $articleDescription = $article->description;
        $articleImageURL = $article->enclosure['url'];
        ?>
    <div class='card'>
        <h3 class='text-warning'><?=$title?></h3>
        <h4 class='text-warning f-1'><?=$articleTitle?></h4>
        <p><?=$articleDescription?></p>
        <a href="<?=$articleLink?>" class='text-light'>Lien de l'article</a>
        <img src="<?=$articleImageURL?>" alt="image de l'aticle" class='articleImg'>
    </div>
    <?php
}
// Récupérer le nombre d'articles à afficher choisi par l'utilisateur
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>