<?php
$isPremier = true;

for ($i = 2; $i <= 1000; $i++) {
    $isPremier = true;

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j === 0) {
            $isPremier = false;
            break;
        }
    }

    if ($isPremier) {
        echo $i . "<br />";
    }
}
?>