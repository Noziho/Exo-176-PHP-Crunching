<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
$dicoString = implode(',', $dico);
echo "Il ya au total: ".str_word_count($dicoString). " mots dans ce dictionnaire.<br><br>";
$counter = 0;
$counter2 = 0;
$counter3 = 0;
foreach ($dico as $word){
    if (strlen($word) === 15){
        $counter++;
    }
    if (strpos($word, 'w')) {
        $counter2++;
    }

    $wordLastLetter = substr($word, -1, 1);

    if (strrpos($wordLastLetter, 'q')) {
        $counter3++;
    }
}
echo "Il y a: ".$counter. " mots ayant une longueur de 15 <br>";
echo "Il y a: ".$counter2. " contenant la lettre w<br>";
echo "Il y a: ".$counter3. " mots finissant par la lettre q<br>";

