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

foreach ($top as $key => $value) {?>
<div>
    <h1><?= (int)$key +1 ?></h1>
    <p><?= $value['im:name']['label'] ?></p>
</div>
<?php
}

