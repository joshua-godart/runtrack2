<?php
function calcul($x,$str,$y){
    if($str == "+"){
        $result = $x + $y;
    }elseif($str == "-"){
        $result = $x - $y;
    }elseif($str == "*"){
        $result = $x * $y;
    }elseif($str == "/"){
        $result = $x / $y;
    }elseif($str == "%"){
        $result = $x % $y;
    }
    return $result;
}
echo calcul(3,"+",4) . "<br>";
echo calcul(24,"/",4) . "<br>";
?>