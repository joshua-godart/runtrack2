<?php
function occurences($str, $char){
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        $count++;
    }
    $count2 = 0;
    for ($i = 0; $i < $count; $i++) {
        if($str[$i] === $char){
            $count2 ++;
        }
        }
    return $count2;
}
echo occurences("bonjour","o");
?>