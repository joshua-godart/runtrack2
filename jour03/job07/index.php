<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}

$length = $count;
$rearrangedStr = '';

// Parcourir la chaîne
for ($i = 0; $i < $length; $i++) {
    // Obtenir l'indice du caractère suivant en prenant en compte le dernier caractère qui devient le premier
    $nextIndex = ($i + 1) % $length;
    // Ajouter le caractère suivant à la nouvelle chaîne
    $rearrangedStr .= $str[$nextIndex];
}

echo $rearrangedStr;
?>