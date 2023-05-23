<?php
for($i = 0; $i<=100; $i++){
    if(0<=$i and $i<=20){
        echo "<i>$i</i><br>";
    }elseif($i==42){
        echo "La Plateforme_<br>";
    }elseif(25<=$i and $i<=50){
        echo "<u>$i</u><br/>";
    }else{
        echo "$i<br>";
    }
}
?>