<?php
    $matriz = array ( array(1,2,3), array(4,5,6), array (7,8,9) );
        
    foreach ($matriz as $i => $array){
        foreach ($array as $j => $valor){
            echo "[$i][$j]: ".($valor+2)."<br>";
        }
    }
?>
