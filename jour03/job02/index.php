<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}
for ($i = 0; $i < $count; $i += 2) {
    echo $str[$i];
}
?>