<?php
function plateforme($str){
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        $count++;
    }
    if($str[$count-1] === "e" and $str[$count-2]=== "m"){
        echo $str . "_";
    }else{
        echo $str;
    }
    }
plateforme("club");
?>