<?php session_start() ?>
<?php require_once 'header.php' ?>
<?php
function displayArticle($xmlString, $numArticlesToShow) {
    
    $xml = simplexml_load_string($xmlString);

    $articles = $xml->channel->item;
    // Afficher les articles sélectionnés
    for ($i = 0; $i < $numArticlesToShow; $i++) {
        $articleTitle =  $articles[$i]->title;
        $title = $xml->channel->title;
        $articleLink =  $articles[$i]->link;
        $articleDescription = $articles[$i]->description;
        $articleImageURL =  $articles[$i]->enclosure['url'];
        ?>
    <div class='card'>
        <h3 class='text-warning'><?=$title?></h3>
        <h4 class='text-warning f-1'><?=$articleTitle?></h4>
        <p class="w-75 m-auto"><?=$articleDescription?></p>
        <a href="<?=$articleLink?>" class='text-light'>Lien de l'article</a>
        <img src="<?=$articleImageURL?>" alt="image de l'aticle" class='articleImg'>
    </div>
    
    <?php
}
}
$xmlFile1 = 'https://www.jeuxactu.com/rss/tests.rss'; // Placez le contenu XML complet dans cette variable
$xmlFile2 = 'https://www.jeuxactu.com/rss/tips.rss';
$xmlFile3 = 'https://www.jeuxactu.com/rss/pc.rss';
$xmlFile4 = 'https://www.jeuxactu.com/rss/ps5.rss';
$xmlFile5 = 'https://www.jeuxactu.com/rss/switch.rss';



// Récupérer le nombre d'articles à afficher choisi par l'utilisateur
$numArticlesToShow = isset($_SESSION['choice']) ? (int)$_SESSION['choice'] : 3;

// Limiter le nombre d'articles à afficher pour être sûr qu'il est bien entre 6, 9 et 12
$numArticlesToShow = in_array($numArticlesToShow, [6, 9, 12]) ? $numArticlesToShow : 6;
?>
<?php
if (isset($_GET['rss'])) {
    $rss_param = $_GET['rss'];

    switch ($rss_param) {
        case 'news':
            $xmlFile = 'https://www.jeuxactu.com/rss/news.rss';
            break;
        case 'pcNews':
            $xmlFile = 'https://www.jeuxactu.com/rss/pc.rss';
            break;
        case 'switchNews':
            $xmlFile = 'https://www.jeuxactu.com/rss/switch.rss';
            break;
        case 'test':
            $xmlFile = 'https://www.jeuxactu.com/rss/tests.rss';
            break;
        case 'tips':
            $xmlFile = 'https://www.jeuxactu.com/rss/tips.rss';
            break;
        default:
            $xmlFile = 'https://www.jeuxactu.com/rss/news.rss';
            break;
    }

    // Charger le contenu XML en fonction du fichier déterminé par le paramètre "rss"
    $xmlString = file_get_contents($xmlFile);

    // Afficher les articles en utilisant la fonction displayArticle
    ?>
    <!-- Affichage des articles dans une colonne -->
    <div class="gridContainer">
        <div>
            <?php displayArticle($xmlString, $numArticlesToShow); ?>
        </div>
    </div>
<?php
}
?>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
crossorigin="anonymous"></script>
</body>

</html>
