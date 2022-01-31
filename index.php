<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);

echo "Il ya au total: " . count($dico) . " mots dans ce dictionnaire.<br><br>";
$counter = 0;
$counter2 = 0;
$counter3 = 0;
foreach ($dico as $word) {
    if (strlen($word) === 15) {
        $counter++;
    }

    if (strpos($word, 'w')) {
        $counter2++;
    }

    if (strpos($word, 'q') === strlen($word)) {
        $counter3++;
    }
}
echo "Il y a: " . $counter . " mots ayant une longueur de 15 <br>";
echo "Il y a: " . $counter2 . " contenant la lettre w<br>";
echo "Il y a: " . $counter3 . " mots finissant par la lettre q<br>";

$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films
$before2K = 0;
$kidsFam = 0;
$drama = 0;
$actAdventure = 0;
$sciFantasy = 0;
$comedy = 0;
$horror = 0;
$musicals = 0;
$independent = 0;
$thriller = 0;
$romance = 0;
$western = 0;
$documentary = 0;
$musicDocumentary = 0;
foreach ($top as $key => $value) {
    if ((int)substr($value["im:releaseDate"]['attributes']['label'], -4) < 2000) {
        $before2K++;
    }

    if ($value['category']['attributes']['term'] === "Kids & Family") {
        $kidsFam++;
    }

    if ($value['category']['attributes']['term'] === "Drama") {
        $drama++;
    }

    if ($value['category']['attributes']['term'] === "Action & Adventure") {
        $actAdventure++;
    }

    if ($value['category']['attributes']['term'] === "Sci-Fi & Fantasy") {
        $sciFantasy++;
    }

    if ($value['category']['attributes']['term'] === "Comedy") {
        $comedy++;
    }

    if ($value['category']['attributes']['term'] === "Horror") {
        $horror++;
    }

    if ($value['category']['attributes']['term'] === "Musicals") {
        $musicals++;
    }

    if ($value['category']['attributes']['term'] === "Independent") {
        $independent++;
    }

    if ($value['category']['attributes']['term'] === "Thriller") {
        $thriller++;
    }

    if ($value['category']['attributes']['term'] === "Romance") {
        $romance++;
    }

    if ($value['category']['attributes']['term'] === "Western") {
        $western++;
    }

    if ($value['category']['attributes']['term'] === "Documentary") {
        $documentary++;
    }

    if ($value['category']['attributes']['term'] === "Music Documentaries") {
        $musicDocumentary++;
    }



    ?>
<div>
    <h1><?= (int)$key +1 ?></h1>
    <p>Titre: <?= $value['im:name']['label'] ?></p>
    <p>Réalisateur: <?= $value['im:artist']['label'] ?></p>
    <p>Date de sortie: <?= $value["im:releaseDate"]['attributes']['label'] ?></p>
    <p>Catégorie: <?= $value['category']['attributes']['term'] ?></p>
</div>
<?php
}

echo "Il y a eu ".$before2K. " film sortis avant les années 2000"."<br>";
echo "Il y a ".$kidsFam. " film de la catégorie Kids & family"."<br>";
echo "Il y a ".$drama. " film de la catégorie Drama"."<br>";
echo "Il y a ".$actAdventure. " film de la catégorie Action & Adventure"."<br>";
echo "Il y a ".$sciFantasy. " film de la catégorie Sci & Fantasy"."<br>";
echo "Il y a ".$comedy. " film de la catégorie Comedy"."<br>";
echo "Il y a ".$horror. " film de la catégorie Horror"."<br>";
echo "Il y a ".$musicals. " film de la catégorie Musicals"."<br>";
echo "Il y a ".$independent. " film de la catégorie Independent"."<br>";
echo "Il y a ".$thriller. " film de la catégorie Thriller"."<br>";
echo "Il y a ".$romance. " film de la catégorie Romance"."<br>";
echo "Il y a ".$western. " film de la catégorie Western"."<br>";
echo "Il y a ".$documentary. " film de la catégorie Documentary"."<br>";
echo "Il y a ".$musicDocumentary. " film de la catégorie Music Documentary"."<br>";

echo "La catégorie ayant le plus de film dans le top 100 est Action & Adventure avec ".$actAdventure. " film dans le classement.";
