<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$reversedStr = '';

$count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}

// Parcourir la chaîne de la fin vers le début
for ($i = $count - 1; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

echo $reversedStr;
?>