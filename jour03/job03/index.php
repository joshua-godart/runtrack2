<?php
$str = "I'm sorry Dave I'm afraid I can't do that.";

$count = 0;
for ($i = 0; isset($str[$i]); $i++) {
    $count++;
}

for ($i = 0; $i < $count; $i++) {
    $char = $str[$i];

    if ($char === 'a' || $char === 'e' || $char === 'i' || $char === 'o' || $char === 'u' || $char === 'y' || $char === 'A' || $char === 'E' || $char === 'I' || $char === 'O' || $char === 'U' || $char === 'Y') {
        echo $char;
    }
}
?>