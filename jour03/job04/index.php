<?php
$str = "Dans l'espace, personne ne vous entend crier.";

$count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}
$count2 = 0;
for ($i = 0; $i < $count; $i++) {
    if ($str[$i] !== ' ') {
        $count2++;
    }
}
echo "Le nombre de caractères dans la chaîne est : " . $count2;
?>